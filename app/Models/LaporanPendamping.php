<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPendamping extends Model
{
    use HasFactory;
    protected $table = 'laporan_pendamping';
    protected $fillable = [
        'rsp',
        'nama',
        'provinsi_alamat',
        'jenis_kelamin',
        'usia',
        'pendidikan',
        'pekerjaan',
        'tlp',
        'reservasi_id',
        'tanggal_masuk',
        'created_at',
        'updated_at',
    ];


    public function pasien()
    {
        return $this->belongsTo(Reservasi::class, 'reservasi_id');
    }
}
