@extends('admprodi.layout.app')
@section('content')
    {{-- page header  --}}
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Daftar Pengguna</h5>
                        <p class="m-b-0">Form Pengguna</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>

                        <li class="breadcrumb-item"><a href="#!">Daftar Pengguna</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">
                    <!-- Basic table card start -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Form Pengguna</h5>
                                    {{-- <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span> --}}
                                </div>
                                <div class="card-block">
                                    <form action="{{ route('update-users', $editData->id) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="name">Username</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ $editData->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ $editData->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control" id="password" name="password"
                                                value="{{ $editData->password }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="role">Role</label>

                                            <select name="role" class="form-control">
                                                <option value="3">Admin</option>
                                                <option value="2">Adm Prodi</option>
                                                <option value="1">Kaprodi</option>
                                                <option value="0">Jurusan</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button class="btn btn-light" onclick="window.history.back()">Cancel</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic table card end -->
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->

    <div id="styleSelector">

    </div>
    </div>
@endsection
