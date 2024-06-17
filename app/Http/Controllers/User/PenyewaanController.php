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
        $transaksi = Transaksi::with('detailTransaksi')->where('id_user', auth()->user()->id)->orderBydesc('id')->get();

        return view('landing.pages.penyewaan', [
            'transaksi' => $transaksi
        ]);
    }

    public function storeUlasan(Request $request)
    {
        $cek_ulasan = Ulasan::where('id_detail_transaksi', $request->id)->first();
        if ($cek_ulasan) {
            $ulasan = Ulasan::find($cek_ulasan->id);
            $ulasan->ulasan = $request->ulasan;
            $ulasan->save();
        }

        $ulasan = new Ulasan();
        $ulasan->id_detail_transaksi = $request->id;
        $ulasan->ulasan = $request->ulasan;
        $ulasan->save();

        return redirect()->back()->with('ulasan', 'Ulasan berhasil disimpan.');
    }
}
