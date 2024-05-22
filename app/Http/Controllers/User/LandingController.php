<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Mobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        if ($request->tanggal_keluar != null && $request->tanggal_kembali != null) {
            $tanggal_keluar = Carbon::parse($request->tanggal_keluar);
            $tanggal_kembali = Carbon::parse($request->tanggal_kembali);
            $mobil = Mobil::whereDoesntHave('detailTransaksi', function ($query) use ($tanggal_keluar, $tanggal_kembali) {
                $query->where(function ($query) use ($tanggal_keluar, $tanggal_kembali) {
                    $query->whereBetween('tanggal_keluar', [$tanggal_keluar, $tanggal_kembali])
                        ->orWhereBetween('tanggal_kembali', [$tanggal_keluar, $tanggal_kembali])
                        ->orWhere(function ($query) use ($tanggal_keluar, $tanggal_kembali) {
                            $query->where('tanggal_keluar', '<', $tanggal_keluar)
                                ->where('tanggal_kembali', '>', $tanggal_kembali);
                        });
                });
            })->where('status', 'tersedia')->get();


            return view('landing.pages.index', [
                'mobil' => $mobil,
                'tanggal_keluar' => $tanggal_keluar,
                'tanggal_kembali' => $tanggal_kembali
            ]);
        } else {
            $mobil = Mobil::all();

            return view('landing.pages.index', [
                'mobil' => $mobil,
                'tanggal_keluar' => '0',
                'tanggal_kembali' => '0'
            ]);
        }
    }
}
