<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\Mobil;
use App\Models\Ulasan;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $start = Carbon::now()->subDays(6);
        $end = Carbon::now();

        $report = Transaksi::selectRaw('DATE(created_at) as date, COUNT(id) as total_transaksi, SUM(total_harga) as total_harga')
            ->whereBetween('created_at', [$start, $end])
            ->where('status_pembayaran', 'paid')
            ->groupBy('date')
            ->get()
            ->keyBy('date');

        // Generate an array of dates for the last 7 days
        $dates = [];
        for ($date = $start; $date->lte($end); $date->addDay()) {
            $dates[$date->format('Y-m-d')] = [
                'date' => $date->format('Y-m-d'),
                'total_transaksi' => $report->has($date->format('Y-m-d')) ? (int) $report[$date->format('Y-m-d')]->total_transaksi : 0,
                'total_harga' => $report->has($date->format('Y-m-d')) ? (int) $report[$date->format('Y-m-d')]->total_harga : 0,
            ];
        }


        $jumlah_ulasan = Ulasan::count();
        $jumlah_mobil = Mobil::count();
        $jumlah_user = User::where('role', 'user')->count();
        $jumlah_transaksi = Transaksi::count();
        return view('admin.pages.dashboard', [
            'jumlah_ulasan' => $jumlah_ulasan,
            'jumlah_mobil' => $jumlah_mobil,
            'jumlah_user' => $jumlah_user,
            'jumlah_transaksi' => $jumlah_transaksi,
            'report' => array_values($dates)
        ]);
    }
}
