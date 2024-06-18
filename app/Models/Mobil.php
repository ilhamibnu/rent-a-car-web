<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobil extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'mobil';

    protected $fillable = [
        'nama',
        'foto',
        'deskripsi',
        'harga',
        'status',
        'jenis_kendaraan',
        'deleted_at'
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
