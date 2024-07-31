<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\LaporanPasienExport;
use App\Models\LaporanPasien;
use App\Models\Pasien;
use App\Imports\LaporanPasienImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class LaporanPasienController extends Controller
{
    public function exportpdf(Request $request)
{
    $awal = $request->input('awal');
    $akhir = $request->input('akhir');

    $data = Pasien::withTrashed()
        ->whereBetween('tanggal_masuk', [$awal, $akhir])
        ->orWhereBetween('created_at', [$awal, $akhir])
        ->orWhereBetween('deleted_at', [$awal, $akhir])
        ->get();

    // Menghitung lama menginap untuk setiap pasien
    $data->each(function($pasien) {
        $pasien->lama_menginap = $pasien->deleted_at ? Carbon::parse($pasien->deleted_at)->diffInDays(Carbon::parse($pasien->tanggal_masuk)) : 0;
    });

    // Menghitung laporan berdasarkan data yang difilter
    $totalPasien = $data->count();
    $totalHari = $data->sum('lama_menginap');
    $rataMenginap = $totalPasien > 0 ? $totalHari / $totalPasien : 0;

    $minLamaMenginap = $data->min('lama_menginap');
    $maxLamaMenginap = $data->max('lama_menginap');

    // Format tanggal
    $formattedData = $data->map(function($pasien) {
        return [
            'nama' => $pasien->nama,
            'alamat' => $pasien->alamat,
            'kelurahan' => $pasien->kelurahan,
            'jeniskelamin' => $pasien->jeniskelamin,
            'pendidikan' => $pasien->pendidikan,
            'pekerjaan' => $pasien->pekerjaan,
            'jenis_penyakit' => $pasien->jenis_penyakit,
            'kategori_penyakit' => $pasien->kategori_penyakit,
            'tanggal_masuk' => Carbon::parse($pasien->tanggal_masuk)->format('d-m-Y'),
            'deleted_at' => $pasien->deleted_at ? Carbon::parse($pasien->deleted_at)->format('d-m-Y') : 'N/A',
            'lama_menginap' => $pasien->lama_menginap
        ];
    });

    // $pdf = PDF::loadView('laporan.pasien.cetak', [
    //     'data' => $formattedData,
    //     'awal' => $awal,
    //     'akhir' => $akhir,
    //     'totalPasien' => $totalPasien,
    //     'totalHari' => $totalHari,
    //     'rataMenginap' => number_format($rataMenginap, 2),
    //     'minLamaMenginap' => $minLamaMenginap,
    //     'maxLamaMenginap' => $maxLamaMenginap
    // ]);

    // return $pdf->download('laporan_pasien.pdf');
    return view('laporan.pasien.cetak', [
        'data' => $formattedData,
        'awal' => $awal,
        'akhir' => $akhir,
        'totalPasien' => $totalPasien,
        'totalHari' => $totalHari,
        'rataMenginap' => number_format($rataMenginap, 2),
        'minLamaMenginap' => $minLamaMenginap,
        'maxLamaMenginap' => $maxLamaMenginap
    ]);
}
    
    // public function exportpdf(Request $request)
    // {
    //     // $laporanpasien = LaporanPasien::all();
    //     $awal = $request->awal;
    //     $akhir = $request->akhir;

    //     $data = Pasien::withTrashed()
    //     ->whereBetween('tanggal_masuk', [$awal,$akhir])
    //     ->orWhereBetween('created_at', [$awal,$akhir])
    //     ->orWhereBetween('deleted_at', [$awal,$akhir])
    //     ->get();

    //     return view('laporan.pasien.cetak', compact('data'));
    // }
    public function exportexcel(Request $request)
    {
        // return Excel::download(new LaporanPasienExport,'laporan_pasien.xlsx');
        $awal = $request->awal;
        $akhir = $request->akhir;

        return Excel::download(new LaporanPasienExport($awal, $akhir), 'Laporan_Pasien '.$awal.' - '.$akhir.' .xlsx');
    }

    public function index(Request $request)
    {
        $awal = $request->input('awal');
        $akhir = $request->input('akhir');
        $queryBuilder = Pasien::withTrashed();
    
        if ($awal && $akhir) {
            // Filter berdasarkan rentang tanggal
            $queryBuilder->whereBetween('tanggal_masuk', [$awal, $akhir]);
        }
    
        $query = $request->input('search');
        if ($query) {
            // Filter berdasarkan pencarian nama
            $queryBuilder->where('nama', 'like', '%' . $query . '%');
        }
    
        // Ambil data pasien yang sudah difilter
        $filteredPasiens = $queryBuilder->get();
    
        // Menghitung lama menginap untuk setiap pasien
        $filteredPasiens->each(function($pasien) {
            $pasien->lama_menginap = Carbon::parse($pasien->deleted_at)->diffInDays(Carbon::parse($pasien->tanggal_masuk));
        });
    
        // Menghitung laporan berdasarkan data yang difilter
        $totalPasien = $filteredPasiens->count();
        $totalHari = $filteredPasiens->sum('lama_menginap');
        $rataMenginap = $totalPasien > 0 ? $totalHari / $totalPasien : 0;
    
        $minLamaMenginap = $filteredPasiens->min('lama_menginap');
        $maxLamaMenginap = $filteredPasiens->max('lama_menginap');
    
        $asalPasien = $filteredPasiens->groupBy('kelurahan')->map(function ($group) {
            return $group->count();
        });
        $jenisPasien = $filteredPasiens->groupBy('jeniskelamin')->map(function ($group) {
            return $group->count();
        });
        $penyakitPasien = $filteredPasiens->groupBy('jenis_penyakit')->map(function ($group) {
            return $group->count();
        });
        $kpenyakitPasien = $filteredPasiens->groupBy('kategori_penyakit')->map(function ($group) {
            return $group->count();
        });
    
        // Format tanggal untuk ditampilkan di view
        $formattedPasiens = $filteredPasiens->map(function($pasien) {
            return [
                'nama' => $pasien->nama,
                'alamat' => $pasien->alamat,
                'kelurahan' => $pasien->kelurahan,
                'jeniskelamin' => $pasien->jeniskelamin,
                'pendidikan' => $pasien->pendidikan,
                'pekerjaan' => $pasien->pekerjaan,
                'jenis_penyakit' => $pasien->jenis_penyakit,
                'kategori_penyakit' => $pasien->kategori_penyakit,
                'tanggal_masuk' => Carbon::parse($pasien->tanggal_masuk)->format('d-m-Y'),
                'deleted_at' => Carbon::parse($pasien->deleted_at)->format('d-m-Y'),
                'lama_menginap' => $pasien->lama_menginap
            ];
        });
    
        // Mengambil data pasien dengan paginasi, termasuk yang sudah dihapus
        $varlaporanpasien = $queryBuilder->latest('created_at')->paginate(10);
    
        return view('laporan.pasien.index', [
            'varlaporanpasien' => $varlaporanpasien,
            'listtitle' => 'laporan_pasien',
            'totalPasien' => $totalPasien,
            'totalHari' => $totalHari,
            'rataMenginap' => number_format($rataMenginap, 2),
            'minLamaMenginap' => $minLamaMenginap,
            'maxLamaMenginap' => $maxLamaMenginap,
            'asalPasien' => $asalPasien,
            'jenisPasien' => $jenisPasien,
            'penyakitPasien' => $penyakitPasien,
            'kpenyakitPasien' => $kpenyakitPasien,
            'formattedPasiens' => $formattedPasiens
        ]);
    }
    public function show($id)
    {
        // $laporanpasien = Pasien::find($id);
        $laporanpasien = Pasien::withTrashed()->find($id);
        return view('laporan.pasien.show', compact('laporanpasien'));
    }

    public function import_excel(Request $request)
    {
        //validasi
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        // menangkap file excel
        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = rand() . $file->getClientOriginalName();
        // upload ke folder file di dalam folder public
        $file->move('file_laporanpasien', $nama_file);
        // import data
        Excel::import(new LaporanPasienImport, public_path('/file_laporanpasien/' . $nama_file));

        // notifikasi dengan session
        Session::flash('sukses', 'Data Laporan Pasien Berhasil Diimport!');

        // alihkan halaman kembali
        return redirect()->route('laporan.pasien.index');
    }
}
