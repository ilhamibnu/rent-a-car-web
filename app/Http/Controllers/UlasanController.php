<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function index()
    {

        $ulasan = Ulasan::with('transaksi')->get();
        return view('admin.pages.data-ulasan', [
            'ulasan' => $ulasan
        ]);
    }
}
