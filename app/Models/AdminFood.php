<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminFood extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_makanan_utama',
        'kalori_utama',
        'nama_makanan_ringan',
        'kalori_ringan',
        'nama_minuman',
        'kalori_minuman',
    ];
}
