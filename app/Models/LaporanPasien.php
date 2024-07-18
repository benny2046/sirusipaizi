<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class LaporanPasien extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'pasien';
    protected $primaryKey = 'id';
    // protected $guarded =[];
    protected $fillable = [
        'nama_rsp',
        'nama',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'jenis_kelamin',
        'umur',
        'pendidikan',
        'pekerjaan',
        'jenis_penyakit',
        'kategori_penyakit',
        'nama_pendamping',
        'status_rawat',
        'tanggal_masuk',
        'created_at',
        'delete_at',
    ];
    public function reservasi()
    {
        return $this->belongsTo('App\Models\Reservasi');
    }
}
