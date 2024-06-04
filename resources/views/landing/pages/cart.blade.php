@extends('landing.layout.main2')
@section('title', 'Cart -')
@section('content')
    <section class="cart-page layout-radius">
        <div class="boxcar-container">
            <div class="boxcar-title-three">
                <ul class="breadcrumb">
                    <li><a href="/">Beranda</a></li>
                    <li><span>Keranjang</span></li>
                </ul>
                <h2>Keranjang Belanjaan</h2>
            </div>
            <div class="row">
                <div class="col-lg-9">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="text-capitalize">Nama produk</th>
                                    <th class="text-capitalize">Harga</th>
                                    <th class="text-capitalize">Jumlah Hari</th>
                                    <th class="text-capitalize">Subtotal</th>
                                    <th class="text-capitalize">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cart as $data)
                                    <tr>
                                        <td>
                                            <div class="shop-cart-product">
                                                <div class="shop-product-cart-img">
                                                    <img src="{{ asset($data->foto) }}" alt="" />
                                                </div>
                                                <div class="shop-product-cart-info">
                                                    <h3><a href="#" title="">{{ $data->nama }}</a></h3>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="price">Rp. {{ number_format($data->harga, 0, ',', '.') }}</span>
                                        </td>
                                        <td>
                                            @php
                                                $tanggal_keluar = strtotime($data->tanggal_keluar);
                                                $tanggal_kembali = strtotime($data->tanggal_kembali);
                                                $diff = $tanggal_kembali - $tanggal_keluar;
                                                $hari = floor($diff / (60 * 60 * 24));
                                                echo $hari;
                                            @endphp
                                        </td>
                                        <td>
                                            <span class="price">Rp.
                                                @php
                                                    $subtotal = $data->harga * $hari;
                                                    echo number_format($subtotal, 0, ',', '.');
                                                @endphp
                                            </span>
                                        </td>
                                        <td>
                                            <form action="/user/cart/{{ $data->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="remove-cart-item">
                                                    <img src="{{ asset('landing/images/icons/remove.svg') }}"
                                                        alt="" />
                                                </button>
                                            </form>
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
                <div class="col-lg-3">
                    <div class="cart-totals">
                        <h3>Total Pembayaran</h3>
                        <table>
                            <tbody>
                                <tr>
                                    <th>Total</th>
                                    <td>Rp. {{ number_format($sum_cart, 0, ',', '.') }}</td>

                                </tr>
                            </tbody>
                        </table>
                        @if ($sum_cart == 0)
                        @else
                            <form action="/user/checkout" method="post">
                                @csrf
                                <button class="theme-btn-web">Lanjut Pembayaran <img src="images/arrow.svg"
                                        alt=""></button>
                            </form>
                        @endif

                    </div>
                    <!--cart-totals end-->
                </div>

            </div>
        </div>
    </section>
    <!--cart-page-->
@endsection
