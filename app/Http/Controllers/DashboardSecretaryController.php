<?php

namespace App\Http\Controllers;

use App\Models\Secretary;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardSecretaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.secretary.index', [
            'title' => 'PMII Cabang Ciputat | Mail',
            'secretaries' => Secretary::latest()->get()
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function show(Secretary $secretary)
    {
        //
        return view('dashboard.secretary.detail', [
            'title' => 'PMII Cabang Ciputat | Detail Mail',
            'secretary' => $secretary
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function edit(Secretary $secretary)
    {
        //
        return view('dashboard.secretary.edit', [
            'title' => 'PMII Cabang Ciputat | Allowed Mail',
            'secretary' => $secretary
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secretary $secretary)
    {
        //

        $validatedData = $request->validate([
            'description' => 'required'
        ]);

        Secretary::where('id', $secretary->id)
            ->update($validatedData);

        return redirect('/dashboard/secretary')->with('message', '<div class="alert alert-success" role="alert">
        Mail has been allowed
      </div>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secretary  $secretary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secretary $secretary)
    {
        //
        if ($secretary->file) {
            Storage::delete($secretary->file);
        }
        Secretary::destroy($secretary->id);
        return redirect('/dashboard/secretary')->with('message', '<div class="alert alert-success" role="alert">
        Your mail has been deleted
      </div>');
    }
}
