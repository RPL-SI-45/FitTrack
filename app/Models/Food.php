<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_makanan',
        'nama_menu',
        'kalori',
        'tanggal_makan',
        'waktu_makan',
    ];
}