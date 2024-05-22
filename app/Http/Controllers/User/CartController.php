<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\DetailTransaksi;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $cart = DB::table('cart')
            ->join('mobil', 'cart.id_mobil', '=', 'mobil.id')
            ->select('cart.*', 'mobil.nama', 'mobil.harga')
            ->where('cart.id_user', auth()->user()->id)
            ->get();

        $sum_cart = DB::table('cart')
            ->where('id_user', auth()->user()->id)
            ->sum('total_harga');

        return view('landing.pages.cart', [
            'cart' => $cart,
            'sum_cart' => $sum_cart
        ]);
    }

    public function checkout()
    {
        $cart = Cart::where('id_user', auth()->user()->id)->get();
        $transaksi = new Transaksi();
        $transaksi->no_transaksi = 'TRX' . date('YmdHis');
        $transaksi->total_harga = $cart->sum('total_harga');
        $transaksi->status_pembayaran = 'Belum Pilih Pembayaran';
        $transaksi->bank = '';
        $transaksi->no_va = '';
        $transaksi->id_user = auth()->user()->id;
        $transaksi->save();
        foreach ($cart as $c) {
            $detail_transaksi = new DetailTransaksi();
            $detail_transaksi->id_transaksi = $transaksi->id;
            $detail_transaksi->id_mobil = $c->id_mobil;
            $detail_transaksi->tanggal_keluar = $c->tanggal_keluar;
            $detail_transaksi->tanggal_kembali = $c->tanggal_kembali;
            $detail_transaksi->total_harga = $c->total_harga;
            $detail_transaksi->status_peminjaman = 'tersedia';
            $detail_transaksi->save();
        }

        $delete_cart = Cart::where('id_user', auth()->user()->id)->get();
        if ($delete_cart) {
            foreach ($delete_cart as $dc) {
                $dc->delete();
            }
        }

        \Midtrans\Config::$serverKey = 'SB-Mid-server-aNyMN6S4_am_yDaJ6fpdfrxc';
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

    public function destroy($id)
    {
        Cart::where('id', $id)->where('id_user', auth()->user()->id)->delete();
        return redirect()->back()->with('deletecart', 'Berhasil menghapus data');
    }


    public function callback(Request $request)
    {
        $serverkey = 'SB-Mid-server-aNyMN6S4_am_yDaJ6fpdfrxc';
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverkey);

        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'settlement') {

                $order = Transaksi::where('no_transaksi', $request->order_id)->first();
                $order->bank = $request->va_numbers[0]['bank'];
                $order->no_va = $request->va_numbers[0]['va_number'];
                $order->expired_at = $request->expiry_time;
                $order->status_pembayaran = 'paid';
                $order->save();

                $detail_transaksi = DetailTransaksi::where('id_transaksi', $order->id)->get();
                foreach ($detail_transaksi as $dt) {
                    $dt->status_peminjaman = 'tidak tersedia';
                    $dt->save();
                }
            } elseif ($request->transaction_status == 'pending') {

                $order = Transaksi::where('no_transaksi', $request->order_id)->first();
                $order->bank = $request->va_numbers[0]['bank'];
                $order->no_va = $request->va_numbers[0]['va_number'];
                $order->expired_at = $request->expiry_time;
                $order->status_pembayaran = 'pending';
                $order->save();
            } else {
                $order = Transaksi::where('no_transaksi', $request->order_id)->first();
                $order->bank = $request->va_numbers[0]['bank'];
                $order->no_va = $request->va_numbers[0]['va_number'];
                $order->expired_at = $request->expiry_time;
                $order->status_pembayaran = 'expire';
                $order->save();
            }
        }
    }
}
