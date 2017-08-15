<?php

namespace App\Http\CustomClasses;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Module;


class SelectedModulesObject{
	

	public $modules;

	public function __construct()
	{
		
	}

	public function getSelectedModules($moduleIds)
	{

	    $module = new Module();
        $modules = $module->find($moduleIds);

	    return $modules;

	}

	public function getAllModules($courseId)
	{

	    $module = new Module();

		$modules = $module->where('course_id','=',$courseId)->get()->toArray();

	    return $modules;

	}	
}

?>