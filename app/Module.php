<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
	protected $fillable =[
            'title',
            'author',
            'course_id',
            'pages',
            'description',
            'filePath',
	];

    public function course()
    {
        return $this->belongsTo('App\Course', 'course_id');
    }

}
