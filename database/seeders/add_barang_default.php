<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class add_barang_default extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            'nama_barang' => 'Pipet Pop Ice Ikan Layar',
            'jenis_barang' => 'Pipet',
            'harga' => '15000',
            'stock' => '500',
            'isDeleted' => '0',
        ]);

        DB::table('barang')->insert([
            'nama_barang' => 'Pipet Kuda',
            'jenis_barang' => 'Pipet',
            'harga' => '13000',
            'stock' => '400',
            'isDeleted' => '0',
        ]);
        //
    }
}
