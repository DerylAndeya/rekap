<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(add_barang_default::class);
        $this->call(add_jenis_kendaraan_default::class);
        $this->call(add_kendaraan_default::class);
        $this->call(add_pemesan_default::class);
        $this->call(add_pegawai_kendaraan_default::class);
        $this->call(add_invoice_default::class);
        $this->call(add_transaksi_default::class);
    }
}
