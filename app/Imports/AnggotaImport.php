<?php

namespace App\Imports;

use App\Models\Anggota;
use Maatwebsite\Excel\Concerns\ToModel;

class AnggotaImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $user_id = auth()->user()->id;
        return new Anggota([
            //
            'nama'           => $row[0],
            'tgl_lahir'      => $row[1],
            'fakultas'       => $row[2],
            'jurusan'        => $row[3],
            'alamat'         => $row[4],
            'jk'             => $row[5],
            'email'          => $row[6],
            'telp'           => $row[7],
            'angkatan'       => $row[8],
            'minat_bakat'    => $row[9],
            'user_id'        => $user_id

        ]);
    }
}
