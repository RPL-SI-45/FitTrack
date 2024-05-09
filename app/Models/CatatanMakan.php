<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanMakan extends Model
{
    protected $table = 'catatan_makan';

    protected $fillable = [
        'id_pengguna',
        'id_makanan',
        'tanggal_makan',
        'jumlah_porsi',
    ];    
    use HasFactory;
}
