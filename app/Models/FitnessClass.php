<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessClass extends Model
{
    use HasFactory;

    protected $table = 'classes';

    // Fields that can be filled using create() or update()
    protected $fillable = [
        'name',         // Class name
        'description',  // Class description
        'instructor',   // Instructor name
        'datetime',     // Class date and time
        'duration',     // Duration in minutes
        'capacity'      // Max number of attendees
    ];
}
