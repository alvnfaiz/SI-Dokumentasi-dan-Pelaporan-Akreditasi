@extends('kaprodi.layout.app')
@section('content')
    {{-- page header  --}}
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Rata-rata beban DTPR per semester, pada TS</h5>
                        <p class="m-b-0">Data Rata-rata beban DTPR</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>

                        <li class="breadcrumb-item"><a href="#!">Rata-rata beban DTPR</a>
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
                            <h5>Rata-rata beban DTPR</h5>

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
                                <div class="row">
                                    <a href="{{ route('bebandtpr-download') }}">
                                        <button class="btn btn-success">Download</button></a>
                                </div>
                                <table class="table table-bordered" style="align-content: center">
                                    <thead>
                                        <tr>
                                            <th scope="col" rowspan="2">
                                                No
                                            </th>
                                            <th scope="col" rowspan="2">
                                                Nama Dosen
                                            </th>
                                            <th scope="col" colspan="3" style="align-content: center">
                                                SKS Pengajaran Pada
                                            </th>
                                            <th scope="col" rowspan="2">
                                                SKS Penelitian
                                            </th>
                                            <th scope="col" rowspan="2">
                                                SKS Pengabdian Pada Masy
                                            </th>
                                            <th scope="col" colspan="2">
                                                SKS Manajemen
                                            </th>
                                            <th scope="col" rowspan="2">
                                                Id PT Unit
                                            </th>

                                        </tr>
                                        <tr>
                                            <th>
                                                PS Sendiri
                                            </th>
                                            <th>
                                                PS Lain, PT Sendiri
                                            </th>
                                            <th>
                                                PT Lain
                                            </th>
                                            <th>
                                                PT Sendiri
                                            </th>
                                            <th>
                                                PT Lain
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($data as $no => $item)
                                            <tr align="center">
                                                <td>{{ $no + 1 }}</td>
                                                <td>{{ $item->nama_dosen }}</td>
                                                <td>{{ $item->pgjrn_ps_sendiri }}</td>
                                                <td>{{ $item->pgjrn_ps_lain_pt_sendiri }}</td>
                                                <td>{{ $item->pgjrn_pt_lain }}</td>
                                                <td>{{ $item->sks_penelitian }}</td>
                                                <td>{{ $item->sks_pengabdian }}</td>
                                                <td>{{ $item->manajemen_pt_sendiri }}</td>
                                                <td>{{ $item->manajemen_pt_lain }}</td>
                                                <td>{{ $item->id_pt_unit }}</td>

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
