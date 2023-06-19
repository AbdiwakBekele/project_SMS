<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $fillable = [
        'student_name',
        'email',
        'password',
        'age',
        'grade',
        'address',
        'mothers_name',
        'fathers_name',
    
    ];

    public function parent()
    {
        return $this->belongsTo(Parent::class);
    }
}
