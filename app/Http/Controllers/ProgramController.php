<?php

namespace App\Http\Controllers;

use App\Models\Categoryprogram;
use App\Models\Program;
use App\Models\User;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
       $title = '';
        if (request('category')) {
            $category = Categoryprogram::firstWhere('slug',request('category'));
            $title = 'in ' . $category->name;
        }
       
        if (request('user')) {
            $user = User::firstWhere('username',request('user'));
            $title = 'by ' . $user->name;
        }

        return view('program.index',[
            'title' => 'PMII Cabang Ciputat | Programs',
            'programs' => Program::latest()->filter(request(['search','category','user']))->paginate(7)->withQueryString(),
            'bigtitle' => 'All Program ' . $title
        ]);
    }

    public function show(Program $program)
    {
        return view('program.detail',[
            'title' => 'PMII Cabang Ciputat | Detail Program',
            'program' => $program
        ]);

    }
}
