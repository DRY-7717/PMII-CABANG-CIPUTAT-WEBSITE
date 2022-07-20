<?php

namespace App\Http\Controllers;

use App\Models\Categoryprogram;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
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
        return view('news.index', [
            'title' => 'PMII Cabang Ciputat | All News',
            'categories' => Categoryprogram::all(),
            'users' => User::all(),
            'news' => News::latest()->filter(request(['search', 'category', 'user']))->paginate(13)
        ]);
    }


    public function show(News $news)
    {
        return view('news.show',[
            'title' => 'PMII Cabang Ciputat | Detail News',
            'news' => $news
        ]);
    }

    public function searchpage()
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
        return view('dashboard.news.search', [
            'bigtitle' => 'All news ' . $title,
            'title' => 'PMII Cabang Ciputat | Search News',
            'categories' => Categoryprogram::all(),
            'users' => User::all(),
            'news' => News::latest()->filter(request(['search', 'category', 'user']))->paginate(7)->withQueryString()
        ]);
    }
}
