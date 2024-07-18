<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Reservasi extends Model
{
    use HasFactory, Notifiable;

    protected $primayKey = 'id';
    use HasFactory;

    protected $table = 'reservasi';

    protected $fillable = [
        'nama',
        'phone',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'jeniskelamin',
        'status',
        'umur',
        'pendidikan',
        'pekerjaan',
        'jenis_penyakit',
        'kategori_penyakit',
        'tanggal_masuk',
        'nama_pendamping',
        'umur_pendamping',
        'pendidikan_pendamping',
        'pekerjaan_pendamping',
        'jeniskelaminpendamping',
        'phone_pendamping',
        'provinsi_pendamping',
        'tanggal_masuk_pendamping',
        'user_id',
        'file',
    ];

    // Relasi dengan model Pasien
    // public function pasien()
    // {
    //     return $this->belongsTo(Pasien::class, 'pasien_id');
    // }
    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
    public function pasiens()
    {
        return $this->hasMany(Pasien::class);
    }
    public function laporanpasien()
    {
        return $this->hasMany(LaporanPasien::class);
    }

}
