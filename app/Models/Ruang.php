<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $fillable = ['nama_barang', 'kategori', 'jumlah', 'ruang_id'];

    public function barangs()
    {
        return $this->hasMany(Barang::class);
    }
}
