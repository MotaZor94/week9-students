<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Image;

class Student extends Model
{
    //
    public function image()
    {
        return $this->belongsToMany('student_image');
    }
}
