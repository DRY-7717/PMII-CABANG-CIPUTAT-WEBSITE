<?php

namespace App\Http\Controllers;

use App\Imports\AnggotaImport;
use App\Models\Anggota;
use App\Models\Award;
use App\Models\News;
use App\Models\Product;
use App\Models\Program;
use App\Models\Secretary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard.index', [
            'title' => 'PMII Cabang Ciputat | Dashboard',
            'programs' => Program::all(),
            'awards' => Award::all(),
            'news' => News::all(),
            'members' => Anggota::all(),
            'talents' => Product::all()
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
        return view('dashboard.anggota.create', [
            'title' => 'PMII Cabang Ciputat | Import File',
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $filename = $data->getClientOriginalName();
        $data->move('data-anggota',$filename);
        $path = public_path('data-anggota/'.$filename);
        Excel::import(new AnggotaImport,$path);

        return redirect('dashboard/anggota')->with('message', '<div class="alert alert-success" role="alert">
        Import data success
      </div>');
    }
}
