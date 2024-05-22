<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenyewaanController extends Controller
{
    public function index()
    {
        $transaksi = DB::table('transaksi')
            ->join('users', 'transaksi.id_user', '=', 'users.id')
            ->select('transaksi.*', 'users.name')
            ->where('transaksi.id_user', auth()->user()->id)
            ->get();


        return view('landing.pages.penyewaan', [
            'transaksi' => $transaksi
        ]);
    }
}
