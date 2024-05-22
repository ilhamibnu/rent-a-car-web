<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BayarDendaController extends Controller
{
    public function bayardenda($id_transaksi, $denda_telat, $kondisi_denda)
    {
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;

        // \Midtrans\Config::$isProduction = true;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => $transaksi->no_transaksi,
                'gross_amount' => $transaksi->total_harga,
            ),
            'customer_details' => array(
                'first_name' => auth()->user()->name,
                // 'phone' => auth()->user()->phone,
                'email' => auth()->user()->email,
            ),
            'item_details' => array(
                array(
                    'id' => $transaksi->no_transaksi,
                    'price' => $transaksi->total_harga,
                    'quantity' => 1,
                    'name' => 'Pembayaran Penyewaan Mobil',
                ),
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('landing.pages.checkout', [
            'transaksi' => $transaksi,
            'snapToken' => $snapToken
        ]);
    }
}
