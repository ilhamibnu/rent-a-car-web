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
                                    <a href="javascript:void(0)" class="theme-btn-web" onclick="showUlasanModal({{ $data->id }}, {{ $data->id }})" data-toggle="modal" data-target="#ulasanModal">Ulasan</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <!-- Modal for Ulasan -->
                    <div class="modal fade" id="ulasanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Berikan Ulasan</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form id="ulasanForm" action="{{ route('ulasan.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-body">
                                        <p id="id_transaksi_display"></p>
                                        <p id="id_display"></p>
                                        <input type="hidden" name="id_transaksi" id="id_transaksi">
                                        <input type="hidden" name="id" id="id">
                                        <div class="mb-3">
                                            <label for="ulasan">Ulasan</label>
                                            <textarea class="form-control" id="ulasan" name="ulasan" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function showUlasanModal(id, id_transaksi) {
        // Set the values for the hidden inputs
        document.getElementById('id_transaksi').value = id_transaksi;
        document.getElementById('id').value = id;
        
        // Display the values in the modal
        document.getElementById('id_transaksi_display').innerText = "ID Transaksi: " + id_transaksi;
        document.getElementById('id_display').innerText = "ID: " + id;
    }
</script>

@endsection
