@extends('admin.layout.main')
@section('title', 'Data Mobil - ')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Data User</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../dashboard.html">Home</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">User</li>
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
                <!-- Bookmark Ends-->
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
                    <a href="" data-bs-toggle="modal" data-bs-target="#Add" class="btn btn-primary">Tambah Data</a>
                </div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show mt-2">
<<<<<<< HEAD



                        <?php

                    $nomer = 1;

                    ?>

=======
                        <?php $nomer = 1; ?>
>>>>>>> 88085088d2c1185de040867e53f7c58179fd3dcc
                        @foreach($errors->all() as $error)
                        <li>{{ $nomer++ }}. {{ $error }}</li>
                        @endforeach
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="display" id="advance-1">
                            <thead>
                                <tr>
<<<<<<< HEAD
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $data )


                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Edit{{ $data->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Delete{{ $data->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
=======
                                    <th class="text-capitalize text-center">ID</th>
                                    <th class="text-capitalize text-center">Name</th>
                                    <th class="text-capitalize text-center">Email</th>
                                    <th class="text-capitalize text-center">Email Verified At</th>
                                    <th class="text-capitalize text-center">Password</th>
                                    <th class="text-capitalize text-center">Role</th>
                                    <th class="text-capitalize text-center">Remember Token</th>
                                    <th class="text-capitalize text-center">Created At</th>
                                    <th class="text-capitalize text-center">Updated At</th>
                                    <th class="text-capitalize text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataUsers as $user)
                                <tr>
                                    <td class="text-center">{{ $user->id }}</td>
                                    <td class="text-center">{{ $user->name }}</td>
                                    <td class="text-center">{{ $user->email }}</td>
                                    <td class="text-center">{{ $user->email_verified_at }}</td>
                                    <td class="text-center">{{ $user->password }}</td>
                                    <td class="text-center">{{ $user->role }}</td>
                                    <td class="text-center">{{ $user->remember_token }}</td>
                                    <td class="text-center">{{ $user->created_at }}</td>
                                    <td class="text-center">{{ $user->updated_at }}</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Edit{{ $user->id }}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#Delete{{ $user->id }}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
>>>>>>> 88085088d2c1185de040867e53f7c58179fd3dcc
                                        </div>
                                    </td>
                                </tr>
                                {{-- Edit Modal --}}
<<<<<<< HEAD
                                <div class="modal fade" id="Edit{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
                                <div class="modal fade" id="Edit{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> 88085088d2c1185de040867e53f7c58179fd3dcc
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit User</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
<<<<<<< HEAD
                                            <form action="/data-user/{{ $data->id }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Name</label>
                                                        <input class="form-control" id="recipient-name" name="name" type="text" value="{{ $data->name }}" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Email</label>
                                                        <input class="form-control" id="recipient-name" name="email" type="email" value="{{ $data->email }}" />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Password</label>
                                                        <input class="form-control" id="recipient-name" name="password" type="password" />
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="recipient-name">Password</label>
                                                        <input class="form-control" id="recipient-name" name="repassword" type="password" />
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
=======
                                            <div class="modal-body">
                                                <form action="{{ route('data-users.update', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <!-- Masukkan field yang ingin diubah -->
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="name">Name:</label>
                                                        <input class="form-control" id="name" name="name" type="text" value="{{ $user->name }}" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="email">Email:</label>
                                                        <input class="form-control" id="email" name="email" type="email" value="{{ $user->email }}" />
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="password">Password:</label>
                                                        <input class="form-control" id="password" name="password" type="password" placeholder="Leave blank to keep current password" />
                                                    </div>
                                                    <!-- Tambahkan field lainnya yang ingin diubah -->
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                                        <button class="btn btn-primary" type="submit">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
>>>>>>> 88085088d2c1185de040867e53f7c58179fd3dcc
                                        </div>
                                    </div>
                                </div>


                                {{-- End Modal --}}
                                {{-- Delete Modal --}}
<<<<<<< HEAD
                                <div class="modal fade" id="Delete{{ $data->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
=======
                                <div class="modal fade" id="Delete{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
>>>>>>> 88085088d2c1185de040867e53f7c58179fd3dcc
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Delete User</h5>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
<<<<<<< HEAD
                                                <p>Anda Yakin Akan Menghapus {{ $data->name }} ?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">
                                                    Close
                                                </button>
                                                <form action="/data-user/{{ $data->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-primary" type="submit">
                                                        Ok
                                                    </button>
=======
                                                <p>Anda Yakin Akan Menghapus {{ $user->name }}?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                                <form id="delete-form-{{ $user->id }}" action="{{ route('data-users.destroy', $user->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus pengguna ini?')">Ya, Hapus</button>
>>>>>>> 88085088d2c1185de040867e53f7c58179fd3dcc
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<<<<<<< HEAD
=======

>>>>>>> 88085088d2c1185de040867e53f7c58179fd3dcc
                                {{-- End Modal --}}
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Add Modal --}}
                <div class="modal fade" id="Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Add User</h5>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
<<<<<<< HEAD
                            <form action="/data-user" method="post">
                                @csrf
                                @method('POST')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="col-form-label" for="recipient-name">Name</label>
                                        <input class="form-control" id="recipient-name" name="name" type="text" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="recipient-name">Email</label>
                                        <input class="form-control" id="recipient-name" name="email" type="email" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label" for="recipient-name">Password</label>
                                        <input class="form-control" id="recipient-name" name="password" type="password" />
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label" for="recipient-name">Password</label>
                                        <input class="form-control" id="recipient-name" name="repassword" type="password" />
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
=======
                            <div class="modal-body">
                                <form action="{{ route('data-users.store') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="col-form-label" for="name">Name:</label>
                                        <input class="form-control" id="name" name="name" type="text" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="email">Email:</label>
                                        <input class="form-control" id="email" name="email" type="email" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="password">Password:</label>
                                        <input class="form-control" id="password" name="password" type="password" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="role">Role:</label>
                                        <input class="form-control" id="role" name="role" type="text" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="email_verified_at">Email Verified At:</label>
                                        <input class="form-control" id="email_verified_at" name="email_verified_at" type="datetime" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="remember_token">Remember Token:</label>
                                        <input class="form-control" id="remember_token" name="remember_token" type="text" />
                                    </div>
                                    <!-- Tambahkan bidang lainnya sesuai dengan kebutuhan -->
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                        <button class="btn btn-primary" type="submit">Save</button>
                                    </div>
                                </form>
                            </div>
>>>>>>> 88085088d2c1185de040867e53f7c58179fd3dcc
                        </div>
                    </div>
                </div>
                {{-- End Modal --}}
            </div>
        </div>
        <!-- DOM / jQuery  Ends-->
    </div>
</div>
@endsection