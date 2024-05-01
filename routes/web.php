<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisKendaraanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('barang/index');
});
Route::resource('barang',BarangController::class);
Route::resource('jenis_kendaraan',JenisKendaraanController::class);
Route::resource('kendaraan',KendaraanController::class);
Route::resource('pemesan',PemesanController::class);
Route::resource('pegawai',PegawaiController::class);
Route::resource('invoice',InvoiceController::class);