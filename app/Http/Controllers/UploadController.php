<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Http\CustomClasses\DefaultFileValues;

use App\Module;
use App\Course;
use Carbon\Carbon;
use Auth;

// This controller is responsible for uploading files on COMPASS

class UploadController extends Controller
{

  public function __construct()
  {
  	$this->middleware('isAdmin')->only('upload', 'store');
  	$this->middleware('auth');
  }

  public function upload ($courseId = 1)
  {      	

    $course = new Course();
    $courses = $course::all();

    return view('upload', compact('courses', 'courseId'));
  }

  public function store (Request $request, $courseId = 1)
  {      

	$fileCount = 0;

	do{
		$this->validate($request, [
	        'filePath.'.$fileCount => 'required',  	        
	    ]);

		$fileCount++;

	}while($fileCount < count($request['filePath']));
	
  	$fileCount = 0;  	
  	$fileList = "";  	
    
  	do{
  	  	  	  
  	  $defaultFileValues = new DefaultFileValues(['title'       => $request['title'][$fileCount],
  	  											  'author'      => $request['author'][$fileCount],
  	  											  'pages'       => $request['pages'][$fileCount],
  	  											  'tags'        => $request['tags'][$fileCount],
  	  											  'description' => $request['description'][$fileCount],
  	  											  'filePath'    => $request['filePath'][$fileCount],
  	  											  'courseId'    => $courseId,
  	  	                                         ]);
  	  $defaultFileValues->setDefaultFileValues();


      // store to public/storage/compreDump
      $path = $defaultFileValues->file->store('compreDump');
    
      // below is for cloud storage
     // $path = $file->store('compreDump', 's3','public');
  	
  	  $moduleFields = $defaultFileValues->moduleFields;	
  	  $moduleFields['filePath'] = $path;  	  

  	  $module = new Module();

  	  // Get storage path and store to database

  	  $module = $module->create($moduleFields);
      $fileList = $fileList."<li>".$request['filePath'][$fileCount]->getClientOriginalName()."</li>";

  	  $fileCount++;
    	

  	}while($fileCount < count($request['filePath']));

  	return back()->with('message', 'The following files have been succesfully uploaded: <br /> <br /> <ul>'.$fileList."</ul>");
  }

}
