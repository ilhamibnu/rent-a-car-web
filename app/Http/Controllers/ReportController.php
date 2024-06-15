<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $transaksi = Transaksi::with('user', 'detailTransaksi')->get()->sortByDesc('id');
        return view('admin.pages.data-report', [
            'transaksi' => $transaksi
        ]);
    }

    public function filter(Request $request)
    {
        $date1 = $request->date1;
        $date2 = $request->date2;
        $status = $request->status;

        // Base query with relationships loaded
        $query = Transaksi::with('user', 'detailTransaksi');

        // Apply filters if both dates and status are provided
        if ($date1 && $date2 && $status) {
            $query->whereBetween('created_at', [$date1, $date2])
                ->where('status_pembayaran', $status);
        }
        // Apply date range filter if both dates are provided but status is not
        elseif ($date1 && $date2) {
            $query->whereBetween('created_at', [$date1, $date2]);
        }
        // Apply status filter if status is provided but dates are not
        elseif ($status) {
            $query->where('status_pembayaran', $status);
        }

        // Execute the query and get the results
        $transaksi = $query->get();

        return view('admin.pages.data-report', [
            'transaksi' => $transaksi
        ]);
    }
}
