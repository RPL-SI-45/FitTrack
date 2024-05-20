<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BodyMassIndex extends Model
{
    use HasFactory;
<<<<<<< HEAD:app/Models/BodyMassIndex.php

    protected $fillable = ['weight', 'height', 'age', 'activity_level','category','bmi'];
=======
    protected $fillable = [
        'Weight', 
        'Height', 
        'Age',
        'Activity'
    ];
>>>>>>> c252763f213ebff2f58c94af72d2432e7f954551:FitTrack/app/Models/BodyMassIndex.php
}
