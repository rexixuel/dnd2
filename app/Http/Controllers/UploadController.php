<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

      // Get the file from the request
      $file = $request['filePath'][$fileCount];


      // store to public/storage/compreDump
      $path = $file->store('compreDump');
    	// $path = $file->store('compreDump', 's3','public');
  		
  		$moduleFields['filePath'] = $path;		
  		if(empty($request['title'][$fileCount]))
  		{
  			$moduleFields['title'] = $request['filePath'][$fileCount]->getClientOriginalName();			
  		}
  		else
  		{
  			$moduleFields['title'] = $request['title'][$fileCount];			
  		}

      if(!empty($request['author'][$fileCount]))
      {
        $moduleFields['author'] = $request['author'][$fileCount];
      }

      if(!empty($request['pages'][$fileCount]))
      {
        $moduleFields['pages'] = $request['pages'][$fileCount];
      }

      if(!empty($request['tags'][$fileCount]))
      {
        $moduleFields['tags'] = $request['tags'][$fileCount];        
      }      

      if(!empty($request['description'][$fileCount]))
      {
        $moduleFields['description'] = $request['description'][$fileCount];
      }

  		$moduleFields['course_id'] = $courseId;
  		$module = new Module();

  		// Get storage path and store to database

  		$module = $module->create($moduleFields);
    		$fileList = $fileList."<li>".$request['filePath'][$fileCount]->getClientOriginalName()."</li>";

  		$fileCount++;
    	

  	}while($fileCount < count($request['filePath']));

  	return back()->with('message', 'The following files have been succesfully uploaded: <br /> <br /> <ul>'.$fileList."</ul>");
  }

}
