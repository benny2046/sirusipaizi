<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use App\Models\LaporanPasien;
use App\Models\Pasien;
use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Http\Controllers\KamarController;
use App\Models\Donasi;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
// use DB;

class LandingController extends Controller
{
    public function index2(Request $req)
    {
        $kamarController = new KamarController();
        $totalKamar = $kamarController->getRoomStatusCount('tersedia');
        //// $totalKamar = app('App\Http\Controlllers\KamarController')->getRoomStatusCount('tersedia');
        $jumlahPasien = Pasien::countPasien();
        $pasiens = Pasien::all();

        // Jeniskelamin
        if ($req->has('reset1')) {
            $startDate1 = now()->subMonth()->startOfMonth()->toDateString();
            $endDate1 = now()->toDateString();
        } else {
            $startDate1 = $req->get('start_date1', '2023-03-01');
            $endDate1 = $req->get('end_date1', date('Y-m-d'));
        }

        $datas = Pasien::withTrashed()
            ->select(DB::raw("COUNT(*) as count"), 'jeniskelamin')
            ->whereBetween('tanggal_masuk', [$startDate1, $endDate1])
            ->groupBy('jeniskelamin')
            ->orderBy('created_at', 'asc')
            ->pluck('count', 'jeniskelamin');

        // Kabupaten
        if ($req->has('reset2')) {
            $startDate2 = now()->subMonth()->startOfMonth()->toDateString();
            $endDate2 = now()->toDateString();
        } else {
            $startDate2 = $req->get('start_date2', '2023-03-01');
            $endDate2 = $req->get('end_date2', date('Y-m-d'));
        }
        $datasD = Pasien::withTrashed()
            ->select(DB::raw("COUNT(*) as count"), 'kabupaten')
            ->whereBetween('tanggal_masuk', [$startDate2, $endDate2])
            ->groupBy('kabupaten')
            ->orderBy('created_at', 'asc')
            ->pluck('count', 'kabupaten');

        // menerima manfaat
        if ($req->has('reset3')) {
            $startDate3 = now()->subMonth()->startOfMonth()->toDateString();
            $endDate3 = now()->toDateString();
        } else {
            $startDate3 = $req->get('start_date3', '2023-03-01');
            $endDate3 = $req->get('end_date3', date('Y-m-d'));
        }
        $datasS = Pasien::withTrashed()
            ->select(DB::raw("COUNT(*) as count,MONTHNAME(created_at) as bulan"))
            ->whereBetween('tanggal_masuk', [$startDate3, $endDate3])
            ->groupBy('bulan')
            ->orderBy('created_at', 'asc')
            ->pluck('count', 'bulan');

        // jenispenyakit
        if ($req->has('reset4')) {
            $startDate4 = now()->subMonth()->startOfMonth()->toDateString();
            $endDate4 = now()->toDateString();
        } else {
            $startDate4 = $req->get('start_date4', '2023-03-01');
            $endDate4 = $req->get('end_date4', date('Y-m-d'));
        }
        $datasP = Pasien::withTrashed()
            ->select(DB::raw("COUNT(*) as count"), 'jenis_penyakit')
            ->whereBetween('tanggal_masuk', [$startDate4, $endDate4])
            ->groupBy('jenis_penyakit')
            ->orderBy('created_at', 'asc')
            ->pluck('count', 'jenis_penyakit');

        $jenisKelamin = $datas->values()->toArray(); //
        $jenisKelamink = $datas->keys()->toArray(); //
        $jkabupaten = $datasD;
        $jPenerima = $datasS->values();
        $jPenerimak = $datasS->keys();
        $jPenyakit = $datasP->values();
        $jPenyakitk = $datasP->keys();

        if ($req->ajax()) {
            return response()->json([
                'jenisKelamin' => $jenisKelamin,
                'jenisKelamink' => $jenisKelamink,
                'jkabupaten' => $jkabupaten,
                'jPenerima' => $jPenerima,
                'jPenerimak' => $jPenerimak,
                'jPenyakit' => $jPenyakit,
                'jPenyakitk' => $jPenyakitk
            ]);
        }

        return view('landing.index', [
            'pasiens' => $pasiens,
            'totalKamar' => $totalKamar,
            'jumlahPasien' => $jumlahPasien,
            'jenisKelamin' => $jenisKelamin,
            'jenisKelamink' => $jenisKelamink,
            'jkabupaten' => $jkabupaten,
            'jPenerima' => $jPenerima,
            'jPenerimak' => $jPenerimak,
            'jPenyakit' => $jPenyakit,
            'jPenyakitk' => $jPenyakitk,
            'startDate1' => $startDate1,
            'endDate1' => $endDate1,
            'startDate2' => $startDate2,
            'endDate2' => $endDate2,
            'startDate3' => $startDate3,
            'endDate3' => $endDate3,
            'startDate4' => $startDate4,
            'endDate4' => $endDate4,
        ]);
    }
    // public function index(Request $req)
    // {
    //     $kamarController = new KamarController();
    //     $totalKamar = $kamarController->getRoomStatusCount('tersedia');
    //     // $totalKamar = app('App\Http\Controlllers\KamarController')->getRoomStatusCount('tersedia');
    //     $jumlahPasien = Pasien::countPasien();
    //     $pasiens = Pasien::all();

    //     // Jeniskelamin
    //     if ($req->has('reset1')) {
    //         $startDate1 = now()->subMonth()->startOfMonth()->toDateString();
    //         $endDate1 = now()->toDateString();
    //     } else {
    //         $startDate1 = $req->get('start_date1', '2023-03-01');
    //         $endDate1 = $req->get('end_date1', date('Y-m-d'));
    //     }

    //     $datas = Pasien::withTrashed()
    //         ->select(DB::raw("COUNT(*) as count"), 'jeniskelamin')
    //         ->whereBetween('tanggal_masuk', [$startDate1, $endDate1])
    //         ->groupBy('jeniskelamin')
    //         ->orderBy('created_at', 'asc')
    //         ->pluck('count', 'jeniskelamin');

    //     // Kabupaten
    //     if ($req->has('reset2')) {
    //         $startDate2 = now()->subMonth()->startOfMonth()->toDateString();
    //         $endDate2 = now()->toDateString();
    //     } else {
    //         $startDate2 = $req->get('start_date2', '2023-03-01');
    //         $endDate2 = $req->get('end_date2', date('Y-m-d'));
    //     }
    //     $datasD = Pasien::withTrashed()
    //         ->select(DB::raw("COUNT(*) as count"), 'kabupaten')
    //         ->whereBetween('tanggal_masuk', [$startDate2, $endDate2])
    //         ->groupBy('kabupaten')
    //         ->orderBy('created_at', 'asc')
    //         ->pluck('count', 'kabupaten');

    //     // menerima manfaat
    //     if ($req->has('reset3')) {
    //         $startDate3 = now()->subMonth()->startOfMonth()->toDateString();
    //         $endDate3 = now()->toDateString();
    //     } else {
    //         $startDate3 = $req->get('start_date3', '2023-03-01');
    //         $endDate3 = $req->get('end_date3', date('Y-m-d'));
    //     }
    //     $datasS = Pasien::withTrashed()
    //         ->select(DB::raw("COUNT(*) as count,MONTHNAME(created_at) as bulan"))
    //         ->whereBetween('tanggal_masuk', [$startDate3, $endDate3])
    //         ->groupBy('bulan')
    //         ->orderBy('created_at', 'asc')
    //         ->pluck('count', 'bulan');

    //     // jenispenyakit
    //     if ($req->has('reset4')) {
    //         $startDate4 = now()->subMonth()->startOfMonth()->toDateString();
    //         $endDate4 = now()->toDateString();
    //     } else {
    //         $startDate4 = $req->get('start_date4', '2023-03-01');
    //         $endDate4 = $req->get('end_date4', date('Y-m-d'));
    //     }
    //     $datasP = Pasien::withTrashed()
    //         ->select(DB::raw("COUNT(*) as count"), 'jenis_penyakit')
    //         ->whereBetween('tanggal_masuk', [$startDate4, $endDate4])
    //         ->groupBy('jenis_penyakit')
    //         ->orderBy('created_at', 'asc')
    //         ->pluck('count', 'jenis_penyakit');

    //     $jenisKelamin = $datas->values()->toArray(); //
    //     $jenisKelamink = $datas->keys()->toArray(); //
    //     $jkabupaten = $datasD;
    //     $jPenerima = $datasS->values();
    //     $jPenerimak = $datasS->keys();
    //     $jPenyakit = $datasP->values();
    //     $jPenyakitk = $datasP->keys();

    //     if ($req->ajax()) {
    //         return response()->json([
    //             'jenisKelamin' => $jenisKelamin,
    //             'jenisKelamink' => $jenisKelamink,
    //             'jkabupaten' => $jkabupaten,
    //             'jPenerima' => $jPenerima,
    //             'jPenerimak' => $jPenerimak,
    //             'jPenyakit' => $jPenyakit,
    //             'jPenyakitk' => $jPenyakitk
    //         ]);
    //     }

    //     return view('landing.home', [
    //         'pasiens' => $pasiens,
    //         'totalKamar' => $totalKamar,
    //         'jumlahPasien' => $jumlahPasien,
    //         'jenisKelamin' => $jenisKelamin,
    //         'jenisKelamink' => $jenisKelamink,
    //         'jkabupaten' => $jkabupaten,
    //         'jPenerima' => $jPenerima,
    //         'jPenerimak' => $jPenerimak,
    //         'jPenyakit' => $jPenyakit,
    //         'jPenyakitk' => $jPenyakitk,
    //         'startDate1' => $startDate1,
    //         'endDate1' => $endDate1,
    //         'startDate2' => $startDate2,
    //         'endDate2' => $endDate2,
    //         'startDate3' => $startDate3,
    //         'endDate3' => $endDate3,
    //         'startDate4' => $startDate4,
    //         'endDate4' => $endDate4,
    //     ]);
    // }

    // Menyimpan data donasi yang baru dibuat
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'no_hp' => 'required',
            'jumlah' => 'required',
            'bukti' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //upload bukti foto
        $image = $request->file('bukti');
        $image->storeAs('public/donasi', $image->hashName());

        // create donasi
        Donasi::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'jumlah' => $request->jumlah,
            'bukti' => $image->hashName()
        ]);

        // Jika gagal membuat entri donasi atau upload bukti
        return redirect()->back()->with('success', 'Donasi berhasil ditambahkan dengan bukti.');
    }
    public function indexabout()
    {
        return view('landing.about');
    }
    public function donasi()
    {
        return view('landing.donasi');
    }
    public function reservasi()
    {
        $kamarController = new KamarController();
        $totalKamar = $kamarController->getRoomStatusCount('tersedia');
        // $totalKamar = app('App\Http\Controlllers\KamarController')->getRoomStatusCount('tersedia');
        $jumlahPasien = Pasien::countPasien();
        $pasiens = Pasien::all();

        return view('landing.reservasi', [
            'totalKamar' => $totalKamar,
            'jumlahPasien' => $jumlahPasien,
            'pasiens' => $pasiens,
        ]);
    }
    public function kontak()
    {
        return view('landing.kontak');
    }

    public function chart(Request $req)
    {
        // Jeniskelamin
        if ($req->has('reset1')) {
            $startDate1 = now()->subMonth()->startOfMonth()->toDateString();
            $endDate1 = now()->toDateString();
        } else {
            $startDate1 = $req->get('start_date1', '2023-03-01');
            $endDate1 = $req->get('end_date1', date('Y-m-d'));
        }

        $datas = Pasien::withTrashed()
            ->select(DB::raw("COUNT(*) as count"), 'jeniskelamin')
            ->whereBetween('tanggal_masuk', [$startDate1, $endDate1])
            ->groupBy('jeniskelamin')
            ->orderBy('created_at', 'asc')
            ->pluck('count', 'jeniskelamin');

        // Kabupaten
        if ($req->has('reset2')) {
            $startDate2 = now()->subMonth()->startOfMonth()->toDateString();
            $endDate2 = now()->toDateString();
        } else {
            $startDate2 = $req->get('start_date2', '2023-03-01');
            $endDate2 = $req->get('end_date2', date('Y-m-d'));
        }
        $datasD = Pasien::withTrashed()
            ->select(DB::raw("COUNT(*) as count"), 'kabupaten')
            ->whereBetween('tanggal_masuk', [$startDate2, $endDate2])
            ->groupBy('kabupaten')
            ->orderBy('created_at', 'asc')
            ->pluck('count', 'kabupaten');

        // menerima manfaat
        if ($req->has('reset3')) {
            $startDate3 = now()->subMonth()->startOfMonth()->toDateString();
            $endDate3 = now()->toDateString();
        } else {
            $startDate3 = $req->get('start_date3', '2023-03-01');
            $endDate3 = $req->get('end_date3', date('Y-m-d'));
        }
        $datasS = Pasien::withTrashed()
            ->select(DB::raw("COUNT(*) as count,MONTHNAME(created_at) as bulan"))
            ->whereBetween('tanggal_masuk', [$startDate3, $endDate3])
            ->groupBy('bulan')
            ->orderBy('created_at', 'asc')
            ->pluck('count', 'bulan');

        // jenispenyakit
        if ($req->has('reset4')) {
            $startDate4 = now()->subMonth()->startOfMonth()->toDateString();
            $endDate4 = now()->toDateString();
        } else {
            $startDate4 = $req->get('start_date4', '2023-03-01');
            $endDate4 = $req->get('end_date4', date('Y-m-d'));
        }
        $datasP = Pasien::withTrashed()
            ->select(DB::raw("COUNT(*) as count"), 'jenis_penyakit')
            ->whereBetween('tanggal_masuk', [$startDate4, $endDate4])
            ->groupBy('jenis_penyakit')
            ->orderBy('created_at', 'asc')
            ->pluck('count', 'jenis_penyakit');

        $jenisKelamin = $datas->values()->toArray(); //
        $jenisKelamink = $datas->keys()->toArray(); //
        $jkabupaten = $datasD;
        $jPenerima = $datasS->values();
        $jPenerimak = $datasS->keys();
        $jPenyakit = $datasP->values();
        $jPenyakitk = $datasP->keys();

        if ($req->ajax()) {
            return response()->json([
                'jenisKelamin' => $jenisKelamin,
                'jenisKelamink' => $jenisKelamink,
                'jkabupaten' => $jkabupaten,
                'jPenerima' => $jPenerima,
                'jPenerimak' => $jPenerimak,
                'jPenyakit' => $jPenyakit,
                'jPenyakitk' => $jPenyakitk
            ]);
        }

        return view('landing.chart2', [
            'jenisKelamin' => $jenisKelamin,
            'jenisKelamink' => $jenisKelamink,
            'jkabupaten' => $jkabupaten,
            'jPenerima' => $jPenerima,
            'jPenerimak' => $jPenerimak,
            'jPenyakit' => $jPenyakit,
            'jPenyakitk' => $jPenyakitk,
            'startDate1' => $startDate1,
            'endDate1' => $endDate1,
            'startDate2' => $startDate2,
            'endDate2' => $endDate2,
            'startDate3' => $startDate3,
            'endDate3' => $endDate3,
            'startDate4' => $startDate4,
            'endDate4' => $endDate4,
        ]);
    }
}
