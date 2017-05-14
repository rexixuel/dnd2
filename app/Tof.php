<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tof extends Model
{
    protected $fillable = ['question', 'course_id'];

    public function answers()
    {
        return $this->hasMany('App\TofAnswer','tof_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }
}
