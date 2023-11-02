<?php

use App\Http\Controllers\AksesibilitasController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BebanDTRPController;
use App\Http\Controllers\BidangKerjaLulusanController;
use App\Http\Controllers\CalonMhsBaruController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IPKLulusanController;
use App\Http\Controllers\KelulusanTepatWaktuController;
use App\Http\Controllers\KepuasanPenggunaLulusanController;
use App\Http\Controllers\MasaTunguLulusanController;
use App\Http\Controllers\PendanaanController;
use App\Http\Controllers\PenelitianPengabdian;
use App\Http\Controllers\PPKMDariDTPRController;
use App\Http\Controllers\SaranaPrasaranaController;
use App\Http\Controllers\TenagaKependidikanController;
use App\Http\Controllers\JumlahTenagaKependidikanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::middleware(['auth'])->group(function () {
// });
//route login
Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

//route dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard'); //home

//Route PPKM
Route::get('/ppkmadmin', [PenelitianPengabdian::class, 'ppkmadmin'])->name('ppkmadmin'); //index
Route::get('/tambah-ppkm', [PenelitianPengabdian::class, 'create'])->name('tambah-ppkm'); //create
Route::post('/simpan-ppkm', [PenelitianPengabdian::class, 'store'])->name('simpan-ppkm'); //store
Route::delete('/hapus-ppkm/{id}', [PenelitianPengabdian::class, 'destroy'])->name('hapus-ppkm'); //destroy

//route Calon Mahasiswa Baru
Route::get('/mhs-baru', [CalonMhsBaruController::class, 'index'])->name('mhs-baru'); //index
Route::get('/tambah-cmb', [CalonMhsBaruController::class, 'create'])->name('tambah-cmb'); //create
Route::post('/simpan-cmb', [CalonMhsBaruController::class, 'store'])->name('simpan-cmb'); //store
Route::get('/edit-cmb/{id}', [CalonMhsBaruController::class, 'edit'])->name('edit-cmb'); //edit
Route::put('/update-cmb/{id}', [CalonMhsBaruController::class, 'update'])->name('update-cmb'); //update
Route::delete('/hapus-cmb/{id}', [CalonMhsBaruController::class, 'destroy'])->name('hapus-cmb'); //destroy
Route::get('/downloadcmb', [CalonMhsBaruController::class, 'download'])->name('downloadcmb'); //Download
Route::get('/mhs-download', [CalonMhsBaruController::class, 'download'])->name('mhs-download');
// Route::get('/siswa/export_excel', 'SiswaController@export_excel');


//Aksesibilitas
Route::get('/aksesibilitas', [AksesibilitasController::class, 'index'])->name('aksesibilitas'); //index
Route::get('/tambah-aksesibilitas', [AksesibilitasController::class, 'create'])->name('tambah-aksesibilitas'); //create
Route::post('/simpan-aksesibilitas', [AksesibilitasController::class, 'store'])->name('simpan-aksesibilitas'); //store
Route::get('/edit-aksesibilitas/{id}', [AksesibilitasController::class, 'edit'])->name('edit-aksesibilitas');
Route::put('/update-aksesibilitas/{id}', [AksesibilitasController::class, 'update'])->name('update-aksesibilitas');
Route::delete('/hapus-aksesibilitas/{id}', [AksesibilitasController::class, 'destroy'])->name('hapus-aksesibilitas'); //destroy

//Pendanaan
Route::get('/pendanaan', [PendanaanController::class, 'index'])->name('pendanaan'); //index
Route::get('/tambah-pendanaan', [PendanaanController::class, 'create'])->name('tambah-pendanaan'); //create
Route::post('/simpan-pendanaan', [PendanaanController::class, 'store'])->name('simpan-pendanaan'); //store
Route::get('/edit-pendanaan/{id}', [PendanaanController::class, 'edit'])->name('edit-pendanaan');
Route::put('/update-pendanaan/{id}', [PendanaanController::class, 'update'])->name('update-pendanaan');
Route::delete('/hapus-pendanaan/{id}', [PendanaanController::class, 'destroy'])->name('hapus-pendanaan'); //destroy

//Sarana Prasarana
Route::get('/sarana', [SaranaPrasaranaController::class, 'index'])->name('sarana'); //index
Route::get('/tambah-sarana', [SaranaPrasaranaController::class, 'create'])->name('tambah-sarana'); //create
Route::post('/simpan-sarana', [SaranaPrasaranaController::class, 'store'])->name('simpan-sarana'); //store
Route::get('/edit-sarana/{id}', [SaranaPrasaranaController::class, 'edit'])->name('edit-sarana');
Route::put('/update-sarana/{id}', [SaranaPrasaranaController::class, 'update'])->name('update-sarana');
Route::delete('/hapus-sarana/{id}', [SaranaPrasaranaController::class, 'destroy'])->name('hapus-sarana'); //destroy

//Tenaga Kependidikan
Route::get('/kependidikan', [TenagaKependidikanController::class, 'index'])->name('kependidikan'); //index
Route::get('/tambah-kependidikan', [TenagaKependidikanController::class, 'create'])->name('tambah-kependidikan'); //create
Route::post('/simpan-kependidikan', [TenagaKependidikanController::class, 'store'])->name('simpan-kependidikan'); //store
Route::get('/edit-kependidikan/{id}', [TenagaKependidikanController::class, 'edit'])->name('edit-kependidikan');
Route::put('/update-kependidikan/{id}', [TenagaKependidikanController::class, 'update'])->name('update-kependidikan');
Route::delete('/hapus-kependidikan/{id}', [TenagaKependidikanController::class, 'destroy'])->name('hapus-kependidikan'); //destroy

//IPK Lulusan
Route::get('/ipklulusan', [IPKLulusanController::class, 'index'])->name('ipklulusan'); //index
Route::get('/tambah-ipklulusan', [IPKLulusanController::class, 'create'])->name('tambah-ipklulusan'); //create
Route::post('/simpan-ipklulusan', [IPKLulusanController::class, 'store'])->name('simpan-ipklulusan'); //store
Route::get('/edit-ipklulusan/{id}', [IPKLulusanController::class, 'edit'])->name('edit-ipklulusan');
Route::put('/update-ipklulusan/{id}', [IPKLulusanController::class, 'update'])->name('update-ipklulusan');
Route::delete('/hapus-ipklulusan/{id}', [IPKLulusanController::class, 'destroy'])->name('hapus-ipklulusan'); //destroy

//Masa Tunggu Lulusan Bekerja
Route::get('/masatunggu', [MasaTunguLulusanController::class, 'index'])->name('masatunggu'); //index
Route::get('/tambah-masatunggu', [MasaTunguLulusanController::class, 'create'])->name('tambah-masatunggu'); //create
Route::post('/simpan-masatunggu', [MasaTunguLulusanController::class, 'store'])->name('simpan-masatunggu'); //store
Route::get('/edit-masatunggu/{id}', [MasaTunguLulusanController::class, 'edit'])->name('edit-masatunggu');
Route::put('/update-masatunggu/{id}', [MasaTunguLulusanController::class, 'update'])->name('update-masatunggu');
Route::delete('/hapus-masatunggu/{id}', [MasaTunguLulusanController::class, 'destroy'])->name('hapus-masatunggu'); //destroy

//Kesesuaian bidang kerja lulusan 
Route::get('/kerjalulusan', [BidangKerjaLulusanController::class, 'index'])->name('kerjalulusan'); //index
Route::get('/tambah-kerjalulusan', [BidangKerjaLulusanController::class, 'create'])->name('tambah-kerjalulusan'); //create
Route::post('/simpan-kerjalulusan', [BidangKerjaLulusanController::class, 'store'])->name('simpan-kerjalulusan'); //store
Route::get('/edit-kerjalulusan/{id}', [BidangKerjaLulusanController::class, 'edit'])->name('edit-kerjalulusan');
Route::put('/update-kerjalulusan/{id}', [BidangKerjaLulusanController::class, 'update'])->name('update-kerjalulusan');
Route::delete('/hapus-kerjalulusan/{id}', [BidangKerjaLulusanController::class, 'destroy'])->name('hapus-kerjalulusan'); //destroy

//Rata-Rata Beban DTPR Per Semester
Route::get('/bebandtpr', [BebanDTRPController::class, 'index'])->name('bebandtpr'); //index
Route::get('/tambah-bebandtpr', [BebanDTRPController::class, 'create'])->name('tambah-bebandtpr'); //create
Route::post('/simpan-bebandtpr', [BebanDTRPController::class, 'store'])->name('simpan-bebandtpr'); //store
Route::get('/edit-bebandtpr/{id}', [BebanDTRPController::class, 'edit'])->name('edit-bebandtpr');
Route::put('/update-bebandtpr/{id}', [BebanDTRPController::class, 'update'])->name('update-bebandtpr');
Route::delete('/hapus-bebandtpr/{id}', [BebanDTRPController::class, 'destroy'])->name('hapus-bebandtpr'); //destroy

//Kepuasan Pengguna Lulusan
Route::get('/kepuasan_pengguna', [KepuasanPenggunaLulusanController::class, 'index'])->name('kepuasan_pengguna'); //index
Route::get('/tambah-kepuasan_pengguna', [KepuasanPenggunaLulusanController::class, 'create'])->name('tambah-kepuasan_pengguna'); //create
Route::post('/simpan-kepuasan_pengguna', [KepuasanPenggunaLulusanController::class, 'store'])->name('simpan-kepuasan_pengguna'); //store
Route::get('/edit-kepuasan_pengguna/{id}', [KepuasanPenggunaLulusanController::class, 'edit'])->name('edit-kepuasan_pengguna');
Route::put('/update-kepuasan_pengguna/{id}', [KepuasanPenggunaLulusanController::class, 'update'])->name('update-kepuasan_pengguna');
Route::delete('/hapus-kepuasan_pengguna/{id}', [KepuasanPenggunaLulusanController::class, 'destroy'])->name('hapus-kepuasan_pengguna'); //destroy

//Penelitian dan Kegiatan Pengabdian kepada Masyarakat dari DTPR
Route::get('/ppkm_dtpr', [PPKMDariDTPRController::class, 'index'])->name('ppkm_dtpr'); //index
Route::get('/tambah-ppkm_dtpr', [PPKMDariDTPRController::class, 'create'])->name('tambah-ppkm_dtpr'); //create
Route::post('/simpan-ppkm_dtpr', [PPKMDariDTPRController::class, 'store'])->name('simpan-ppkm_dtpr'); //store
Route::get('/edit-ppkm_dtpr/{id}', [PPKMDariDTPRController::class, 'edit'])->name('edit-ppkm_dtpr');
Route::put('/update-ppkm_dtpr/{id}', [PPKMDariDTPRController::class, 'update'])->name('update-ppkm_dtpr');
Route::delete('/hapus-ppkm_dtpr/{id}', [PPKMDariDTPRController::class, 'destroy'])->name('hapus-ppkm_dtpr'); //destroy

//Kelulusan Tepat Waktu
Route::get('/kelulusan_tepatwaktu', [KelulusanTepatWaktuController::class, 'index'])->name('kelulusan_tepatwaktu'); //index
Route::get('/tambah-kelulusan_tepatwaktu', [KelulusanTepatWaktuController::class, 'create'])->name('tambah-kelulusan_tepatwaktu'); //create
Route::post('/simpan-kelulusan_tepatwaktu', [KelulusanTepatWaktuController::class, 'store'])->name('simpan-kelulusan_tepatwaktu'); //store
Route::get('/edit-kelulusan_tepatwaktu/{id}', [KelulusanTepatWaktuController::class, 'edit'])->name('edit-kelulusan_tepatwaktu');
Route::put('/update-kelulusan_tepatwaktu/{id}', [KelulusanTepatWaktuController::class, 'update'])->name('update-kelulusan_tepatwaktu');
Route::delete('/hapus-kelulusan_tepatwaktu/{id}', [KelulusanTepatWaktuController::class, 'destroy'])->name('hapus-kelulusan_tepatwaktu'); //destroy


Auth::routes();

//Route Jurusan
Route::middleware(['auth', 'user-role:jurusan'])->group(function () {
    Route::get('/home', [HomeController::class, 'jurusanHome'])->name('home');
    // Route::get('/dashboard/jurusan', [DashboardController::class, 'indexJurusan'])->name('dashboard/jurusan'); //home
});
// Kaprodi Route
Route::middleware(['auth', 'user-role:kaprodi'])->group(function () {
    //Home
    Route::get("/kaprodi-home", [HomeController::class, 'kaprodiHome'])->name('kaprodi-home');

    //route Calon Mahasiswa Baru
    Route::get('/kaprodi-mahasiswa', [CalonMhsBaruController::class, 'kaprodiIndex'])->name('kaprodi-mahasiswa'); //index

    //Aksesibilitas
    Route::get('/kaprodi-aksesibilitas', [AksesibilitasController::class, 'kaprodiIndex'])->name('kaprodi-aksesibilitas'); //index

    //Pendanaan
    Route::get('/kaprodi-sumberdana', [PendanaanController::class, 'kaprodiIndex'])->name('kaprodi-sumberdana'); //index

    //Sarana Prasarana
    Route::get('/kaprodi-saranaprasarana', [SaranaPrasaranaController::class, 'kaprodiIndex'])->name('kaprodi-saranaprasarana'); //index

    //Tenaga Kependidikan
    Route::get('/kaprodi-kependidikan', [TenagaKependidikanController::class, 'kaprodiIndex'])->name('kaprodi-kependidikan'); //index

    //IPK Lulusan
    Route::get('/kaprodi-ipklulusan', [IPKLulusanController::class, 'kaprodiIndex'])->name('kaprodi-ipklulusan'); //index

    //Masa Tunggu Lulusan Bekerja
    Route::get('/kaprodi-masatunggu', [MasaTunguLulusanController::class, 'kaprodiIndex'])->name('kaprodi-masatunggu'); //index

    //Kesesuaian bidang kerja lulusan 
    Route::get('/kaprodi-kerjalulusan', [BidangKerjaLulusanController::class, 'kaprodiIndex'])->name('kaprodi-kerjalulusan'); //index

    //Rata-Rata Beban DTPR Per Semester
    Route::get('/kaprodi-bebandtpr', [BebanDTRPController::class, 'kaprodiIndex'])->name('kaprodi-bebandtpr'); //index

    //Kepuasan Pengguna Lulusan
    Route::get('/kaprodi-kepuasan_pengguna', [KepuasanPenggunaLulusanController::class, 'kaprodiIndex'])->name('kaprodi-kepuasan_pengguna'); //index

    //Penelitian dan Kegiatan Pengabdian kepada Masyarakat dari DTPR
    Route::get('/kaprodi-ppkm_dtpr', [PPKMDariDTPRController::class, 'kaprodiIndex'])->name('kaprodi-ppkm_dtpr'); //index

    //Kelulusan Tepat Waktu
    Route::get('/kaprodi-kelulusan_tepatwaktu', [KelulusanTepatWaktuController::class, 'kaprodiIndex'])->name('kaprodi-kelulusan_tepatwaktu'); //index

});
//Adm Prodi route
Route::middleware(['auth', 'user-role:admprodi'])->group(function () {

    Route::get('/admprodi-home', [HomeController::class, 'admprodiHome'])->name('admprodi-home');

    //route Calon Mahasiswa Baru
    Route::get('/mhs-baru', [CalonMhsBaruController::class, 'index'])->name('mhs-baru'); //index
    Route::get('/tambah-cmb', [CalonMhsBaruController::class, 'create'])->name('tambah-cmb'); //create
    Route::post('/simpan-cmb', [CalonMhsBaruController::class, 'store'])->name('simpan-cmb'); //store
    Route::get('/edit-cmb/{id}', [CalonMhsBaruController::class, 'edit'])->name('edit-cmb'); //edit
    Route::put('/update-cmb/{id}', [CalonMhsBaruController::class, 'update'])->name('update-cmb'); //update
    Route::delete('/hapus-cmb/{id}', [CalonMhsBaruController::class, 'destroy'])->name('hapus-cmb'); //destroy

    //Aksesibilitas
    Route::get('/aksesibilitas', [AksesibilitasController::class, 'index'])->name('aksesibilitas'); //index
    Route::get('/tambah-aksesibilitas', [AksesibilitasController::class, 'create'])->name('tambah-aksesibilitas'); //create
    Route::post('/simpan-aksesibilitas', [AksesibilitasController::class, 'store'])->name('simpan-aksesibilitas'); //store
    Route::get('/edit-aksesibilitas/{id}', [AksesibilitasController::class, 'edit'])->name('edit-aksesibilitas');
    Route::put('/update-aksesibilitas/{id}', [AksesibilitasController::class, 'update'])->name('update-aksesibilitas');
    Route::delete('/hapus-aksesibilitas/{id}', [AksesibilitasController::class, 'destroy'])->name('hapus-aksesibilitas'); //destroy

    //Pendanaan
    Route::get('/pendanaan', [PendanaanController::class, 'index'])->name('pendanaan'); //index
    Route::get('/tambah-pendanaan', [PendanaanController::class, 'create'])->name('tambah-pendanaan'); //create
    Route::post('/simpan-pendanaan', [PendanaanController::class, 'store'])->name('simpan-pendanaan'); //store
    Route::get('/edit-pendanaan/{id}', [PendanaanController::class, 'edit'])->name('edit-pendanaan');
    Route::put('/update-pendanaan/{id}', [PendanaanController::class, 'update'])->name('update-pendanaan');
    Route::delete('/hapus-pendanaan/{id}', [PendanaanController::class, 'destroy'])->name('hapus-pendanaan'); //destroy

    //Sarana Prasarana
    Route::get('/sarana', [SaranaPrasaranaController::class, 'index'])->name('sarana'); //index
    Route::get('/tambah-sarana', [SaranaPrasaranaController::class, 'create'])->name('tambah-sarana'); //create
    Route::post('/simpan-sarana', [SaranaPrasaranaController::class, 'store'])->name('simpan-sarana'); //store
    Route::get('/edit-sarana/{id}', [SaranaPrasaranaController::class, 'edit'])->name('edit-sarana');
    Route::put('/update-sarana/{id}', [SaranaPrasaranaController::class, 'update'])->name('update-sarana');
    Route::delete('/hapus-sarana/{id}', [SaranaPrasaranaController::class, 'destroy'])->name('hapus-sarana'); //destroy

    //Tenaga Kependidikan
    Route::get('/kependidikan', [TenagaKependidikanController::class, 'index'])->name('kependidikan'); //index
    Route::get('/tambah-kependidikan', [TenagaKependidikanController::class, 'create'])->name('tambah-kependidikan'); //create
    Route::post('/simpan-kependidikan', [TenagaKependidikanController::class, 'store'])->name('simpan-kependidikan'); //store
    Route::get('/edit-kependidikan/{id}', [TenagaKependidikanController::class, 'edit'])->name('edit-kependidikan');
    Route::put('/update-kependidikan/{id}', [TenagaKependidikanController::class, 'update'])->name('update-kependidikan');
    Route::delete('/hapus-kependidikan/{id}', [TenagaKependidikanController::class, 'destroy'])->name('hapus-kependidikan'); //destroy


    Route::get('/kependidikan/{id}/tambah', [JumlahTenagaKependidikanController::class, 'create'])->name('tambahjmlkependidikan'); //create
    Route::post('/kependidikan/{id}/simpan', [JumlahTenagaKependidikanController::class, 'store'])->name('simpanjmlkependidikan'); //store
    Route::get('/kependidikan/{id}/edit', [JumlahTenagaKependidikanController::class, 'edit'])->name('editjmlkependidikan');
    Route::put('/kependidikan/{id}/update', [JumlahTenagaKependidikanController::class, 'update'])->name('updatejmlkependidikan');
    Route::delete('/kependidikan/{id}/hapus', [JumlahTenagaKependidikanController::class, 'destroy'])->name('hapusjmlkependidikan'); //destroy

    //IPK Lulusan
    Route::get('/ipklulusan', [IPKLulusanController::class, 'index'])->name('ipklulusan'); //index
    Route::get('/tambah-ipklulusan', [IPKLulusanController::class, 'create'])->name('tambah-ipklulusan'); //create
    Route::post('/simpan-ipklulusan', [IPKLulusanController::class, 'store'])->name('simpan-ipklulusan'); //store
    Route::get('/edit-ipklulusan/{id}', [IPKLulusanController::class, 'edit'])->name('edit-ipklulusan');
    Route::put('/update-ipklulusan/{id}', [IPKLulusanController::class, 'update'])->name('update-ipklulusan');
    Route::delete('/hapus-ipklulusan/{id}', [IPKLulusanController::class, 'destroy'])->name('hapus-ipklulusan'); //destroy

    //Masa Tunggu Lulusan Bekerja
    Route::get('/masatunggu', [MasaTunguLulusanController::class, 'index'])->name('masatunggu'); //index
    Route::get('/tambah-masatunggu', [MasaTunguLulusanController::class, 'create'])->name('tambah-masatunggu'); //create
    Route::post('/simpan-masatunggu', [MasaTunguLulusanController::class, 'store'])->name('simpan-masatunggu'); //store
    Route::get('/edit-masatunggu/{id}', [MasaTunguLulusanController::class, 'edit'])->name('edit-masatunggu');
    Route::put('/update-masatunggu/{id}', [MasaTunguLulusanController::class, 'update'])->name('update-masatunggu');
    Route::delete('/hapus-masatunggu/{id}', [MasaTunguLulusanController::class, 'destroy'])->name('hapus-masatunggu'); //destroy

    //Kesesuaian bidang kerja lulusan 
    Route::get('/kerjalulusan', [BidangKerjaLulusanController::class, 'index'])->name('kerjalulusan'); //index
    Route::get('/tambah-kerjalulusan', [BidangKerjaLulusanController::class, 'create'])->name('tambah-kerjalulusan'); //create
    Route::post('/simpan-kerjalulusan', [BidangKerjaLulusanController::class, 'store'])->name('simpan-kerjalulusan'); //store
    Route::get('/edit-kerjalulusan/{id}', [BidangKerjaLulusanController::class, 'edit'])->name('edit-kerjalulusan');
    Route::put('/update-kerjalulusan/{id}', [BidangKerjaLulusanController::class, 'update'])->name('update-kerjalulusan');
    Route::delete('/hapus-kerjalulusan/{id}', [BidangKerjaLulusanController::class, 'destroy'])->name('hapus-kerjalulusan'); //destroy

    //Rata-Rata Beban DTPR Per Semester
    Route::get('/bebandtpr', [BebanDTRPController::class, 'index'])->name('bebandtpr'); //index
    Route::get('/tambah-bebandtpr', [BebanDTRPController::class, 'create'])->name('tambah-bebandtpr'); //create
    Route::post('/simpan-bebandtpr', [BebanDTRPController::class, 'store'])->name('simpan-bebandtpr'); //store
    Route::get('/edit-bebandtpr/{id}', [BebanDTRPController::class, 'edit'])->name('edit-bebandtpr');
    Route::put('/update-bebandtpr/{id}', [BebanDTRPController::class, 'update'])->name('update-bebandtpr');
    Route::delete('/hapus-bebandtpr/{id}', [BebanDTRPController::class, 'destroy'])->name('hapus-bebandtpr'); //destroy

    //Kepuasan Pengguna Lulusan
    Route::get('/kepuasan_pengguna', [KepuasanPenggunaLulusanController::class, 'index'])->name('kepuasan_pengguna'); //index
    Route::get('/tambah-kepuasan_pengguna', [KepuasanPenggunaLulusanController::class, 'create'])->name('tambah-kepuasan_pengguna'); //create
    Route::post('/simpan-kepuasan_pengguna', [KepuasanPenggunaLulusanController::class, 'store'])->name('simpan-kepuasan_pengguna'); //store
    Route::get('/edit-kepuasan_pengguna/{id}', [KepuasanPenggunaLulusanController::class, 'edit'])->name('edit-kepuasan_pengguna');
    Route::put('/update-kepuasan_pengguna/{id}', [KepuasanPenggunaLulusanController::class, 'update'])->name('update-kepuasan_pengguna');
    Route::delete('/hapus-kepuasan_pengguna/{id}', [KepuasanPenggunaLulusanController::class, 'destroy'])->name('hapus-kepuasan_pengguna'); //destroy

    //Penelitian dan Kegiatan Pengabdian kepada Masyarakat dari DTPR
    Route::get('/ppkm_dtpr', [PPKMDariDTPRController::class, 'index'])->name('ppkm_dtpr'); //index
    Route::get('/tambah-ppkm_dtpr', [PPKMDariDTPRController::class, 'create'])->name('tambah-ppkm_dtpr'); //create
    Route::post('/simpan-ppkm_dtpr', [PPKMDariDTPRController::class, 'store'])->name('simpan-ppkm_dtpr'); //store
    Route::get('/edit-ppkm_dtpr/{id}', [PPKMDariDTPRController::class, 'edit'])->name('edit-ppkm_dtpr');
    Route::put('/update-ppkm_dtpr/{id}', [PPKMDariDTPRController::class, 'update'])->name('update-ppkm_dtpr');
    Route::delete('/hapus-ppkm_dtpr/{id}', [PPKMDariDTPRController::class, 'destroy'])->name('hapus-ppkm_dtpr'); //destroy

    //Kelulusan Tepat Waktu
    Route::get('/kelulusan_tepatwaktu', [KelulusanTepatWaktuController::class, 'index'])->name('kelulusan_tepatwaktu'); //index
    Route::get('/tambah-kelulusan_tepatwaktu', [KelulusanTepatWaktuController::class, 'create'])->name('tambah-kelulusan_tepatwaktu'); //create
    Route::post('/simpan-kelulusan_tepatwaktu', [KelulusanTepatWaktuController::class, 'store'])->name('simpan-kelulusan_tepatwaktu'); //store
    Route::get('/edit-kelulusan_tepatwaktu/{id}', [KelulusanTepatWaktuController::class, 'edit'])->name('edit-kelulusan_tepatwaktu');
    Route::put('/update-kelulusan_tepatwaktu/{id}', [KelulusanTepatWaktuController::class, 'update'])->name('update-kelulusan_tepatwaktu');
    Route::delete('/hapus-kelulusan_tepatwaktu/{id}', [KelulusanTepatWaktuController::class, 'destroy'])->name('hapus-kelulusan_tepatwaktu'); //destroy

});
// Admin Route
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    // Route::get("/admin/home", [HomeController::class, 'adminHome'])->name('home.admin');
    // Route::get('/dashboard', [DashboardController::class, 'indexAdmin'])->name('dashboard'); //home
    Route::get('/dashboard', [HomeController::class, 'adminHome'])->name('dashboard');
    //Dosen


    //Route PPKM
    Route::get('/ppkmadmin', [PenelitianPengabdian::class, 'ppkmadmin'])->name('ppkmadmin'); //index
    Route::get('/tambah-ppkm', [PenelitianPengabdian::class, 'create'])->name('tambah-ppkm'); //create
    Route::post('/simpan-ppkm', [PenelitianPengabdian::class, 'store'])->name('simpan-ppkm'); //store
    Route::delete('/hapus-ppkm/{id}', [PenelitianPengabdian::class, 'destroy'])->name('hapus-ppkm'); //destroy

    //route Calon Mahasiswa Baru
    Route::get('/mhs-baru', [CalonMhsBaruController::class, 'index'])->name('mhs-baru'); //index
    Route::get('/tambah-cmb', [CalonMhsBaruController::class, 'create'])->name('tambah-cmb'); //create
    Route::post('/simpan-cmb', [CalonMhsBaruController::class, 'store'])->name('simpan-cmb'); //store
    Route::get('/edit-cmb/{id}', [CalonMhsBaruController::class, 'edit'])->name('edit-cmb'); //edit
    Route::put('/update-cmb/{id}', [CalonMhsBaruController::class, 'update'])->name('update-cmb'); //update
    Route::delete('/hapus-cmb/{id}', [CalonMhsBaruController::class, 'destroy'])->name('hapus-cmb'); //destroy

    //Aksesibilitas
    Route::get('/aksesibilitas', [AksesibilitasController::class, 'index'])->name('aksesibilitas'); //index
    Route::get('/tambah-aksesibilitas', [AksesibilitasController::class, 'create'])->name('tambah-aksesibilitas'); //create
    Route::post('/simpan-aksesibilitas', [AksesibilitasController::class, 'store'])->name('simpan-aksesibilitas'); //store
    Route::get('/edit-aksesibilitas/{id}', [AksesibilitasController::class, 'edit'])->name('edit-aksesibilitas');
    Route::put('/update-aksesibilitas/{id}', [AksesibilitasController::class, 'update'])->name('update-aksesibilitas');
    Route::delete('/hapus-aksesibilitas/{id}', [AksesibilitasController::class, 'destroy'])->name('hapus-aksesibilitas'); //destroy

    //Pendanaan
    Route::get('/pendanaan', [PendanaanController::class, 'index'])->name('pendanaan'); //index
    Route::get('/tambah-pendanaan', [PendanaanController::class, 'create'])->name('tambah-pendanaan'); //create
    Route::post('/simpan-pendanaan', [PendanaanController::class, 'store'])->name('simpan-pendanaan'); //store
    Route::get('/edit-pendanaan/{id}', [PendanaanController::class, 'edit'])->name('edit-pendanaan');
    Route::put('/update-pendanaan/{id}', [PendanaanController::class, 'update'])->name('update-pendanaan');
    Route::delete('/hapus-pendanaan/{id}', [PendanaanController::class, 'destroy'])->name('hapus-pendanaan'); //destroy

    //Sarana Prasarana
    Route::get('/sarana', [SaranaPrasaranaController::class, 'index'])->name('sarana'); //index
    Route::get('/tambah-sarana', [SaranaPrasaranaController::class, 'create'])->name('tambah-sarana'); //create
    Route::post('/simpan-sarana', [SaranaPrasaranaController::class, 'store'])->name('simpan-sarana'); //store
    Route::get('/edit-sarana/{id}', [SaranaPrasaranaController::class, 'edit'])->name('edit-sarana');
    Route::put('/update-sarana/{id}', [SaranaPrasaranaController::class, 'update'])->name('update-sarana');
    Route::delete('/hapus-sarana/{id}', [SaranaPrasaranaController::class, 'destroy'])->name('hapus-sarana'); //destroy

    //Tenaga Kependidikan
    Route::get('/kependidikan', [TenagaKependidikanController::class, 'index'])->name('kependidikan'); //index
    Route::get('/tambah-kependidikan', [TenagaKependidikanController::class, 'create'])->name('tambah-kependidikan'); //create
    Route::post('/simpan-kependidikan', [TenagaKependidikanController::class, 'store'])->name('simpan-kependidikan'); //store
    Route::get('/edit-kependidikan/{id}', [TenagaKependidikanController::class, 'edit'])->name('edit-kependidikan');
    Route::put('/update-kependidikan/{id}', [TenagaKependidikanController::class, 'update'])->name('update-kependidikan');
    Route::delete('/hapus-kependidikan/{id}', [TenagaKependidikanController::class, 'destroy'])->name('hapus-kependidikan'); //destroy


    Route::get('/kependidikan/{id}/tambah', [JumlahTenagaKependidikanController::class, 'create'])->name('tambahjmlkependidikan'); //create
    Route::post('/kependidikan/{id}/simpan', [JumlahTenagaKependidikanController::class, 'store'])->name('simpanjmlkependidikan'); //store
    Route::get('/kependidikan/{id}/edit', [JumlahTenagaKependidikanController::class, 'edit'])->name('editjmlkependidikan');
    Route::put('/kependidikan/{id}/update', [JumlahTenagaKependidikanController::class, 'update'])->name('updatejmlkependidikan');
    Route::delete('/kependidikan/{id}/hapus', [JumlahTenagaKependidikanController::class, 'destroy'])->name('hapusjmlkependidikan'); //destroy

    //IPK Lulusan
    Route::get('/ipklulusan', [IPKLulusanController::class, 'index'])->name('ipklulusan'); //index
    Route::get('/tambah-ipklulusan', [IPKLulusanController::class, 'create'])->name('tambah-ipklulusan'); //create
    Route::post('/simpan-ipklulusan', [IPKLulusanController::class, 'store'])->name('simpan-ipklulusan'); //store
    Route::get('/edit-ipklulusan/{id}', [IPKLulusanController::class, 'edit'])->name('edit-ipklulusan');
    Route::put('/update-ipklulusan/{id}', [IPKLulusanController::class, 'update'])->name('update-ipklulusan');
    Route::delete('/hapus-ipklulusan/{id}', [IPKLulusanController::class, 'destroy'])->name('hapus-ipklulusan'); //destroy

    //Masa Tunggu Lulusan Bekerja
    Route::get('/masatunggu', [MasaTunguLulusanController::class, 'index'])->name('masatunggu'); //index
    Route::get('/tambah-masatunggu', [MasaTunguLulusanController::class, 'create'])->name('tambah-masatunggu'); //create
    Route::post('/simpan-masatunggu', [MasaTunguLulusanController::class, 'store'])->name('simpan-masatunggu'); //store
    Route::get('/edit-masatunggu/{id}', [MasaTunguLulusanController::class, 'edit'])->name('edit-masatunggu');
    Route::put('/update-masatunggu/{id}', [MasaTunguLulusanController::class, 'update'])->name('update-masatunggu');
    Route::delete('/hapus-masatunggu/{id}', [MasaTunguLulusanController::class, 'destroy'])->name('hapus-masatunggu'); //destroy

    //Kesesuaian bidang kerja lulusan 
    Route::get('/kerjalulusan', [BidangKerjaLulusanController::class, 'index'])->name('kerjalulusan'); //index
    Route::get('/tambah-kerjalulusan', [BidangKerjaLulusanController::class, 'create'])->name('tambah-kerjalulusan'); //create
    Route::post('/simpan-kerjalulusan', [BidangKerjaLulusanController::class, 'store'])->name('simpan-kerjalulusan'); //store
    Route::get('/edit-kerjalulusan/{id}', [BidangKerjaLulusanController::class, 'edit'])->name('edit-kerjalulusan');
    Route::put('/update-kerjalulusan/{id}', [BidangKerjaLulusanController::class, 'update'])->name('update-kerjalulusan');
    Route::delete('/hapus-kerjalulusan/{id}', [BidangKerjaLulusanController::class, 'destroy'])->name('hapus-kerjalulusan'); //destroy

    //Rata-Rata Beban DTPR Per Semester
    Route::get('/bebandtpr', [BebanDTRPController::class, 'index'])->name('bebandtpr'); //index
    Route::get('/tambah-bebandtpr', [BebanDTRPController::class, 'create'])->name('tambah-bebandtpr'); //create
    Route::post('/simpan-bebandtpr', [BebanDTRPController::class, 'store'])->name('simpan-bebandtpr'); //store
    Route::get('/edit-bebandtpr/{id}', [BebanDTRPController::class, 'edit'])->name('edit-bebandtpr');
    Route::put('/update-bebandtpr/{id}', [BebanDTRPController::class, 'update'])->name('update-bebandtpr');
    Route::delete('/hapus-bebandtpr/{id}', [BebanDTRPController::class, 'destroy'])->name('hapus-bebandtpr'); //destroy

    //Kepuasan Pengguna Lulusan
    Route::get('/kepuasan_pengguna', [KepuasanPenggunaLulusanController::class, 'index'])->name('kepuasan_pengguna'); //index
    Route::get('/tambah-kepuasan_pengguna', [KepuasanPenggunaLulusanController::class, 'create'])->name('tambah-kepuasan_pengguna'); //create
    Route::post('/simpan-kepuasan_pengguna', [KepuasanPenggunaLulusanController::class, 'store'])->name('simpan-kepuasan_pengguna'); //store
    Route::get('/edit-kepuasan_pengguna/{id}', [KepuasanPenggunaLulusanController::class, 'edit'])->name('edit-kepuasan_pengguna');
    Route::put('/update-kepuasan_pengguna/{id}', [KepuasanPenggunaLulusanController::class, 'update'])->name('update-kepuasan_pengguna');
    Route::delete('/hapus-kepuasan_pengguna/{id}', [KepuasanPenggunaLulusanController::class, 'destroy'])->name('hapus-kepuasan_pengguna'); //destroy

    //Penelitian dan Kegiatan Pengabdian kepada Masyarakat dari DTPR
    Route::get('/ppkm_dtpr', [PPKMDariDTPRController::class, 'index'])->name('ppkm_dtpr'); //index
    Route::get('/tambah-ppkm_dtpr', [PPKMDariDTPRController::class, 'create'])->name('tambah-ppkm_dtpr'); //create
    Route::post('/simpan-ppkm_dtpr', [PPKMDariDTPRController::class, 'store'])->name('simpan-ppkm_dtpr'); //store
    Route::get('/edit-ppkm_dtpr/{id}', [PPKMDariDTPRController::class, 'edit'])->name('edit-ppkm_dtpr');
    Route::put('/update-ppkm_dtpr/{id}', [PPKMDariDTPRController::class, 'update'])->name('update-ppkm_dtpr');
    Route::delete('/hapus-ppkm_dtpr/{id}', [PPKMDariDTPRController::class, 'destroy'])->name('hapus-ppkm_dtpr'); //destroy

    //Kelulusan Tepat Waktu
    Route::get('/kelulusan_tepatwaktu', [KelulusanTepatWaktuController::class, 'index'])->name('kelulusan_tepatwaktu'); //index
    Route::get('/tambah-kelulusan_tepatwaktu', [KelulusanTepatWaktuController::class, 'create'])->name('tambah-kelulusan_tepatwaktu'); //create
    Route::post('/simpan-kelulusan_tepatwaktu', [KelulusanTepatWaktuController::class, 'store'])->name('simpan-kelulusan_tepatwaktu'); //store
    Route::get('/edit-kelulusan_tepatwaktu/{id}', [KelulusanTepatWaktuController::class, 'edit'])->name('edit-kelulusan_tepatwaktu');
    Route::put('/update-kelulusan_tepatwaktu/{id}', [KelulusanTepatWaktuController::class, 'update'])->name('update-kelulusan_tepatwaktu');
    Route::delete('/hapus-kelulusan_tepatwaktu/{id}', [KelulusanTepatWaktuController::class, 'destroy'])->name('hapus-kelulusan_tepatwaktu'); //destroy

});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
