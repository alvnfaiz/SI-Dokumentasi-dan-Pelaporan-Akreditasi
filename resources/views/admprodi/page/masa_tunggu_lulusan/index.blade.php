@extends('admprodi.layout.app')
@section('content')
    {{-- page header  --}}
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Rata-rata Masa Tunggu Lulusan untuk Bekerja Pertama Kali</h5>
                        <p class="m-b-0">Data Rata-rata Masa tunggu Lulusan untuk Bekerja Pertama Kali</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>

                        <li class="breadcrumb-item"><a href="#!">Rata-rata Masa tunggu Lulusan untuk Bekerja Pertama
                                Kali</a>
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
                    <div class="card">
                        <div class="card-header">
                            <h5>Rata-rata Masa tunggu Lulusan untuk Bekerja Pertama Kali</h5>
                            <a href="{{ route('tambah-masatunggu') }}">
                                <span>Tambah data <code>disini</code> </span>
                            </a>

                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                    <li><i class="fa fa-window-maximize full-card"></i></li>
                                    <li><i class="fa fa-minus minimize-card"></i></li>
                                    <li><i class="fa fa-refresh reload-card"></i></li>

                                </ul>
                            </div>
                        </div>
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr style="text-align-last: center">
                                            <th scope="col">
                                                Tahun Lulus
                                            </th>
                                            <th scope="col">
                                                Jumlah Lulusan
                                            </th>
                                            <th scope="col">
                                                Jumlah Lulusan Yang Terlacak
                                            </th>
                                            <th scope="col">
                                                Rata-rata Waktu Tunggu (Bulan)
                                            </th>
                                            <th scope="col">
                                                Id PT_Unit
                                            </th>
                                            <th scope="col">
                                                Keterangan
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $no => $item)
                                            <tr align="center">
                                                {{-- <td>{{ $no + 1 }}</td> --}}
                                                <td>{{ $item->tahun_lulus }}</td>
                                                <td>{{ $item->jumlah_lulusan }}</td>
                                                <td>{{ $item->lulusan_terlacak }}</td>
                                                <td>{{ $item->waktu_tunggu }}</td>
                                                <td>{{ $item->id_pt_unit }}</td>

                                                <td>

                                                    <a href="{{ route('edit-masatunggu', ['id' => $item->id]) }}"
                                                        style="margin-right: 7px">
                                                        Edit
                                                    </a>

                                                    <a href="{{ route('hapus-masatunggu', ['id' => $item->id]) }}"
                                                        onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">
                                                        Hapus
                                                    </a>
                                                    <form id="delete-form-{{ $item->id }}"
                                                        action="{{ route('hapus-masatunggu', ['id' => $item->id]) }}"
                                                        method="POST" style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
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
