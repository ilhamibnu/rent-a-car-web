<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('user')->orderBy('id', 'DESC')->get();
        return view('admin.pages.data-transaksi', [
            'transaksi' => $transaksi
        ]);
    }

    public function ubahstatus(Request $request)
    {
        $id = $request->id;
        $DetailTransaksi = DetailTransaksi::find($id);
        $DetailTransaksi->status_peminjaman = $request->status_peminjaman;
        $DetailTransaksi->save();

        return redirect('/data-transaksi')->with('statusubah', 'Status transaksi berhasil diubah.');
    }
}
