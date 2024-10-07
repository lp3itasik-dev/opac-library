<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'type',
    ];


   protected $table = 'types';

    public function daftarrepostype(){
        return $this->hasMany(Daftarrepo::class, 'type_id', 'id');
    }
}
