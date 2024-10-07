<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detrepo extends Model
{
    use HasFactory;

    protected $fillable = [
        'series',
        'file_name',
        'typefile',
    ];

    protected $table = 'detail_repositories';

    public function Repo(){
        return $this->hasMany(Repositories::class, 'series');
    }
}
