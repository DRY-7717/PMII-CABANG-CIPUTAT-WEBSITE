<?php

namespace App\Http\Controllers;

use App\Models\Categoryproduct;
use App\Models\Categoryprogram;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AllCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //



        return view('dashboard.categories.index', [
            'title' => 'PMII Cabang Ciputat | All category',
            'categories' => Categoryprogram::all()
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
        return view('dashboard.categories.create', [
            'title' => 'PMII Cabang Ciputat | Create category',
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
            'name' => 'required|max:255',
            'slug' => 'required'
        ]);

        Categoryprogram::create($validatedData);

        return redirect('/dashboard/categoryprogram')->with('message', '<div class="alert alert-success" role="alert">
        Your category has been added
      </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoryprogram  $categoryprogram
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryprogram $categoryprogram)
    {
        //
        return $categoryprogram;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoryprogram  $categoryprogram
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoryprogram $categoryprogram)
    {
        //
        return view('dashboard.categories.edit', [
            'title' => 'PMII Cabang Ciputat | Edit category',
            'category' => $categoryprogram
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoryprogram  $categoryprogram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoryprogram $categoryprogram)
    {
        //

        $rules = [
            'name' => 'required|max:255'
        ];

        if ($categoryprogram->slug != $request->slug) {
            $rules['slug'] = 'required';
        }

        $validated = $request->validate($rules);

        Categoryprogram::where('id', $categoryprogram->id)
            ->update($validated);

        return redirect('/dashboard/categoryprogram')->with('message', '<div class="alert alert-success" role="alert">
        Your category has been updated
      </div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoryprogram  $categoryprogram
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoryprogram $categoryprogram)
    {
        //

        Categoryprogram::destroy($categoryprogram->id);

        return redirect('/dashboard/categoryprogram')->with('message', '<div class="alert alert-success" role="alert">
        Your category has been deleted
      </div>');
    }

    public function checkslug(Request $request)
    {
        $slug = SlugService::createSlug(Categoryprogram::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);;
    }
}
