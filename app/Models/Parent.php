<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parent extends Model
{
    use HasFactory;
    protected $table = 'parents';

    protected $fillable = [
        'parents_name',
        'email',
        'password',
        'phone_number',
        'phone_number2',
        'address',
       
    ];
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
