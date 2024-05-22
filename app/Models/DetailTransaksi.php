<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $table = 'detail_transaksi';

    protected $fillable = [
        'id_transaksi',
        'id_mobil',
        'tanggal_keluar',
        'tanggal_kembali',
        'total_harga',
        'status_peminjaman',
    ];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'id_mobil', 'id');
    }

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id');
    }
}
