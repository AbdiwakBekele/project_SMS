<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Parents extends Model
{
    use HasFactory,HasRoles;
    protected $table = 'parents';
    protected $guard_name = 'web';

    protected $fillable = [
        'parents_name',
        'email',
        'password',
        'phone_number',
        'phone_number2',
        'address',
        'city',
        'state',
       
    ];
    public function students()
    {
        return $this->hasMany(Student::class,'parent_id','id');
    }
}

