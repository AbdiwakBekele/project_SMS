<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $guard_name = 'web';
    protected $fillable=[
         'subject_name',
         'subject_code',
    ];
   
    
  
    public function subjects()
    {
        return $this->belongsTo(GradeSubject::class, 'subject_id','id');
    }
   
    
    public function teacher()
    {
        return $this->belongsToMany(User::class);
    }
   
}
