<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSubjectGrade extends Model
{
    use HasFactory;
    protected $guard_name = 'web';

    protected $table = 'user_subject_grade';
    protected $fillable=[
        'user_id',
        'subject_id',
        'grade_id',
       
    ];
}
