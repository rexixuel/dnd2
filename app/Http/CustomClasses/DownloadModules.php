<?php

namespace App\Http\CustomClasses;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Module;
use App\Course;
use Chumper\Zipper\Zipper;


class DownloadModules
{

	public $courseId;
	public $modules;

	public function __construct($modules, $courseId)
	{		
		$this->courseId = $courseId;
		$this->modules = $modules;
	}


	public function zipModules($zipName)
	{

	    $zipper = new Zipper();

	    foreach ($this->modules as $selectedModule) {

	      $zipFile = $zipper->zip(storage_path("app/{$zipName}.zip"))
	      					->addString($selectedModule["title"], Storage::disk()->get($selectedModule["filePath"]));
	    }

	    $zipFile->close();

	    return response()->download(storage_path("app/{$zipName}.zip"));

	}
}