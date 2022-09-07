<?php

namespace App\Http\Controllers;

use App\Models\Categoryprogram;
use App\Models\Secretary;
use App\Models\User;
use Illuminate\Http\Request;

class MailController extends Controller
{
    //

    public function index()
    {
        $title = '';
        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = 'by ' . $user->name;
        }
        return view('Mail.index', [
            'title' => 'PMII Cabang Ciputat | Perizinan',
            'bigtitle' => 'Mails '. $title ,
            'mails' => Secretary::where('description','Diterima')->latest()->filter(request(['search', 'user']))->paginate(6)->withQueryString(),
            'users' => User::all()
        ]);
    }

    public function show(Secretary $secretary)
    {
        return view('mail.detail', [
            'title' => 'PMII Cabang Ciputat | Detail Surat',
            'mail' => $secretary
        ]);
    }
}
