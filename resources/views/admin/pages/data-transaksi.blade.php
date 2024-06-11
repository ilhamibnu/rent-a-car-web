@extends('admin.layout.main')
@section('title', 'Data Mobil - ')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Data Transaksi</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                    <li class="breadcrumb-item active">Data Transaksi</li>
                </ol>
            </div>
            <div class="col-lg-6">
                <!-- Bookmark Start-->
                <div class="bookmark">

                </div>
                <!-- Bookmark Ends-->
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mt-2">



                        <?php

                                $nomer = 1;

                                ?>

                        @foreach ($errors->all() as $error)
                        <li>{{ $nomer++ }}. {{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="display" id="test">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Status Pembayaran</th>
                                    <th>Date</th>
                                    <th>Detail Mobil</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($transaksi as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->user->name }}</td>
                                    <td>
                                        @if ($data->status_pembayaran == 'Belum Pilih Pembayaran')
                                        <span class="badge badge-danger">{{ $data->status_pembayaran }}</span>
                                        @elseif($data->status_pembayaran == 'pending')
                                        <span class="badge badge-warning">{{ $data->status_pembayaran }}</span>

                                        @elseif($data->status_pembayaran == 'expired')
                                        <span class="badge badge-danger">{{ $data->status_pembayaran }}</span>

                                        @elseif($data->status_pembayaran == 'paid')
                                        <span class="badge badge-success">{{ $data->status_pembayaran }}</span>

                                        @endif
                                    </td>
                                    <td>{{ date('d-m-Y', strtotime($data->created_at)) }}</td>
                                    <td>
                                        @php
                                        $detail_transaksi = \App\Models\DetailTransaksi::with(
                                        'transaksi',
                                        'mobil',
                                        )
                                        ->where('id_transaksi', $data->id)
                                        ->get();
                                        $no = 1;
                                        @endphp
                                        @foreach ($detail_transaksi as $detail)
                                        <li>{{ $no++ }}. {{ $detail->mobil->nama }}<br>
                                            <ul>
                                                <li>Tanggal Keluar : {{ $detail->tanggal_keluar }}</li>
                                                <li>Tanggal Kembali : {{ $detail->tanggal_kembali }}</li>
                                                <li>Status Peminjaman : {{ $detail->status_peminjaman }}</li>
                                                <li>
                                                    <div class="d-flex justify-content-center m-2">
                                                        <a href="" data-bs-toggle="modal" data-bs-target="#ubahstatus{{ $data->id }}" class="btn btn-sm btn-info">Ubah Status</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>

                                        {{-- Edit Status Modal --}}
                                        <div class="modal fade" id="ubahstatus{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Ubah Status</h5>
                                                        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="/transaksi/ubah-status-peminjaman" method="post">
                                                        @csrf
                                                        @method('POST')
                                                        <div class="modal-body">
                                                            <div class="mb-3">

                                                                <input type="hidden" name="id" value="{{ $detail->id }}">
                                                                <label class="col-form-label text-capitalize" for="id_user">Status</label>
                                                                <select name="status_peminjaman" class="form-select">
                                                                    <option value="" disabled>Pilih Status</option>
                                                                    <option value="tersedia" {{ $detail->status_peminjaman == 'Selesai
                                                                        ' ? 'selected' : '' }}>Tersedia</option>
                                                                    <option value="tidak tersedia" {{ $detail->status_peminjaman == 'tidak tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-primary" type="submit">Ubah</button>
                                                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                                Close
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- End Modal --}}

                                        @endforeach
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="" data-bs-toggle="modal" data-bs-target="#detailbayar{{ $data->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-eye"></i></a>
                                            {{-- <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Edit" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a> --}}
                                        </div>
                                    </td>
                                </tr>

                                {{-- Edit Status Modal --}}
                                <div class="modal fade" id="detailbayar{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Detail Pembayaran</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            @csrf
                                            @method('POST')
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <ul>
                                                        <li>Bank : {{ $data->bank }} </li>
                                                        <li>No Virtual : {{ $data->no_va }} </li>
                                                        <li>Expired : {{ $data->expired_at }}
                                                    </ul>

                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal --}}

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $('#test').DataTable({
        autoWidth: true,
        // "lengthMenu": [
        //     [16, 32, 64, -1],
        //     [16, 32, 64, "All"]
        // ]
        dom: 'Bfrtip',


        lengthMenu: [
            [10, 25, 50, -1]
            , ['10 rows', '25 rows', '50 rows', 'Show all']
        ],

        buttons: [{
                extend: 'colvis'
                , className: 'btn btn-primary shadow btn-xs sharp mr-1'
                , text: 'Column Visibility',
                // columns: ':gt(0)'


            },

            {

                extend: 'pageLength'
                , className: 'btn btn-primary shadow btn-xs sharp mr-1'
                , text: 'Page Length',
                // columns: ':gt(0)'
            },


            // 'colvis', 'pageLength',

            {
                extend: 'excel'
                , className: 'btn btn-primary shadow btn-xs sharp mr-1'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            // {
            //     extend: 'csv',
            //     className: 'btn btn-primary btn-sm',
            //     exportOptions: {
            //         columns: [0, ':visible']
            //     }
            // },
            {
                extend: 'pdf'
                , className: 'btn btn-primary shadow btn-xs sharp mr-1'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            {
                extend: 'print'
                , className: 'btn btn-primary shadow btn-xs sharp mr-1'
                , exportOptions: {
                    columns: [0, ':visible']
                }
            },

            // 'pageLength', 'colvis',
            // 'copy', 'csv', 'excel', 'print'

        ]
    , });

</script>
@endsection
