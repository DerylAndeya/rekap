<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->integer('harga');
            $table->integer('stock');
            $table->boolean('isDeleted');
            $table->timestamps();
        });

        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kendaraan');
            $table->string('plat');
            $table->unsignedBigInteger('FK_jenis_kendaraan');
            $table->boolean('isDeleted');
            $table->timestamps();
        });

        Schema::create('jenis_kendaraan', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kendaraan');
            $table->boolean('isDeleted');
            $table->timestamps();
        });

        Schema::create('pemesan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemesan');
            $table->string('alamat_pemesan');
            $table->boolean('isDeleted');
            $table->timestamps();
        });

        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pegawai');
            $table->boolean('isDeleted');
            $table->timestamps();
        });

        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal_transaksi');
            $table->string('metode_pembayaran');
            $table->string('status_pemesanan');
            $table->boolean('isDeleted');
            $table->unsignedBigInteger('FK_kendaraan');
            $table->unsignedBigInteger('FK_pemesan');
            $table->unsignedBigInteger('FK_pegawai');
            $table->timestamps();
        });

        Schema::create('transaksi', function (Blueprint $table) {
            $table->unsignedBigInteger('FK_kode_invoice');
            $table->unsignedBigInteger('FK_kode_barang');
            $table->boolean('isDeleted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
        Schema::dropIfExists('kendaraan');
        Schema::dropIfExists('jenis_kendaraan');
        Schema::dropIfExists('pemesan');
        Schema::dropIfExists('pegawai');
        Schema::dropIfExists('invoice');
        Schema::dropIfExists('transaksi');
    }
};
