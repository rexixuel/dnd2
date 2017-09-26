<?php

namespace App\Http\CustomClasses;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


class ValidateFileInput{	

	public $request;
	public $courseId;

	public function __construct(Request $request, $courseId = null)
	{
		$this->request = $request;
		$this->courseId = $courseId;
	}

	public function validateFilePath(Request $request)
	{

  		$fileCount = 0;

		do{
	  		$this->validate($request, [
	  	        'filePath.'.$fileCount => 'required',  	        
	  	    ]);

	  		$fileCount++;

	  	}while($fileCount < count($request['filePath']));

	  	dd("validated");

	} 

}

?>