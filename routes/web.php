<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;







//data masyarakat dan petugas


//register dan login
Route::get('/daftar', [AuthController::class, 'register']);
Route::post('/daftar', [AuthController::class, 'daftar_masyarakat']);
Route::get('/tambah-petugas', [AuthController::class, 'tambah']);
Route::post('/tambah-petugas', [AuthController::class, 'daftar_petugas']);
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login',[AuthController::class,'proses_login']);

Route::get('/petugas/login',[PetugasController::class,'index']);
Route::post('/petugas/login',[PetugasController::class,'proses_login']);

Route::middleware(['cekpetugas'])->group(function () {

Route::get('/petugas/home',[PetugasController::class,'petugas_home']);
Route::get('/petugas/logout',[PetugasController::class,'logout']);
Route ::get('/petugas/tanggapan/{id}', [PetugasController::class, 'tanggapan']);
Route ::post('/petugas/tanggapan/{id}', [PetugasController::class, 'proses_tanggapan']);
}); 


Route::middleware(['auth'])->group(function () {
    Route ::get('/home', [PengaduanController::class, 'index']);
    Route::get('/isi_pengaduan',[PengaduanController::class, 'proses_isi_pengaduan']);
    Route::post('/isi_pengaduan', [PengaduanController::class, 'proses_tambah_pengaduan']);
    Route::get('/logout',[AuthController::class,'logout']);
    Route ::get('/data-masyarakat', [MasyarakatController::class, 'data_masyarakat']);
    Route ::get('/data-petugas', [PetugasController::class, 'data_petugas']);
    Route::get('/detail/{id}', [petugasController::class, 'detail_']);
    Route ::get('/hapus_pengaduan/{id}', [ PengaduanController::class,'hapus']);
    Route ::get('/detail_pengaduan/{id}', [PengaduanController::class, 'detail']);
    Route ::get('/Update/{id}', [PengaduanController::class, 'update']);
    Route ::post('/update/{id}', [PengaduanController::class, 'proses_update']);
 }); 


Route::get('/', function () {
    return view('welcome');
});