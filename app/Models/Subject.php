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
    // public function grades()
    // {
    //     return $this->belongsToMany(Grade::class);
    // }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
