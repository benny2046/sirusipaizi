<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    // Mendefinisikan nama tabel
    protected $table = 'kamar';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_kamar',
        'jumlah_kasur',
        'status',
    ];
    public function pasien()
    {
        return $this->hasOne(Pasien::class, 'pasien_id');
    }
    //metode membuat status berdasarkan jumlah kasur
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = ($this->attributes['jumlah_kasur'] > 0) ? 'tersedia' : 'penuh';
    }
}
