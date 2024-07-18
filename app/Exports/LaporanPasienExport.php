<?php

namespace App\Exports;

use App\Models\LaporanPasien;
use App\Models\Pasien;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class LaporanPasienExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;
    protected $awal;
    protected $akhir;

    public function __construct($awal, $akhir)
    {
        $this->awal = $awal;
        $this->akhir = $akhir;
    }
    public function view(): view
    {
        // return LaporanPasien::all();
        //mencetak data excel
        return view('laporan.pasien.excel',[
            //letak excel
            'data' => Pasien::withTrashed()
            ->whereBetween('tanggal_masuk', [$this->awal,$this->akhir])->get(),
            'tanggal' => 'Laporan pasien '.$this->awal .' Sampai '. $this->akhir
            // mencari data berdasarkan tanggal yang diinginkan
        ]);
    }
}
