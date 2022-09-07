<?php

namespace App\Http\Controllers;

use App\Models\Program;

use App\Models\Categoryprogram;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('dashboard.programs', [
            'title' => 'PMII Cabang Ciputat | Program',
            'programs' => Program::where('user_id', auth()->user()->id)->get()
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
        return view('dashboard.create', [
            'title' => 'PMII Cabang Ciputat | Create Program',
            'categories' => Categoryprogram::all(),
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


    
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:programs',
            'categoryprogram_id' => 'required',
            'image' => 'image|file|max:2045',
            'body' => 'required'
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')->store('program-images');
        }

        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->body), 300);

        Program::create($validated);

        return redirect('/dashboard/program')->with('message', '<div class="alert alert-success" role="alert">
        Your program has been added
      </div>');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
        

        return view('dashboard.program', [
            'title' => 'PMII Cabang Ciputat | Program detail',
            'program' => $program
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
        return view('dashboard.edit', [
            'title' => 'PMII Cabang Ciputat : Edit Program',
            'program' => $program,
            'categories' => Categoryprogram::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
        $rules = ([
            'title' => 'required|max:255',
            'categoryprogram_id' => 'required',
            'image' => 'image|file|max:2045',
            'body' => 'required'
        ]);

        if ($request->slug != $program->slug) {
            $rules['slug'] = 'required|unique:programs';
        }



        $validated = $request->validate($rules);
        if ($request->file('image')) {
            if ($program->image) {
                Storage::delete($program->image);
            }
            $validated['image'] = $request->file('image')->store('program-images');
        }
        $validated['user_id'] = auth()->user()->id;
        $validated['excerpt'] = Str::limit(strip_tags($request->body), 300);


        Program::where('id', $program->id)
            ->update($validated);

        return redirect('/dashboard/program')->with('message', '<div class="alert alert-success" role="alert">
        Your program has been updated
      </div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
        if ($program->image) {
            Storage::delete($program->image);
        }
        Program::destroy($program->id);

        return redirect('/dashboard/program')->with('message', '<div class="alert alert-success" role="alert">
        Your program has been deleted
      </div>');
    }

    public function checkslug(Request $request)
    {
        $slug = SlugService::createSlug(Program::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
