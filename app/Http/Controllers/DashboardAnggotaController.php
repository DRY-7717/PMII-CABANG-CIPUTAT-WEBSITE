<?php

namespace App\Http\Controllers;

use App\Imports\AnggotaImport;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DashboardAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        return view('dashboard.importanggota.index', [
            'title' => 'PMII Cabang Ciputat | Import Member',
            'members' => Anggota::where('user_id',auth()->user()->id)->get()
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
        return view('dashboard.importanggota.create', [
            'title' => 'PMII Cabang Ciputat | Create Data Member',

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
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'email' => 'required|unique:anggotas',
            'telp' => 'required',
            'angkatan' => 'required',
            'minat_bakat' => 'required',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Anggota::create($validatedData);

        return redirect('import/anggotas')->with('message', '<div class="alert alert-success" role="alert">
        Data member has been created
      </div>');
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
        return view('dashboard.importanggota.edit', [
            'title' => 'PMII Cabang Ciputat | Edit Data Member',
            'member' =>  $anggota,
        ]);
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
        $rules = [
            'nama' => 'required',
            'tgl_lahir' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'jk' => 'required',
            'telp' => 'required',
            'angkatan' => 'required',
            'minat_bakat' => 'required',
        ];

        if ($anggota->email != $request->email) {
            # code...
            $rules['email'] =  'required|unique:anggotas';
        }

        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = auth()->user()->id;

        Anggota::where('id',$anggota->id)
                ->update($validatedData);

        return redirect('import/anggotas')->with('message', '<div class="alert alert-success" role="alert">
        Data member has been updated
      </div>');
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

        Anggota::destroy($anggota->id);
        return redirect('import/anggotas')->with('message', '<div class="alert alert-success" role="alert">
        Data member has been deleted
      </div>');
    }
    public function import()
    {
        return view('dashboard.importanggota.import', [
            'title' => 'PMII Cabang Ciputat | Import File',
        ]);
    }
    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $filename = $data->getClientOriginalName();
        $data->move('data-anggota', $filename);
        $path = public_path('data-anggota/' . $filename);
        Excel::import(new AnggotaImport, $path);

        return redirect('import/anggotas')->with('message', '<div class="alert alert-success" role="alert">
        Import data success
      </div>');
    }
}
