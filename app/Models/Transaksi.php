<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table="transaksi";
    protected $fillable = [
        'FK_kode_invoice',
        'FK_kode_barang',
        'jumlah',
        'isDeleted',
    ];
}