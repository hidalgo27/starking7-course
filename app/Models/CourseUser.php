<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    protected $table = "course_user";
    use HasFactory;

    public function course(){
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function certifications(){
        return $this->hasOne(Certification::class,'course_user_id');
    }
}
