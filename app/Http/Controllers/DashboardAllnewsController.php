<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class DashboardAllnewsController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.allnews.index', [
            'title' => 'PMII Cabang Ciputat | All News',
            'news' => News::all()
        ]);
    }

    public function show(News $news)
    {
        return view('dashboard.allnews.detail',[
            'title' => 'PMII Cabang Ciputat | Detail News',
            'news' => $news
        ]);
    }
    public function destroy(News $news)
    {
        News::destroy($news->id);
        return redirect('/allnews/news')->with('message','<div class="alert alert-success" role="alert">
        Your news has been deleted
      </div>');
    }
}
