<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Transaksi;

class TransaksiController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('detailTransaksi')->get();
        return view('admin.pages.data-transaksi', compact('transaksi'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'id_user' => 'required',
            'id_transaksi' => 'required',
            'tanggal_kembali' => 'required|date',
            'tanggal_keluar' => 'required|date',
            'status' => 'required',
            'tanggal' => 'required|date',
            'total_harga' => 'required|numeric',
        ]);
    
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->id_user = $request->id_user;
        $transaksi->status = $request->status;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->total_harga = $request->total_harga;
        $transaksi->save();
    
        $detail = DetailTransaksi::where('id_transaksi', $id)->first();
        $detail->id_transaksi = $request->id_transaksi;
        $detail->tanggal_kembali = $request->tanggal_kembali;
        $detail->tanggal_keluar = $request->tanggal_keluar;
        $detail->save();
    
        return redirect()->back()->with('update', 'Data Berhasil Di Perbarui');
        
    }    
    
    public function destroy($id)
    {
        // Hapus data transaksi
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->detailTransaksi()->delete();
        $transaksi->delete();

        return redirect()->back()->with('destroy', 'Berhasil Menghapus Data Transaksi');

    }
}
