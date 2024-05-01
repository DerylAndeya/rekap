<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table="kendaran";
    protected $fillable = [
        'nama_kendaraan',
            'plat',
            'FK_jenis_kendaraan',
            'isDeleted',
    ];
}
