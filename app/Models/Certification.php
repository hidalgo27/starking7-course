<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    protected $table = "certifications";
    protected $fillable = ['name','status','course_user_id'];

    const PENDIENTE = 0;
    const PROCESO = 1;
    const TERMINADO = 2;
    const TERMINADO_CIP = 3;

    public function course_user(){
        return $this->belongsTo(CourseUser::class,'course_user_id');
    }

}
