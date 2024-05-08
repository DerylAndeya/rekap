<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TandaTerima extends Model
{
    use HasFactory;
    protected $table = "tanda_terima";
    protected $fillable = [
        'FK_kode_invoice',
        'tanggal',
        'FK_jenis_kendaraan',
        'plat',
        'FK_pegawai',
        'FK_pengirim',
        'FK_penerima',
        'isDeleted',
    ];
}
