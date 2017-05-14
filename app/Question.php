<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question', 'course_id'];

    public function answers()
    {
        return $this->hasMany('App\Answer','question_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }
}
