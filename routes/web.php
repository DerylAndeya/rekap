<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisKendaraanController;
use App\Http\Controllers\PemesanController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\BankController;
use App\Http\Controllers\PengirimController;
use App\Http\Controllers\PenerimaController;
use App\Http\Controllers\MetodePembayaranController;
use App\Http\Controllers\TandaTerimaController;
use Illuminate\Support\Facades\Route;

Route::get('/Home', function () {
    return view('barang/index');
});
Route::resource('barang',BarangController::class);
Route::resource('jenis_kendaraan',JenisKendaraanController::class);
Route::resource('transaksi',TransaksiController::class);
Route::resource('pemesan',PemesanController::class);
Route::resource('pegawai',PegawaiController::class);
Route::resource('invoice',InvoiceController::class);
Route::resource('bank',BankController::class);
Route::resource('pengirim',PengirimController::class);
Route::resource('penerima',PenerimaController::class);
Route::resource('metode_pembayaran',MetodePembayaranController::class);
Route::resource('tanda_terima',TandaTerimaController::class);
Route::get('/export_invoice', [InvoiceController::class, 'exportToExcel'])->name('invoice.export');
