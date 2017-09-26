<?php

namespace App\Http\CustomClasses;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class DefaultFileValues{

	public $request;
	public $moduleFields = [];
	public $file;

	public function __construct($request)
	{
		$this->request = $request;		
	}

	public function setDefaultFileValues()
	{	  

	  if(empty($this->request['title']))
	  {
		$this->moduleFields['title'] = $this->request['filePath']->getClientOriginalName();			
	  }
	  else
	  {
		$this->moduleFields['title'] = $this->request['title'];			
	  }

      if(!empty($this->request['author']))
      {
        $this->moduleFields['author'] = $this->request['author'];
      }

      if(!empty($this->request['pages']))
      {
        $this->moduleFields['pages'] = $this->request['pages'];
      }

      if(!empty($this->request['tags']))
      {
        $this->moduleFields['tags'] = $this->request['tags'];        
      }      

      if(!empty($this->request['description']))
      {
        $this->moduleFields['description'] = $this->request['description'];
      }


	  $this->moduleFields['course_id'] = $this->request['courseId'];

      // Get the file from the request
      $this->file = $this->request['filePath'];

	} 

}

?>