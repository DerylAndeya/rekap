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
        Schema::table('kendaraan', function (Blueprint $table) {
            // Add a foreign key constraint
            $table->foreign('FK_jenis_kendaraan')->references('id')->on('jenis_kendaraan')->onDelete('cascade');
        });

        Schema::table('invoice', function (Blueprint $table) {
            // Add a foreign key constraint
            $table->foreign('FK_kendaraan')->references('id')->on('jenis_kendaraan')->onDelete('cascade');
            $table->foreign('FK_pemesan')->references('id')->on('pemesan')->onDelete('cascade');
            $table->foreign('FK_pegawai')->references('id')->on('pegawai')->onDelete('cascade');
        });
        
        Schema::table('transaksi', function (Blueprint $table) {
            // Add a foreign key constraint
            $table->foreign('FK_kode_invoice')->references('id')->on('invoice')->onDelete('cascade');
            $table->foreign('FK_kode_barang')->references('id')->on('barang')->onDelete('cascade');
        });
        //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kendaraan', function (Blueprint $table) {
            $table->dropForeign(['FK_jenis_kendaraan']);
        });

        Schema::table('invoice', function (Blueprint $table) {
            $table->dropForeign(['FK_kendaraan']);
            $table->dropForeign(['FK_jenis_pemesan']);
            $table->dropForeign(['FK_jenis_pegawai']);
        });

        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign(['FK_kode_invoice']);
            $table->dropForeign(['FK_kode_barang']);
        });
        //
    }
};
