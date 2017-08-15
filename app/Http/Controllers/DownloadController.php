<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Module;
use App\Course;
use App\Http\CustomClasses\DownloadModules;
use App\Http\CustomClasses\SelectedModulesObject;
use Chumper\Zipper\Zipper;
use Carbon\Carbon;
use Auth;


/** 

** This controller handles download requests. 
** It also accepts search queries for modules to be downloaded per course

**/

class DownloadController extends Controller
{

  public function __construct()
  {
  	$this->middleware('isAdmin')->only('delete', 'deleteSelected', 'deleteAction');
  	$this->middleware('auth');
  }

  public function delete (Request $request)
  {
  	 $module = new Module();
	 $module = $module->find($request->deleteId);
	  
    // Storage::cloud()->delete($module->filePath);  
	  Storage::disk()->delete($module->filePath);  
	
	  $title = $module->title;
	  
	  $module->delete();
	  
  	return back()->with('message', 'The following file(s) have been succesfully deleted: <br /> <br /> <ul> <li>'.$title." </li> </ul>");
  }


  public function deleteSelected ($moduleIds)
  {
    $selectedModules = $moduleIds;
    
    $module = new Module();

    // commented below is for aws s3 cloud storage    
    // Storage::cloud()->delete($module->filePath);  
    //Storage::disk()->delete($module->filePath);  

    $titles = "";
    foreach ($selectedModules as $selectedModule) {
      $file = $module->find($selectedModule);
      Storage::disk()->delete($file->filePath);
      $file->delete();      
      $titles =  $titles.'<li>'.$file->title. '</li>' ;
    }
  
    
    
    return back()->with('message', 'The following file(s) have been succesfully deleted: <br /> <br /> <ul> '.$titles.'</ul>');
  }     

  public function sort($courseId = 1, $sortField)
  {  	
    $module = new Module;
    $modules = $module->where('course_id','=',$courseId)                      
                      ->orderBy($sortField)
                      ->paginate(10);
    $courses = new Course;
    $courses = $courses->all();

    return view('download',compact('modules', 'courseId','courses'));
  }

  public function download ($courseId = 1)
  {

  	$module = new Module();
  	$modules = $module->where('course_id','=',$courseId)
                      ->orderBy('created_at','desc')
                      ->paginate(10);

  	$course = new Course();
  	$courses = $course::all();

  	return view('download', compact('modules', 'courses','courseId'));
  }  

  public function downloadSelected (Request $request, $courseId)
  {  	

	if($request["modules"] == null){

		return back()->with('message', '<span class="alert alert-danger"> Please select <strong> at least one (1) </strong> module to download </span>');

	}else{

		$modulesObject = new SelectedModulesObject();
		$modules = $modulesObject->getSelectedModules($request["modules"]);

		$getSelectedModule = new DownloadModules($modules, $courseId);
		
		$zipName = Auth::user()->student_number.'_'.Carbon::now().'_'.$courseId;

		return $getSelectedModule->zipModules($zipName);
	}

  }

  public function downloadAll (Request $request, $courseId = 1)
  {

	$modulesObject = new SelectedModulesObject();
	$modules = $modulesObject->getAllModules($courseId);

	$getSelectedModule = new DownloadModules($modules, $courseId);
		
    $zipName = Auth::user()->student_number.'_'.Carbon::now().'_'.$courseId;


	return $getSelectedModule->zipModules($zipName);

  }

  public function getFile($id)
  {
  	$module = new Module();
  	$module = $module->findOrFail($id);       

    $mimeType = File::mimeType(storage_path("app/{$module->filePath}"));
	
	// for production. Storage does not support extraction of extension name natively
  	$extension = explode('.', $module->filePath);
	$extension = end($extension);
    $mimeType = Storage::disk()->mimeType($module->filePath);
  	
  	return response()->download(storage_path("app/{$module->filePath}"), $module->title.'.'.$extension, 
  								['Content-Type' => $mimeType]);

    // below is for cloud storage

    // $mimeType = Storage::disk('s3')->mimeType($module->filePath);
    // $path = Storage::cloud()->get($module->filePath);
  	// return response($path,200, ['Content-Type' => $mimeType, 
			// 	    'Content-Disposition' => 'attachment; filename="'.$module->title.'.'.$extension.'"']);
  }


  public function deleteAction(Request $request)
  {
    $moduleIds = explode(',', $request["deleteId"]);
	  
    if(count($moduleIds) > 1)
    {
      return $this->deleteSelected($moduleIds);
    }
    else
    {
      return $this->delete($request);
    }

  }

  public function search(Request $request, $courseId = null)
  {
  	
  	$module = new Module();

  	// courseRepository

  	if(!empty($courseId))
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

  	$course = new Course();
  	$courses = $course::all();    

  	if (empty($modules->count())){  		
  		return back()->with('message',
  			'<span class="alert alert-danger"> <strong> Module '.$request['searchField'].' </strong> not found </span>');
  	}else{
  		return view('download', compact('modules', 'courses','courseId'));  	
  	}

  }	
}
