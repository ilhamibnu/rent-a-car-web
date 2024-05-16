<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mobil;
use App\Models\Ulasan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_ulasan = Ulasan::count();
        $jumlah_mobil = Mobil::count();
        $jumlah_user = User::where('role', 'user')->count();
        $jumlah_transaksi = Transaksi::count();
        return view('admin.pages.dashboard', [
            'jumlah_ulasan' => $jumlah_ulasan,
            'jumlah_mobil' => $jumlah_mobil,
            'jumlah_user' => $jumlah_user,
            'jumlah_transaksi' => $jumlah_transaksi
        ]);
    }
}
