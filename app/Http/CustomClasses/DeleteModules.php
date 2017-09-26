<?php

namespace App\Http\CustomClasses;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

use App\Module;

/** 

** This class handles the actual download of modules to client machine
** It requires a collection of modules and course id
** Zip name should be provided when calling the function zipModule

*/

class DeleteModules
{

	public $modules;
	public $titles = [];

	public function __construct($modules)
	{		
		$this->modules = $modules;
	}

	//** Zip name should be provided when calling the function zipModule

	public function delete()
	{

	    // commented below is for aws s3 cloud storage    
	    // Storage::cloud()->delete($module->filePath);  
	    //Storage::disk()->delete($module->filePath);  
	    
	    foreach ($this->modules as $selectedModule) {
	      Storage::disk()->delete($selectedModule->filePath);
	      $selectedModule->delete();      
	      array_push($this->titles, $selectedModule->title);
	    }
	 

	}

}