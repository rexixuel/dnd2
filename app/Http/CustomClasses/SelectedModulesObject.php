<?php

namespace App\Http\CustomClasses;

use App\Module;

/**

** This class is used to retrieve a collection of Module Records as Objects
** An ARRAY of module IDs is required when retrieving only selected modules
** Course ID is required when retrieving ALL modules for a selected course

**/

class SelectedModulesObject{	

	public $module;

	public function __construct()
	{
	    $this->module = new Module();
	}

	//** An ARRAY of module IDs is required when retrieving only selected modules
	public function getSelectedModules($moduleIds)
	{

        $modules = $this->module->find($moduleIds);

	    return $modules;

	}

	//** Course ID is required when retrieving ALL modules for a selected course
	//** Did not set with default get() to enable method chaining

	public function getAllModules($courseId)
	{
		
		$modules = $this->module->where('course_id','=',$courseId);

	    return $modules;

	}

	//** Course ID is required when retrieving ALL modules for a selected course
	public function sortModules($sortField)
	{

		$modules = $this->module->orderBy($sortField)
                      	   ->paginate(10);


	    return $modules;

	}	


}

?>