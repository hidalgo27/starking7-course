<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCertification extends Model
{
    use HasFactory;

    protected $fillable = ['title','subtitle','hours','image','status','course_id'];

    const SIN_CIP = 1;
    const CON_CIP = 2;

    public function course(){
        return $this->belongsTo(Course::class);
    }
}
