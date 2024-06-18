@extends('admin.layout.main')
@section('title', 'Data Mobil - ')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Data Mobil</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>

                    <li class="breadcrumb-item active">Data Mobil</li>
                </ol>
            </div>
            <div class="col-lg-6">
                <!-- Bookmark Start-->
                <div class="bookmark">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                {{-- btn add --}}
                <div class="card-header pb-0">
                    <a href="" data-bs-toggle="modal" data-bs-target="#Add" class="btn btn-primary">Tambah
                        Data</a>
                    <a href="/data-mobil-terhapus" class="btn btn-danger">Data Mobil Terhapus</a>


                </div>
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
                                    <th class="text-capitalize text-center">nama</th>
                                    <th class="text-capitalize text-center">foto</th>
                                    <th class="text-capitalize text-center">harga</th>
                                    <th class="text-capitalize text-center">jenis kendaraan</th>
                                    <th class="text-capitalize text-center">deskripsi</th>
                                    <th class="text-capitalize text-center">action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataMobils as $item)
                                <tr>
                                    <td class="text-center">{{ $item->nama }}</td>
                                    <td class="text-center"><img src="{{ asset($item->foto) }}" alt="gambar" height="70px"></td>
                                    <td class="text-center">Rp. {{ number_format($item->harga, 0, ',', '.') }}</td>
                                    <td class="text-center">{{ $item->jenis_kendaraan }}</td>
                                    <td class="text-center">{{ $item->deskripsi }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Edit{{ $item->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Delete{{ $item->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                {{-- Edit Modal --}}
                                <div class="modal fade" id="Edit{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('Admin.data-mobil.update', $item->id) }}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="mb-3">

                                                        <label class="col-form-label text-capitalize" for="nama">jenis
                                                            Kendaraan:</label>
                                                        <select class="form-select" name="jenis_kendaraan" id="jenis_kendaraan">
                                                            <option value="motor" class="text-capitalize" {{ $item->jenis_kendaraan == 'motor' ? 'selected' : '' }}>
                                                                motor</option>
                                                            <option value="mobil" class="text-capitalize" {{ $item->jenis_kendaraan == 'mobil' ? 'selected' : '' }}>
                                                                mobil</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">

                                                        <label class="col-form-label text-capitalize" for="nama">masukkan nama
                                                            mobil:</label>
                                                        <input class="form-control" name="nama" id="nama" type="text" value="{{ $item->nama }}" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label text-capitalize" for="harga">masukkan
                                                            harga:</label>
                                                        <input class="form-control" type="number" name="harga" id="harga" value="{{ $item->harga }}" required>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label text-capitalize" for="deskripsi">masukkan
                                                            deskripsi:</label>
                                                        <textarea class="form-control" name="deskripsi" id="deksripsi" rows="4">{{ $item->deskripsi }}</textarea>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="foto" class="form-label">Masukkan
                                                            Foto</label>
                                                        <input type="hidden" name="oldImage" value="{{ $item->foto }}">
                                                        @if ($item->foto)
                                                        <img id="edit-img-preview-{{ $item->id }}" class="img-preview img-fluid mb-3 col-sm-5 d-block" src="{{ asset('img/mobil/' . basename($item->foto)) }}" alt="Preview Image">
                                                        @else
                                                        <img id="edit-img-preview-{{ $item->id }}" class="img-preview img-fluid mb-3 col-md-6" style="display: none;">
                                                        @endif
                                                        <input type="file" onchange="previewImage(event, 'edit-img-preview-{{ $item->id }}')" name="foto" id="foto-edit-{{ $item->id }}" class="form-control" autocomplete="off">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button class="btn btn-primary" type="submit">
                                                        Ok
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                {{-- End Modal --}}

                                {{-- Delete Modal --}}
                                <div class="modal fade" id="Delete{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Anda Yakin Akan Menghapus ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <form action="{{ route('Admin.data-mobil.delete', $item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" id="delete-record{{ $item->id }}">Ya, Hapus</button>
                                                </form>
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
            {{-- Add Modal --}}
            <div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add</h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('Admin.data-mobil.add') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label class="col-form-label text-capitalize" for="jenis_kendaraan">Jenis
                                        Kendaraan:</label>
                                    <select class="form-select" name="jenis_kendaraan" id="jenis_kendaraan">
                                        <option value="" class="text-capitalize" selected disabled>pilih jenis
                                            kendaraan</option>
                                        <option value="motor" class="text-capitalize">motor</option>
                                        <option value="mobil" class="text-capitalize">mobil</option>
                                    </select>
                                </div>
                                <div class="mb-3">

                                    <label class="col-form-label text-capitalize" for="nama">masukkan nama
                                        kendaraan:</label>
                                    <input class="form-control" name="nama" id="nama" type="text" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-capitalize" for="harga">masukkan
                                        harga:</label>
                                    <input class="form-control" type="number" name="harga" id="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-capitalize" for="deskripsi">masukkan
                                        deskripsi:</label>
                                    <textarea class="form-control" name="deskripsi" id="deksripsi" rows="4">

                                            </textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Masukkan Foto</label>
                                    <img id="add-img-preview" class="img-preview img-fluid mb-3 col-md-6" style="display: none;">
                                    <input type="file" onchange="previewImage(event, 'add-img-preview')" name="foto" id="foto-add" class="form-control" autocomplete="off" />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                    Close
                                </button>
                                <button class="btn btn-primary" type="submit">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- End Modal --}}
        </div>
    </div>
    <!-- DOM / jQuery  Ends-->
</div>

<script>
    function previewImage(event, targetImgId) {
        const input = event.target;
        const imgPreview = document.getElementById(targetImgId);

        const file = input.files[0];
        if (file) {
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(file);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            };
        } else {
            imgPreview.style.display = 'none';
            imgPreview.src = '';
        }
    }

</script>

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
