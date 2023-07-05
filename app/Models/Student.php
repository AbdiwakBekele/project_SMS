<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Student extends Model
{
    use HasFactory,HasRoles;
    protected $guard_name = 'web';

    protected $table = 'students';

    protected $fillable = [
        'parent_id',
        'student_name',
        'email',
        'password',
        'age',
        'year',
        'grade',
        'address',
        'mothers_name',
        'fathers_name',
        'school_branch'
    
    ];

    public function parents()
    {
        return $this->belongsTo(Parent::class,'parent_id','id');
    }
}
