<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $table="invoice";
    protected $fillable = [
        'nomor_invoice',
        'tanggal_transaksi',
        'FK_metode_pembayaran',
        'rekening',
        'FK_bank',
        'FK_pegawai',
        'FK_pemesan',
        'isDeleted',
    ];
}
