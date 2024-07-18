<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {
        $data = [
            'jenis_kelamin' => [
                'laki-laki' => 30,
                'perempuan' => 70,
            ],
            'asal_daerah' => [
                'Jakarta' => 20,
                'Surabaya' => 45,
                'Bandung' => 35,
            ],
            'jenis_penyakit' => [
                'Flu' => 15,
                'Demam' => 30,
                'Malaria' => 20,
            ],
        ];

        return view('charts.index', compact('data'));
    }
}

