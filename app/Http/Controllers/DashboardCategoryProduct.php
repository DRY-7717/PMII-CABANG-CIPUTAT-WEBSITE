<?php

namespace App\Http\Controllers;

use App\Models\Categoryproduct;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
class DashboardCategoryProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.categoriestalent.index', [
            'title' => 'PMII Cabang Ciputat | All category',
            'categories' => Categoryproduct::all()
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
        return view('dashboard.categoriestalent.create', [
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

        Categoryproduct::create($validatedData);

        return redirect('/dashboard/categoryproduct')->with('message', '<div class="alert alert-success" role="alert">
        Your category has been added
      </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoryproduct  $categoryproduct
     * @return \Illuminate\Http\Response
     */
    public function show(Categoryproduct $categoryproduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoryproduct  $categoryproduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Categoryproduct $categoryproduct)
    {
        //
        return view('dashboard.categoriestalent.edit', [
            'title' => 'PMII Cabang Ciputat | Edit category',
            'category' => $categoryproduct
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categoryproduct  $categoryproduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categoryproduct $categoryproduct)
    {
        //
        $rules = [
            'name' => 'required|max:255'
        ];

        if ($categoryproduct->slug != $request->slug) {
            $rules['slug'] = 'required';
        }

        $validated = $request->validate($rules);

        Categoryproduct::where('id', $categoryproduct->id)
            ->update($validated);

        return redirect('/dashboard/categoryproduct')->with('message', '<div class="alert alert-success" role="alert">
        Your category has been updated
      </div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoryproduct  $categoryproduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categoryproduct $categoryproduct)
    {
        //
        Categoryproduct::destroy($categoryproduct->id);

        return redirect('/dashboard/categoryproduct')->with('message', '<div class="alert alert-success" role="alert">
        Your category has been deleted
      </div>');
    }
    public function checkslug(Request $request)
    {
        $slug = SlugService::createSlug(Categoryproduct::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);;
    }
}
