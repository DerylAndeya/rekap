<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesan extends Model
{
    use HasFactory;
    protected $table="pemesan";
    protected $fillable = [
        'nama_pemesan',
            'plat',
            'FK_jenis_kendaraan',
            'isDeleted',
    ];
}
