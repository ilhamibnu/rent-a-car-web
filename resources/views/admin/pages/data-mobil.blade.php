@extends('admin.layout.main')
@section('title', 'Data Mobil - ')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Data Mobil</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashboard.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Mobil</li>
                </ol>
            </div>
            <div class="col-lg-6">
                <!-- Bookmark Start-->
                <div class="bookmark">
                    <ul>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Tables"><i data-feather="inbox"></i></a></li>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Chat"><i data-feather="message-square"></i></a></li>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="command"></i></a></li>
                        <li><a href="javascript:void(0)" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Learning"><i data-feather="layers"></i></a></li>
                        <li>
                            <a href="javascript:void(0)"><i class="bookmark-search" data-feather="star"></i></a>
                            <form class="form-inline search-form">
                                <div class="form-group form-control-search">
                                    <input type="text" placeholder="Search..">
                                </div>
                            </form>
                        </li>
                    </ul>
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
                        <table class="display" id="advance-1">
                            <thead>
                                <tr>
                                    <th class="text-capitalize text-center">nama mobil</th>
                                    <th class="text-capitalize text-center">foto</th>
                                    <th class="text-capitalize text-center">harga</th>
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
                                                        <img class="img-preview img-fluid mb-3 col-sm-5 d-block" src="{{ asset('img/mobil/' . basename($item->foto)) }}" alt="Preview Image">
                                                        @else
                                                        <img class="img-preview img-fluid mb-3 col-md-6">
                                                        @endif
                                                        <input type="file" onchange="previewImage()" name="foto" id="foto" class="form-control" autocomplete="off" value="{{ old(basename($item->foto)) }}">
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
                                    <label class="col-form-label text-capitalize" for="nama">masukkan nama
                                        mobil:</label>
                                    <input class="form-control" name="nama" id="nama" type="text" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-capitalize" for="harga">masukkan
                                        harga:</label>
                                    <input class="form-control" type="number" name="harga" id="harga" required>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-capitalize" for="status">status:</label>
                                    <select class="form-select" name="status" id="status">
                                        <option value="" disabled selected>Pilih Status</option>
                                        <option value="tersedia">Tersedia</option>
                                        <option value="di sewa">Di Sewa</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label text-capitalize" for="deskripsi">masukkan
                                        deskripsi:</label>
                                    <textarea class="form-control" name="deskripsi" id="deksripsi" rows="4">

                                            </textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="foto" class="form-label">Masukkan Foto</label>
                                    <img class="img-preview img-fluid mb-3 col-md-6">
                                    <input type="file" onchange="previewImage()" name="foto" id="foto" class="form-control" autocomplete="off" />
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
        </div>
    </div>
    <!-- DOM / jQuery  Ends-->
</div>

{{-- preview image --}}
<script>
    function previewImage() {
        const photo = document.querySelector('#foto');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(photo.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }

</script>
@endsection
