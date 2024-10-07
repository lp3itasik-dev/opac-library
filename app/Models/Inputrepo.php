<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputrepo extends Model
{
    use HasFactory;

    protected $fillable = [
        'series',
        'title',
        'type_id',
        'major',
        'officer',
        'lecturer',
        'student',
        'student_name',
        'abstract',
        'is_approve',
    ];

    protected $table = 'repositories';
}
