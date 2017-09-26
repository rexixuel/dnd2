<?php

namespace App\Http\CustomClasses;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Module;
use App\Course;
use Chumper\Zipper\Zipper;

/** 

** This class handles the actual download of modules to client machine
** It requires a collection of modules and course id
** Zip name should be provided when calling the function zipModule

*/

class DownloadModules
{

	public $modules;

	public function __construct($modules)
	{		
		$this->modules = $modules;
	}

	//** Zip name should be provided when calling the function zipModule

	public function zipModules($zipName)
	{

		// instantiate zipper class for compressing files

	    $zipper = new Zipper();

	    /*
			Loops through each passed module and compresses them into a zip file.
	     */

	    foreach ($this->modules as $selectedModule) {

	      $zipFile = $zipper->zip(storage_path("app/{$zipName}.zip"))
	      					->addString($selectedModule["title"], Storage::disk()->get($selectedModule["filePath"]));
	    }

	    $zipFile->close();

	    return response()->download(storage_path("app/{$zipName}.zip"));

	}

	//** Zip name should be provided when calling the function zipModule

	public function downloadSingleModule()
	{


	    // below is for cloud storage

	    // $mimeType = Storage::disk('s3')->mimeType($module->filePath);
	    // $path = Storage::cloud()->get($module->filePath);
	  	// return response($path,200, ['Content-Type' => $mimeType, 
				// 	    'Content-Disposition' => 'attachment; filename="'.$module->title.'.'.$extension.'"']);		

		// for production. Storage does not support extraction of extension name natively

	  	$extension = explode('.', $this->modules->filePath);
		$extension = end($extension);
	    $mimeType = Storage::disk()->mimeType($this->modules->filePath);
	  	
	  	return response()->download(storage_path("app/{$this->modules->filePath}"), $this->modules->title.'.'.$extension, 
	  								['Content-Type' => $mimeType]);

	}

}