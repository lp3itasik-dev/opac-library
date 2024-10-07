<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desiderata extends Model
{
    use HasFactory;

    protected $fillable = [
        'book',
        'author',
        'realisasi',
    ];

    protected $table = 'desideratas';
}
