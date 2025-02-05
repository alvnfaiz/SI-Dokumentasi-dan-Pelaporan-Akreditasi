@extends('admprodi.layout.app')
@section('content')
    {{-- page header  --}}
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Rata-rata Masa Tunggu Lulusan untuk Bekerja Pertama Kali</h5>
                        <p class="m-b-0">Form Rata-rata Masa Tunggu Lulusan untuk Bekerja Pertama Kali</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>

                        <li class="breadcrumb-item"><a href="#!">Rata-rata Masa Tunggu Lulusan untuk Bekerja Pertama
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
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Form Rata-rata Masa Tunggu Lulusan untuk Bekerja Pertama Kali</h5>
                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <form action="{{ route('update-masatunggu', $editData->id) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="tahun_lulus">Tahun Lulus</label>
                                            <input type="text" class="form-control" id="tahun_lulus" name="tahun_lulus"
                                                value="{{ $editData->tahun_lulus }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jumlah_lulusan">Jumlah Lulusan</label>
                                            <input type="text" class="form-control" id="jumlah_lulusan"
                                                name="jumlah_lulusan" value="{{ $editData->jumlah_lulusan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="lulusan_terlacak">Jumlah Lulusan Yang Terlacak</label>
                                            <input type="text" class="form-control" id="lulusan_terlacak"
                                                name="lulusan_terlacak" value="{{ $editData->lulusan_terlacak }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="waktu_tunggu">Rata-rata Waktu Tunggu (Bulan)</label>
                                            <input type="text" class="form-control" id="waktu_tunggu" name="waktu_tunggu"
                                                value="{{ $editData->waktu_tunggu }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="id_pt_unit">Id PT Unit</label>
                                            {{-- <input type="text" class="form-control" id="id_pt_unit" name="id_pt_unit"
                                                value="{{ $editData->id_pt_unit }}"> --}}
                                            <select name="id_pt_unit" class="form-control">
                                                <option value="7">P3M</option>
                                                <option value="6">AKT</option>
                                                <option value="5">D3 MI</option>
                                                <option value="4">D4 TRPL</option>
                                                <option value="3">JUR.TI</option>
                                                <option value="2">SPM</option>
                                                <option value="1">PNP</option>
                                                {{-- <script>
                                                    document.getElementById('id_pt_unit').value = "{{ $editData->id_pt_unit }}";
                                                </script> --}}
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
