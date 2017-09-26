<?php

namespace App\Http\CustomClasses;

use Illuminate\Http\Request;
use App\Module;

class SearchModule{	

	public $request;
	public $courseId;

	public function __construct(Request $request, $courseId = null)
	{
		$this->request = $request;
		$this->courseId = $courseId;
	}

	public function listModules()
	{

		$request = $this->request;

	  	$module = new Module();

	  	if(!empty($this->courseId))
	  	{  	
		  	$modules = $module->where(function ($query) use($request) {
		  					 	$query->where('title','LIKE','%'.$request['searchField'].'%')
							 		  ->orWhere('author','LIKE','%'.$request['searchField'].'%')
							     	  ->orWhere('tags','LIKE','%'.$request['searchField'].'%');
							  })
							 ->where('course_id','=',$courseId)
		  				     ->paginate(10);
	  	}
	  	else
	  	{
		  	$modules = $module
		  					  ->where(function ($query) use($request) {
		  					 	$query->where('title','LIKE','%'.$request['searchField'].'%')
							 		  ->orWhere('author','LIKE','%'.$request['searchField'].'%')
							      	  ->orWhere('tags','LIKE','%'.$request['searchField'].'%');
							  })	  					 	  					  
		  					  ->orderBy('course_id')
		  					  ->paginate(10);
	  	}

	  	return $modules;

	} 

}

?>