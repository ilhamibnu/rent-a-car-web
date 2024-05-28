<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    // public function index()
    // {
    //     $ulasan = Ulasan::with('transaksi')->get();
    //     return view('landing.pages.index', ['ulasan' => $ulasan]);
    // }

    public function index()
    {
        $ulasan = Ulasan::with('transaksi')->get();
        return view('admin.pages.data-ulasan', [
            'ulasan' => $ulasan
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_transaksi' => 'required|exists:detail_transaksi,id',
            'ulasan' => 'required|string|max:255',
        ]);

        $ulasan = new Ulasan();
        $ulasan->id_transaksi = $request->id_transaksi;
        $ulasan->ulasan = $request->ulasan;
        $ulasan->save();

        return redirect()->back()->with('success', 'Ulasan berhasil disimpan.');
    }

}
