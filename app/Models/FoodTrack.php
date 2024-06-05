<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodTrack extends Model
{
    use HasFactory;

    protected $fillable = ['food_item', 'meal_time', 'meal_date'];

    // Relationship with MealTime (if necessary)
    // public function mealTime()
    // {
    //     return $this->belongsTo(MealTime::class);
    // }
}
