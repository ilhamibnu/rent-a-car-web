<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Mobil;
use App\Models\Ulasan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        if ($request->tanggal_keluar != null && $request->tanggal_kembali != null) {
            if (Carbon::parse($request->tanggal_keluar)->greaterThanOrEqualTo(Carbon::parse($request->tanggal_kembali))) {
                return redirect()->back()->with('tanggaltidakvalid', 'Tanggal keluar tidak boleh lebih besar atau sama dengan tanggal kembali');
            }
        }

        if ($request->tanggal_keluar != null && $request->tanggal_kembali != null && $request->jenis_kendaraan == null) {
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

            $ulasan = Ulasan::with('transaksi')->get();
            $popularKendaraan = $this->popularKendaraan();

            return view('landing.pages.index', [
                'mobil' => $mobil,
                'tanggal_keluar' => $tanggal_keluar,
                'tanggal_kembali' => $tanggal_kembali,
                'ulasan' => $ulasan,
                'popularKendaraan' => $popularKendaraan
            ]);
        } elseif ($request->tanggal_keluar != null && $request->tanggal_kembali != null && $request->jenis_kendaraan != null) {
            $tanggal_keluar = Carbon::parse($request->tanggal_keluar);
            $tanggal_kembali = Carbon::parse($request->tanggal_kembali);
            $jenis_kendaraan = $request->jenis_kendaraan;

            $mobil = Mobil::where('jenis_kendaraan', $jenis_kendaraan)
                ->whereDoesntHave('detailTransaksi', function ($query) use ($tanggal_keluar, $tanggal_kembali) {
                    $query->where(function ($query) use ($tanggal_keluar, $tanggal_kembali) {
                        $query->where('tanggal_keluar', '>=', $tanggal_keluar)
                            ->where('tanggal_kembali', '<=', $tanggal_kembali)
                            ->orWhere(function ($query) use ($tanggal_keluar, $tanggal_kembali) {
                                $query->where('tanggal_keluar', '<=', $tanggal_keluar)
                                    ->where('tanggal_kembali', '>=', $tanggal_kembali);
                            });
                    });
                })

                ->where('status', 'tersedia')
                ->get();

            $ulasan = Ulasan::with('transaksi')->get();
            $popularKendaraan = $this->popularKendaraan();

            return view('landing.pages.index', [
                'mobil' => $mobil,
                'tanggal_keluar' => $tanggal_keluar,
                'tanggal_kembali' => $tanggal_kembali,
                'ulasan' => $ulasan,
                'popularKendaraan' => $popularKendaraan
            ]);
        } elseif ($request->jenis_kendaraan != null) {
            $mobil = Mobil::where('jenis_kendaraan', $request->jenis_kendaraan)
                ->where('status', 'tersedia')
                ->get();

            $ulasan = Ulasan::with('transaksi')->get();

            return view('landing.pages.index', [
                'mobil' => $mobil,
                'tanggal_keluar' => '0',
                'tanggal_kembali' => '0',
                'ulasan' => $ulasan,
                'popularKendaraan' => $this->popularKendaraan()
            ]);
        } else {
            $mobil = Mobil::all();

            $ulasan = Ulasan::with('transaksi')->get();
            $popularKendaraan = $this->popularKendaraan();

            return view('landing.pages.index', [
                'mobil' => $mobil,
                'tanggal_keluar' => '0',
                'tanggal_kembali' => '0',
                'ulasan' => $ulasan,
                'popularKendaraan' => $popularKendaraan
            ]);
        }
    }

    private function popularKendaraan()
    {
        return Mobil::withCount('detailTransaksi')
            ->having('detail_transaksi_count', '>', 3)
            ->orderBy('detail_transaksi_count', 'desc')
            ->get();
    }
}
 