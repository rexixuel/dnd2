<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TofAnswer extends Model
{
    protected $fillable = ['answer', 'tof_id', 'correct'];
}
