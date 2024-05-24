<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaksi;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class PenyewaanController extends Controller
{
    public function index()
    {
        $transaksi = auth()->user()->transaksi;

        return view('landing.pages.penyewaan', [
            'transaksi' => $transaksi
        ]);
    }

    public function storeUlasan(Request $request)
    {
        $request->validate([
            'ulasan' => 'required|string',
            'id_transaksi' => 'required|integer|exists:detail_transaksi,id'
        ]);

        $ulasan = new Ulasan();
        $ulasan->ulasan = $request->ulasan;
        $ulasan->id_transaksi = $request->id_transaksi;
        $ulasan->save();

        return redirect()->back()->with('success', 'Ulasan berhasil disimpan.');
    }
    
}