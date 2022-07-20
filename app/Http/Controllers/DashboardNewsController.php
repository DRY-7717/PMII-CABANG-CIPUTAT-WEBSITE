<?php

namespace App\Http\Controllers;

use App\Models\Categoryprogram;
use App\Models\News;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('dashboard.news.index', [
            'title' => 'PMII Cabang Ciputat | All News',
            'news' => News::where('user_id',auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.news.create', [
            'title' => 'PMII Cabang Ciputat | Create News',
            'categories' => Categoryprogram::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:news',
            'categoryprogram_id' => 'required',
            'image' => 'image|file|max:2045',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('news-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 300);

        News::create($validatedData);

        return redirect('/dashboard/news')->with('message', '<div class="alert alert-success" role="alert">
        Your news has been created
      </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
        return view('dashboard.news.detail',[
            'title' => 'PMII Cabang Ciputat | Detail News',
            'news' => $news
        ]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
        return view('dashboard.news.edit',[
            'title' => 'PMII Cabang Ciputat | Edit News',
            'categories' => Categoryprogram::all(),
            'news' => $news
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //

        $rules = [
            'title' => 'required|max:255',
            'categoryprogram_id' => 'required',
            'image' => 'image|file|max:2045',
            'body' => 'required'
        ];

        if ($news->slug != $request->slug) {
            $rules['slug'] = 'required|unique:news';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($news->image) {
                Storage::delete($news->image);
            }
            $validatedData['image'] = $request->file('image')->store('news-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 300);

        News::where('id',$news->id)
                ->update($validatedData);
        
        return redirect('/dashboard/news')->with('message','<div class="alert alert-success" role="alert">
        Your news has been updated
      </div>');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //

        if ($news->image) {
            Storage::delete($news->image);
        }

        News::destroy($news->id);

        return redirect('/dashboard/news')->with('message','<div class="alert alert-success" role="alert">
        Your news has been deleted
      </div>');

    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(News::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
