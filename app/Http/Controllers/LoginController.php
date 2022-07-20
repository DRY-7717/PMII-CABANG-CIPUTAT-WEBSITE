<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => "PMII Cabang Ciputat | Login",
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (auth()->user()->role === 1) {
                return redirect()->intended('/dashboard/anggota');
            }else{
                return redirect()->intended('/dashboard/program');
            }
        }

        return back()->with('message', 'Username or Password is wrong');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function forgotpassword()
    {
        return view('login.forgotpassword', [
            'title' => "PMII Cabang Ciputat | Forgot password",
        ]);
    }

    public function sendlink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        $action_link = route('login.resetpassword',['token' => $token, 'email' => $request->email]);

        $body = "We are received a request to the reset the password for <b>PMII Cabang Ciputat Website</b> account associated with ".$request->email.". You can reset your password by clicking the link below : ";

        Mail::send('email-forgot',['action_link' => $action_link, 'body' => $body], function($message) use ($request){
            $message->from('wicaksanabimaarya@gmail.com','PMII Cabang Ciputat Website');
            $message->to($request->email)->subject('Reset password');
        });

        return redirect('/login/forgotpassword')->with('message','Please check email, I have send email to '. $request->email);

    }

    public function resetpassword(Request $request, $token = null)
    {
        return view('login.resetpassword', [
            'title' => "PMII Cabang Ciputat | Reset password",
            'token' => $token,
            'email' => $request->email
        ]);
    }
    public function updatepassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6',
            'password2' => 'required|same:password'
        ]);

        $check_token = DB::table('password_resets',)->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if (!$check_token) {
            return back()->withInput()->with('message','Invalid token');
        }else{
            User::where('email',$request->email)
                ->update([
                    'password' => Hash::make($request->password)
                ]);

            DB::table('password_resets')->where([
                'email' => $request->email,
            ])->delete();

            return redirect('/login')->with('success','Congratulations!, your password has been changed. Now you can login with the new password!');
        }
    }
}
