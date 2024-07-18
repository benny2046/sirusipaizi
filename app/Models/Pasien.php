<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pasien extends Model
{
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = 'pasien';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_rsp',
        'nama',
        'phone',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'jeniskelamin',
        'umur',
        'pendidikan',
        'pekerjaan',
        'jenis_penyakit',
        'kategori_penyakit',
        'status_rawat',
        'tanggal_masuk',
        'kamar_id',
        'pendamping_id',
        'reservasi_id',
    ];
    public function kamar()
    {
        return $this->belongsTo(Kamar::class, 'kamar_id');
    }
    public function pendamping()
    {
        return $this->belongsTo(Pendamping::class, 'pendamping_id');
    }
    public function laporanPendamping()
    {
        return $this->hasOne(LaporanPendamping::class);
    }
    public function reservasi()
    {
        return $this->belongsTo(Reservasi::class);
    }
    public static function countPasien()
    {
        return self::count();
    }
    public function getPendampingNamaAttribute()
    {
        return $this->pendamping ? $this->pendamping->nama : '-';
    }
}
