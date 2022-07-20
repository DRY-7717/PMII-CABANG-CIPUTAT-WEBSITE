<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardUserController extends Controller
{
    //
    public function editpassword()
    {
        return view('dashboard.user.editpassword', [
            'title' => 'PMII Cabang Ciputat | Change Password',
        ]);
    }

    public function changepassword(Request $request, User $user)
    {
        $request->validate([
            'cpassword' => 'required',
            'password' => 'required|min:6',
            'password2' => 'required|min:6|same:password',
        ]);

        $cpassword = $request->cpassword;
        $password = $request->password;
        if (!Hash::check($cpassword, $user->password)) {
            return redirect('/dashboard/user')->with('message', '<div class="alert alert-danger" role="alert">
            Current password and new password not same !
          </div>');
        } else {
            if ($cpassword == $password) {
                return redirect('/dashboard/user')->with('message', '<div class="alert alert-danger" role="alert">
                New Password cannot be same as your current password
          </div>');
            } else {
               $user->password = Hash::make($password);
               $user->save();
                return redirect('/dashboard/user')->with('message', '<div class="alert alert-success" role="alert">
                Your password has been changed
          </div>');
            }
        }
    }
}
