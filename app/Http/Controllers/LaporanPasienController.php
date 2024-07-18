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

class LaporanPasienController extends Controller
{
    public function exportpdf(Request $request)
    {
        // $laporanpasien = LaporanPasien::all();
        $awal = $request->awal;
        $akhir = $request->akhir;

        $data = Pasien::withTrashed()
        ->whereBetween('tanggal_masuk', [$awal,$akhir])
        ->orWhereBetween('created_at', [$awal,$akhir])
        ->orWhereBetween('deleted_at', [$awal,$akhir])
        ->get();

        return view('laporan.pasien.cetak', compact('data'));
    }
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

        // Inisialisasi query builder dengan withTrashed untuk mengambil semua data termasuk yang sudah dihapus
        $queryBuilder = Pasien::withTrashed();

        if ($awal && $akhir) {
            // Filter berdasarkan rentang tanggal
            $queryBuilder->whereBetween('tanggal_masuk', [$awal, $akhir]);
        }

        $title = "laporan_pasien";
        $query = $request->input('search');

        if ($query) {
            // Filter berdasarkan pencarian nama
            $queryBuilder->where('nama', 'like', '%' . $query . '%');
        }

        // Mengambil data pasien dengan paginasi, termasuk yang sudah dihapus
        $varlaporanpasien = $queryBuilder->latest('created_at')->paginate(10);

        return view('laporan.pasien.index', [
            'varlaporanpasien' => $varlaporanpasien,
            'listtitle' => $title,
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
