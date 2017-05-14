<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =[
            'title',
            'professor',
	];

    public function modules()
    {
        return $this->hasMany('App\Module','course_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany('App\Question','course_id', 'id');
    }    

    public function tofquestions()
    {
        return $this->hasMany('App\Tof','course_id', 'id');
    }        
}
