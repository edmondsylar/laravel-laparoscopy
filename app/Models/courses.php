<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'description',
        'created_by'
    ];

    // all fields 
}
