<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPendamping extends Model
{
    use HasFactory;
    protected $table = 'pendamping';
    protected $fillable = [
        'nama',
        'phone',
        'provinsi',
        'jenis_kelamin',
        'umur',
        'pendidikan',
        'pekerjaan',
        'tanggal_masuk',
        'pasien_id',
        'created_at',
        'updated_at',
    ];


    public function pasien()
    {
        return $this->belongsTo(Reservasi::class, 'reservasi_id');
    }
}
