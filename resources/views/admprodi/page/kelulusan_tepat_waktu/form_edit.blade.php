@extends('admprodi.layout.app')
@section('content')
    {{-- page header  --}}
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Kelulusan Tepat Waktu</h5>
                        <p class="m-b-0">Form Kelulusan Tepat Waktu</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"> <i class="fa fa-home"></i> </a>
                        </li>

                        <li class="breadcrumb-item"><a href="#!">Kelulusan Tepat Waktu</a>
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
                                    <h5>Form Kelulusan Tepat Waktu</h5>
                                    <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <form action="{{ route('update-kelulusan_tepatwaktu', $editData->id) }}" method="POST">
                                        @csrf
                                        @method('put')
                                        <div class="form-group">
                                            <label for="tahun_masuk">Tahun Masuk</label>
                                            <input type="text" class="form-control" id="tahun_masuk" name="tahun_masuk"
                                                value="{{ $editData->tahun_masuk }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="id_pt_unit">Id PT Unit</label>
                                            <input type="text" class="form-control" id="id_pt_unit" name="id_pt_unit"
                                                value="{{ $editData->id_pt_unit }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jml_mhs">Jumlah Mahasiswa Diterima</label>
                                            <input type="text" class="form-control" id="jml_mhs" name="jml_mhs"
                                                value="{{ $editData->jml_mhs }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="ts_6">Akhir TS-6</label>
                                            <input type="text" class="form-control" id="ts_6" name="ts_6"
                                                value="{{ $editData->ts_6 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="ts_5">Akhir TS-5</label>
                                            <input type="text" class="form-control" id="ts_5" name="ts_5"
                                                value="{{ $editData->ts_5 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="ts_4">Akhir TS-4</label>
                                            <input type="text" class="form-control" id="ts_4" name="ts_4"
                                                value="{{ $editData->ts_4 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="ts_3">Akhir TS-3</label>
                                            <input type="text" class="form-control" id="ts_3" name="ts_3"
                                                value="{{ $editData->ts_3 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="ts_2">Akhir TS-2</label>
                                            <input type="text" class="form-control" id="ts_2" name="ts_2"
                                                value="{{ $editData->ts_2 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="ts_1">Akhir TS-1</label>
                                            <input type="text" class="form-control" id="ts_1" name="ts_1"
                                                value="{{ $editData->ts_1 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="ts">Akhir TS</label>
                                            <input type="text" class="form-control" id="ts" name="ts"
                                                value="{{ $editData->ts }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jml_lulusan">Jumlah Lulusan s.d Akhir TS</label>
                                            <input type="text" class="form-control" id="jml_lulusan" name="jml_lulusan"
                                                value="{{ $editData->jml_lulusan }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="masa_studi">Rata-rata Masa Studi</label>
                                            <input type="text" class="form-control" id="masa_studi" name="masa_studi"
                                                value="{{ $editData->masa_studi }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="jml_mhs_aktif">Jumlah Mhs, Yang Masih Aktif</label>
                                            <input type="text" class="form-control" id="jml_mhs_aktif"
                                                name="jml_mhs_aktif" value="{{ $editData->jml_mhs_aktif }}">
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
