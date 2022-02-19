<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_module extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'module_name',
        'video_src',
        'description',
        'created_by'
    ];
}
