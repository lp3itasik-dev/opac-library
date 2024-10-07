<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inputrepouser extends Model
{
    use HasFactory;

    protected $fillable = [
        'series',
        'title',
        'type_id',
        'major',
        // 'officer',
        'lecturer',
        'student',
        'abstract',
        'subject',
        'key_word',
        // 'is_approve',
    ];

    protected $table = 'repositories';
}
