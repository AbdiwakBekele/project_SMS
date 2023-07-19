<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table = 'grades';
    protected $guard_name = 'web';
    protected $fillable=[
         'grade_name',
    ];
    public function sections()
    {
        return $this->hasMany(Section::class,'grade_id','id');
    }
    // public function subjects()
    // {
    //     return $this->belongsToMany(Subject::class);
    // }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
