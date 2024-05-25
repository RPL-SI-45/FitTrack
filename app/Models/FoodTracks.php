<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodTrack extends Model
{
    use HasFactory;

    // Define the fillable properties for mass assignment
    protected $fillable = [
        'food_item',
        'meal_time_id',
        'meal_date',
    ];

    // Optionally, define the relationship to MealTime
    public function mealTime()
    {
        return $this->belongsTo(Foodtrack::class);
    }
}