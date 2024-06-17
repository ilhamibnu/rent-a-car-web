<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class UlasanController extends Controller
{
    public function index()
    {
        $ulasan = Ulasan::with('detailTransaksi')->orderBydesc('id')->get();

        return view('admin.pages.data-ulasan', [
            'ulasan' => $ulasan
        ]);
    }

    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'id_transaksi' => 'required|exists:detail_transaksi,id',
                'ulasan' => 'required|string|max:255',
            ]);

            $ulasan = new Ulasan();
            $ulasan->id_transaksi = $validatedData['id_transaksi'];
            $ulasan->ulasan = $validatedData['ulasan'];
            $ulasan->save();

            session()->flash('success', 'Ulasan berhasil disimpan.');
        } catch (\Exception $e) {
            session()->flash('error', 'Gagal menyimpan ulasan.');
        }

        return redirect()->back();
    }
}
