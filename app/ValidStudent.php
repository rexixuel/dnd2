<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ValidStudent extends Model
{
    protected $fillable = ['student_number', 'role'];
}
