@extends('landing.layout.main2')
@section('title', 'Checkout -')
@section('content')
<!-- checkout-section -->
<section class="checkout-section layout-radius">
    <div class="boxcar-container">
        <div class="boxcar-title-three">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><span>Cars for Sale</span></li>
            </ul>
            <h2>Shop Checkout</h2>
        </div>
        <div class="row">
            <!-- content-column -->
            <div class="content-column col-lg-8 col-md-12 col-sm-12">
                <div class="inner-column">
                    <h6 class="title">Billing details</h6>
                    <form class="row g-0">
                        <div class="form-column col-lg-6">
                            <div class="form_boxes">
                                <label>Name</label>
                                <input type="text" value="{{ Auth::user()->name }}" name="name" placeholder="Ali" />
                            </div>
                        </div>
                        <div class="form-column col-lg-6">
                            <div class="form_boxes">
                                <label>Email</label>
                                <input type="text" value="{{ Auth::user()->email }}" name="last-name" placeholder="Tufan" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- side-bar -->
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="side-bar">
                    <div class="order-box">
                        <h6 class="title">Your order</h6>
                        <ul class="order-list">
                            <li>Product<span>Subtotal</span></li>
                            @php
                            $detail_transaksi = \App\Models\DetailTransaksi::where('id_transaksi', $transaksi->id)->get();
                            $nomer = 1;
                            @endphp
                            @foreach ($detail_transaksi as $data)
                            <li>{{ $nomer++ }}. {{ $data->mobil->nama }}<span>Rp. {{ number_format($data->total_harga, 0, ',', '.') }}</span></li>
                            <li>Tanggal Keluar: {{ $data->tanggal_keluar }} <br> Tanggal Kembali: {{ $data->tanggal_kembali }}</li>
                            @endforeach
                            <li>Total<span> Rp. {{ number_format($transaksi->total_harga, 0, ',', '.') }}</span></li>
                        </ul>
                    </div>
                    @if ($transaksi->status_pembayaran == 'Belum Pilih Pembayaran')
                    <div class="payment-options">
                        <ul>
                            <li>
                                <div class="shipp">
                                    {{-- // selected --}}
                                    <input checked type="radio" id="c1" name="cc" />
                                    <label for="c4"><span></span>
                                        <small>Payment Gateway</small>
                                    </label>
                                </div>
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                            </li>
                        </ul>
                    </div>
                    <div class="form-submit">
                        <button id="pay-button" class="theme-btn w-100">Pay <img src="images/arrow.svg" alt="" /></button>
                    </div>
                    @else
                    <div class="payment-options">
                        <ul>
                            <li>
                                Status Pembayaran : {{ $transaksi->status_pembayaran }} <br>
                                Bank : {{ $transaksi->bank }} <br>
                                No Rekening : {{ $transaksi->no_va }} <br>
                                Expired : {{ $transaksi->expired_at }}
                            </li>
                        </ul>
                    </div>

                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
<!-- End checkout-section -->
@endsection

@section('script')
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-T7tGstPTu1xNiEG7"></script>
<script type="text/javascript">
    // For example trigger on button clicked, or any time you need
    document.getElementById('pay-button').onclick = function() {
        // SnapToken acquired from previous step
        snap.pay('{{ $snapToken }}');
    };

</script>
@endsection
