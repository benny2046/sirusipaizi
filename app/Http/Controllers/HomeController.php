<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Models\Kamar;
use App\Http\Controllers\KamarController;
use App\Models\Pasien;
use App\Models\LaporanPasien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $availableRoomsCount = app('App\Http\Controllers\KamarController')->getRoomStatusCount('tersedia');
        $fullRoomsCount = app('App\Http\Controllers\KamarController')->getRoomStatusCount('penuh');
        $countPasien = Pasien::countPasien();

        return view('home', compact('availableRoomsCount', 'fullRoomsCount', 'countPasien'));
    }

    public function landingPage()
    {
        $availableRoomsCount = app('App\Http\Controllers\KamarController')->getRoomStatusCount('tersedia');
        $fullRoomsCount = app('App\Http\Controllers\KamarController')->getRoomStatusCount('penuh');
        $countPasien = Pasien::countPasien();

        $data = LaporanPasien::select(
            DB::raw('MONTH(created_at) as bulan'),
            'jenis_kelamin',
            DB::raw('COUNT(*) as total')
        )
            ->groupBy(DB::raw('MONTH(created_at)'), 'jenis_kelamin')
            ->get();

        return view('landing.home', compact('availableRoomsCount', 'fullRoomsCount', 'countPasien', 'data'));
    }
}
