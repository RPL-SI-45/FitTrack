<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makanan extends Model
{
    protected $table = 'makanan';

    protected $fillable = [
        'nama_makanan',
        'kalori',
        'protein',
        'lemak',
        'karbohidrat',
    ];
    use HasFactory;
}
