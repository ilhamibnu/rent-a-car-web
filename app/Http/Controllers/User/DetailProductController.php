<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Cart;
use App\Models\Transaksi;
use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ulasan;

class DetailProductController extends Controller
{
    public function index($id)
    {
        $mobil = Mobil::find($id);
        $ulasan = Ulasan::with('detailTransaksi')->whereHas('detailTransaksi', function ($query) use ($mobil) {
            $query->where('id_mobil', $mobil->id);
        })->get();
        $rekomendasi = Mobil::where('jenis_kendaraan', $mobil->jenis_kendaraan)
            ->where('id', '!=', $id)
            ->get();

        return view('landing.pages.detail-product', [
            'mobil' => $mobil,
            'ulasan' => $ulasan,
            'tanggal_keluar' => '0',
            'tanggal_kembali' => '0',
            'filtermobil' => '1',
            'rekomendasi' => $rekomendasi
        ]);
    }

    public function detail($id, $tanggal_keluar, $tanggal_kembali)
    {
        $mobil = Mobil::find($id);
        $ulasan = Ulasan::with('detailTransaksi')->whereHas('detailTransaksi', function ($query) use ($mobil) {
            $query->where('id_mobil', $mobil->id);
        })->get();

        $rekomendasi = Mobil::where('jenis_kendaraan', $mobil->jenis_kendaraan)
            ->where('id', '!=', $id)
            ->get();

        return view('landing.pages.detail-product', [
            'mobil' => $mobil,
            'ulasan' => $ulasan,
            'tanggal_keluar' => $tanggal_keluar,
            'tanggal_kembali' => $tanggal_kembali,
            'filtermobil' => '0',
            'rekomendasi' => $rekomendasi
        ]);
    }

    public function cekketersediaan(Request $request)
    {
        if ($request->tanggal_keluar != null && $request->tanggal_kembali != null) {
            if (Carbon::parse($request->tanggal_keluar)->greaterThanOrEqualTo(Carbon::parse($request->tanggal_kembali))) {
                return redirect()->back()->with('tanggaltidakvalid', 'Tanggal keluar tidak boleh lebih besar atau sama dengan tanggal kembali');
            }
        }

        $id_mobil = $request->id_mobil;
        $tanggal_keluar = Carbon::parse($request->tanggal_keluar);
        $tanggal_kembali = Carbon::parse($request->tanggal_kembali);

        $mobil = Mobil::find($id_mobil);


        $filtermobil = Mobil::whereDoesntHave('detailTransaksi', function ($query) use ($tanggal_keluar, $tanggal_kembali) {
            $query->where(function ($query) use ($tanggal_keluar, $tanggal_kembali) {
                $query->whereBetween('tanggal_keluar', [$tanggal_keluar, $tanggal_kembali])
                    ->orWhereBetween('tanggal_kembali', [$tanggal_keluar, $tanggal_kembali])
                    ->orWhere(function ($query) use ($tanggal_keluar, $tanggal_kembali) {
                        $query->where('tanggal_keluar', '<', $tanggal_keluar)
                            ->where('tanggal_kembali', '>', $tanggal_kembali);
                    });
            });
        })->where('id', $id_mobil)->where('status', 'tersedia')->get();

        if ($filtermobil->isEmpty()) {
            return redirect()->back()->with('mobiltidakada', 'Mobil tidak tersedia pada tanggal tersebut');
        }


        $ulasan = Ulasan::with('detailTransaksi')->whereHas('detailTransaksi', function ($query) use ($mobil) {
            $query->where('id_mobil', $mobil->id);
        })->get();
        $rekomendasi = Mobil::where('jenis_kendaraan', $mobil->jenis_kendaraan)
            ->where('id', '!=', $mobil->id)
            ->get();

        return view('landing.pages.detail-product', [
            'filtermobil' => $filtermobil,
            'mobil' => $mobil,
            'ulasan' => $ulasan,
            'tanggal_keluar' => $tanggal_keluar,
            'tanggal_kembali' => $tanggal_kembali,
            'rekomendasi' => $rekomendasi
        ]);
    }

    public function booking(Request $request)
    {
        if ($request->tanggal_keluar != null && $request->tanggal_kembali != null) {
            if (Carbon::parse($request->tanggal_keluar)->greaterThanOrEqualTo(Carbon::parse($request->tanggal_kembali))) {
                return redirect()->back()->with('tanggaltidakvalid', 'Tanggal keluar tidak boleh lebih besar atau sama dengan tanggal kembali');
            }
        }

        $id_mobil = $request->id_mobil;
        $tanggal_keluar = date('Y-m-d', strtotime($request->tanggal_keluar));
        $tanggal_kembali = date('Y-m-d', strtotime($request->tanggal_kembali));

        $cart = new Cart();
        if (auth()->user() == null) {
            return redirect()->back()->with('logidulubang', 'Anda harus login terlebih dahulu');
        }
        $cart->id_user = auth()->user()->id;
        $cart->id_mobil = $id_mobil;
        $cart->tanggal_keluar = $tanggal_keluar;
        $cart->tanggal_kembali = $tanggal_kembali;
        $mobil = Mobil::find($id_mobil);
        $cart->total_harga = $mobil->harga * (strtotime($tanggal_kembali) - strtotime($tanggal_keluar)) / 86400;
        $cart->save();

        return redirect()->back()->with('berhasilbooking', 'Berhasil menambahkan mobil ke keranjang');
    }
}
