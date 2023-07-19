<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $guard_name = 'web';

    protected $table = 'sections';
    protected $fillable=[
        'section_name',
        'grade_id',
        'user_id',
    ];
    public function grade()
    {
        return $this->belongsTo(Grade::class,'grade_id','id');
    }
    public function userSection()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
