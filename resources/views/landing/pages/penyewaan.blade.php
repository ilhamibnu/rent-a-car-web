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
                                <td>{{ $data->user->name }}</td>
                                <td>Rp. {{ number_format($data->total_harga, 0, ',', '.') }}</td>
                                <td>
                                    @if($data->status_pembayaran == 'Belum Pilih Pembayaran')
                                    <p>{{ $data->status_pembayaran }}</p>
                                    @elseif($data->status_pembayaran == 'pending')
                                    <p>{{ $data->status_pembayaran }}</p>
                                    @elseif($data->status_pembayaran == 'expire')
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
                                        <li>{{ $nomer++ }}. {{ $item->mobil->nama }}</li>
                                        <li>Tanggal Keluar: {{ $item->tanggal_keluar }} <br> Tanggal Kembali: {{ $item->tanggal_kembali }}</li>
                                        @if($data->status_pembayaran == 'paid')
                                        <li><a href="#" class="theme-btn-web" data-bs-toggle="modal" data-bs-target="#ulasan{{ $item->id }}" data-bs-whatever="@mdo">Beri Ulasan</a></li>

                                        @else
                                        @endif

                                        <div class="modal fade" id="ulasan{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ulasan</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="/user/ulasan" method="POST">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="modal-body">
                                                            <input type="hidden" name="id" value="{{ $item->id }}">

                                                            @php
                                                            $cek_ulasan = \App\Models\Ulasan::where('id_detail_transaksi', $item->id)->first();
                                                            @endphp

                                                            @if($cek_ulasan)

                                                            <div class="mb-3">
                                                                {{-- <label for="message-text" class="col-form-label">Ulasan</label> --}}
                                                                <textarea name="ulasan" class="form-control" id="message-text">{{ $cek_ulasan->ulasan }}</textarea>
                                                            </div>

                                                            @else

                                                            <div class="mb-3">
                                                                {{-- <label for="message-text" class="col-form-label">Ulasan</label> --}}
                                                                <textarea name="ulasan" class="form-control" id="message-text"></textarea>
                                                            </div>

                                                            @endif

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
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
                </div>
            </div>
        </div>
</section>
@endsection
