<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Repositories extends Model
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
        'subject',
        'key_word',
        'is_approve',
    ];

    protected $table = 'repositories';

    public function user(){
        return $this->belongsTo(User::class, 'student', 'identity');
    }

    public function userlec(){
        return $this->belongsTo(User::class, 'lecturer', 'identity');
    }

    public function useroff(){
        return $this->belongsTo(User::class, 'officer', 'identity');
    }

    public function types()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function Det()
    {
        return $this->belongsTo(Detrepo::class, 'series', 'series');
    }
    
}
