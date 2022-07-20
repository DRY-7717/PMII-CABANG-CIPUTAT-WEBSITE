<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Categoryprogram;
use App\Models\User;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    //
    public function index()
    {
        $title = '';
        if (request('category')) {
            $category = Categoryprogram::firstWhere('slug', request('category'));
            $title = 'in ' . $category->name;
        }

        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = 'by ' . $user->name;
        }
        return view('award.index', [
            'title' => 'PMII Cabang Ciputat | Prestasi',
            'bigtitle' => 'Awards ' . $title,
            'awards' => Award::latest()->filter(request(['search', 'category', 'user']))->paginate(9)->withQueryString(),
            'categories' => Categoryprogram::all(),
            'users' => User::all()
        ]);
    }

    public function show(Award $award)
    {
        return view('award.detail',[
            'title' => 'PMII Cabang Ciputat | Detail Award',
            'award' => $award
        ]);
    }
}
