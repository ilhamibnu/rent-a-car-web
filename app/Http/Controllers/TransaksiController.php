<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('user')->get();
        return view('admin.pages.data-transaksi', [
            'transaksi' => $transaksi
        ]);
    }
}
