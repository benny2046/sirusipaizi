<?php

namespace App\Imports;

use App\Models\LaporanPasien;
use App\Models\Pasien;
use Maatwebsite\Excel\Concerns\ToModel;

class LaporanPasienImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pasien([
            'nama_rsp' => $row[1],
            'nama' => $row[2],
            'alamat' => $row[4],
            'kelurahan' => $row[5],
            'kecamatan' => $row[6],
            'kabupaten' => $row[7],
            'provinsi' => $row[8],
            'jeniskelamin' => $row[9],
            'umur' => $row[10],
            'pendidikan' => $row[11],
            'pekerjaan' => $row[12],
            'jenis_penyakit' => $row[13],
            'kategori_penyakit' => $row[14],
            'status_rawat' => $row[15],
            'tanggal_masuk' => $row[16],
            'created_at' => $row[20],
            'deleted_at' => $row[22],
        ]);
    }
}
