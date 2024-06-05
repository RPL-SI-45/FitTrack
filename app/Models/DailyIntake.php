<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyIntake extends Model
{
    use HasFactory;

    protected $fillable = [
        'target_id',
        'amount',
        'date',
    ];

    public function dailyIntakes()
    {
        return $this->hasMany(DailyIntake::class);
    }
}
