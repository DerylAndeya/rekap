<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class add_pemesan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pemesan')->insert([
            'nama_pemesan' => 'Truk Toyota',
            'plat' => 'BG 1283 ABC',
            'FK_jenis_kendaraan' => '1',
            'isDeleted' => '0',
        ]);
        //
    }
}
