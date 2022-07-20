<?php

namespace App\Http\Controllers;

use App\Models\Award;
use App\Models\Categoryprogram;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
class DashboardAwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.award.index',[
            'title' => 'PMII Cabang Ciputat | All Achievments',
            'awards' => Award::where('user_id', auth()->user()->id)->get()
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

        return view('dashboard.award.create',[
            'title' => 'PMII Cabang Ciputat | Create achievments',
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
            'slug' => 'required|unique:awards',
            'categoryprogram_id' => 'required',
            'image' => 'image|file|max:2045',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('award-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 300);

        Award::create($validatedData);

        return redirect('/dashboard/award')->with('message', '<div class="alert alert-success" role="alert">
        Your achievment has been created
      </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function show(Award $award)
    {
        //
        return view('dashboard.award.detail',[
            'title' => 'PMII Cabang Ciputat | Detail Award',
            'award' => $award
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function edit(Award $award)
    {
        //
        return view('dashboard.award.edit',[
            'title' => 'PMII Cabang Ciputat | Edit Achievment',
            'categories' => Categoryprogram::all(),
            'award' => $award
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Award $award)
    {
        //
        $rules = [
            'title' => 'required|max:255',
            'categoryprogram_id' => 'required',
            'image' => 'image|file|max:2045',
            'body' => 'required'
        ];

        if ($award->slug != $request->slug) {
            $rules['slug'] = 'required|unique:awards';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($award->image) {
                Storage::delete($award->image);
            }
            $validatedData['image'] = $request->file('image')->store('award-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 300);

        Award::where('id',$award->id)
                ->update($validatedData);
        
        return redirect('/dashboard/award')->with('message','<div class="alert alert-success" role="alert">
        Your achievment has been updated
      </div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Award  $award
     * @return \Illuminate\Http\Response
     */
    public function destroy(Award $award)
    {
        //
        if ($award->image) {
            Storage::delete($award->image);
        }
        Award::destroy($award->id);
        return redirect('/dashboard/award')->with('message', '<div class="alert alert-success" role="alert">
        Your achievment has been deleted
      </div>');
    }
    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Award::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
