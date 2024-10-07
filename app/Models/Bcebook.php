<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bcebook extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'title',
        'author',
        'publication_year',
        'publisher',
        'place_of_publication',
        'isbn',
        'type_id',
        'file_name',
        'typefile',
    ];

    protected $table = 'bcebook';
}
