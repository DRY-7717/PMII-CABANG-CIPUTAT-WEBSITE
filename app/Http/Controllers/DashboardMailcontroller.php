<?php

namespace App\Http\Controllers;

use App\Models\Secretary;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardMailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.mail.index', [
            'title' => 'PMII Cabang Ciputat | All Mail',
            'mails' => Secretary::where('user_id', auth()->user()->id)->get(),
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
        return view('dashboard.mail.create', [
            'title' => 'PMII Cabang Ciputat | Create Mail',

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
            'file' => 'required|file|mimes:pdf|max:2045',
            'body' => 'required'
        ]);
        if ($request->file('file')) {

            $validatedData['file'] = $request->file('file')->store('mail-document');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 300);
        $validatedData['description'] = '-';
        Secretary::create($validatedData);

        return redirect('/mail/secretary')->with('message', '<div class="alert alert-success" role="alert">
        Your mail has been created
      </div>');
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
        return view('dashboard.mail.detail', [
            'title' => 'PMII Cabang Ciputat | Detail Mail',
            'mail' => $secretary
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
        return view('dashboard.mail.edit', [
            'title' => 'PMII Cabang Ciputat | Edit Mail',
            'mail' => $secretary
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
        $rules = [
            'title' => 'required|max:255',
            'file' => 'required|file|mimes:pdf|max:2045',
            'body' => 'required'
        ];

        if ($secretary->slug != $request->slug) {
            $rules['slug'] = 'required|unique:secretary';
        }

        $validatedData = $request->validate($rules);

        if ($request->file('file')) {
            if ($secretary->file) {
                Storage::delete($secretary->file);
            }
            $validatedData['file'] = $request->file('file')->store('mail-document');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 300);
        $validatedData['description'] = '-';

        Secretary::where('id', $secretary->id)
            ->update($validatedData);

        return redirect('/mail/secretary')->with('message', '<div class="alert alert-success" role="alert">
        Your mail has been updated
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
        return redirect('/mail/secretary')->with('message', '<div class="alert alert-success" role="alert">
        Your news has been deleted
      </div>');
    }
    public function download(Secretary $secretary)
    {
        $name = $secretary->user->name;

        if ($secretary->file) {
            $file_path = public_path('storage/' . $secretary->file);
            $fileName = 'Surat Izin ' . $name . '.pdf';
            return response()->download($file_path, $fileName);
        }
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Secretary::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
