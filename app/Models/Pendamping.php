<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendamping extends Model
{
    use HasFactory;

    protected $table = 'pendamping';
    protected $primaryKey = 'id';
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
    ];

    public function pasien()
    {
        return $this->hasOne(Pasien::class, 'pasien_id');
    }
    // public function getPasienNamaAttribute()
    // {
    //     return $this->pasien ? $this->pasien->nama : '-';
    // }
}
