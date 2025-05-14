<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessClass extends Model
{
    use HasFactory;

    protected $table = 'classes'; // explicitly map to the 'classes' table

    protected $fillable = [
        'name',
        'description',
        'instructor',
        'datetime',
        'duration',
        'capacity'
    ];
}
