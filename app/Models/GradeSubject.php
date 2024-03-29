<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradeSubject extends Model
{
    use HasFactory;

    protected $guard_name = 'web';

    protected $table = 'grade_subject';
    protected $fillable=[
        'grade_id',
        'subject_id',
    ];


    public function gradeSubject()
    {
        return $this->hasMany(Subject::class,'subject_id','id');
    }
  
}
