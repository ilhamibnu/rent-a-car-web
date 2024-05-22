@extends('landing.layout.main2')
@section('title', 'Penyewaan -')
@section('content')
<section class="cart-page layout-radius">
    <div class="boxcar-container">
        <div class="boxcar-title-three">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><span>Cars for Sale</span></li>
            </ul>
            <h2>Shop Cart</h2>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Total Bayar</th>
                                <th>Status Pembayaran</th>
                                <th>Detail Mobil</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $data )
                            <tr>
                                <td>
                                    {{ $data->name }}
                                </td>
                                <td>
                                    Rp. {{ number_format($data->total_harga, 0, ',', '.') }}
                                </td>
                                <td>
                                    @if($data->status_pembayaran == 'Belum Pilih Pembayaran')
                                    <p>{{ $data->status_pembayaran }}</p>
                                    @elseif($data->status_pembayaran == 'pending')
                                    <p>{{ $data->status_pembayaran }}</p>
                                    @elseif($data->status_pembayaran == 'expired')
                                    <p>{{ $data->status_pembayaran }}</p>
                                    @elseif($data->status_pembayaran == 'paid')
                                    <p>{{ $data->status_pembayaran }}</p>
                                    @endif
                                </td>
                                <td>
                                    @php
                                    $mobil = \App\Models\DetailTransaksi::where('id_transaksi', $data->id)->get();
                                    $nomer = 1;
                                    @endphp

                                    <ul>
                                        @foreach ($mobil as $item)
                                        <li>{{ $nomer++ }}. {{ $item->mobil->nama }} - Status : {{ $item->status_peminjaman }}</li>
                                        <li>Tanggal Keluar: {{ $item->tanggal_keluar }} <br> Tanggal Kembali: {{ $item->tanggal_kembali }}</li>
                                        @endforeach
                                    </ul>

                                </td>
                                <td>
                                    <a href="/user/checkout/{{ $data->id }}" class="theme-btn-web">Detail</a>


                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="cart-table-bottom">
                        <form class="coupan-form">
                            <input type="text" name="coupan" placeholder="Coupon Code" />
                            <button type="submit" class="theme-btn-web">Apply Coupan <img src="{{ asset('landing/images/arrow.svg') }}" alt="" /></button>
                    </form>
                    <a href="#" title="" class="theme-btn-web">Update Cart <img src="{{ asset('landing/images/arrow.svg') }}" alt="" /></a>
                </div> --}}
            </div>
            <!--cart-table-->
        </div>
    </div>
    </div>
</section>
<!--cart-page-->
@endsection
