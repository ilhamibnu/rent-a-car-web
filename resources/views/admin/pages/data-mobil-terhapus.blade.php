@extends('admin.layout.main')
@section('title', 'Data Mobil Terhapus - ')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Data Mobil Terhapus</h3>
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
                                            <a href="/data-mobil-terhapus/restore/{{ $item->id }}" class="btn btn-primary btn-sm ">Restore</a>
                                            <form action="/data-mobil-terhapus/delete/{{ $item->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

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
