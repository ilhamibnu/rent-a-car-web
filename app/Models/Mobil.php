<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $table = 'mobil';

    protected $fillable = [
        'nama',
        'foto',
        'deskripsi',
        'harga',
        'status',
        'jenis_kendaraan',
    ];


    public function detailTransaksi()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_mobil', 'id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class, 'id_mobil', 'id');
    }
}
