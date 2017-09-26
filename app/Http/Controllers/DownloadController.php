<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Module;
use App\Course;
use App\Http\CustomClasses\DownloadModules;
use App\Http\CustomClasses\DeleteModules;
use App\Http\CustomClasses\SelectedModulesObject;
use App\Http\CustomClasses\SearchModule;
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
    $titles = "";
  	$moduleIds = explode(',', $request["deleteId"]);

	$modulesObject = new SelectedModulesObject();
	$modules = $modulesObject->getSelectedModules($moduleIds);
    
    $module = new Module(); 
    
    $deleteModules = new DeleteModules($modules);
    $deleteModules->delete();
    
    foreach ($deleteModules->titles as $title) {
    	$titles = $titles."<li>".$title." </li>";
    }

    return back()->with('message', "<div class='alert alert-success'>The following file(s) have been succesfully deleted: <br /> <br /> <ul> ".$titles."</ul> </div>");
  }     

  public function sort($courseId = 1, $sortField)
  {  	

	$modulesObject = new SelectedModulesObject();
	$modules = $modulesObject->getAllModules($courseId);
	$modules = $modulesObject->sortModules($sortField);
    
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

		$downloadSelectedModule = new DownloadModules($modules);
		
		$zipName = Auth::user()->student_number.'_'.Carbon::now().'_'.$courseId;

		return $downloadSelectedModule->zipModules($zipName);
	}

  }

  public function downloadAll (Request $request, $courseId = 1)
  {

	$modulesObject = new SelectedModulesObject();
	$modules = $modulesObject->getAllModules($courseId)->get();

	$downloadAllModules = new DownloadModules($modules);
	
	$zipName = Auth::user()->student_number.'_'.Carbon::now().'_'.$courseId;

	return $downloadAllModules->zipModules($zipName);

  }

  public function getFile($id)
  {

	$modulesObject = new SelectedModulesObject();
	$module = $modulesObject->getSelectedModules($id);

	$downloadSingleModule = new DownloadModules($module);

  	return $downloadSingleModule->downloadSingleModule();

  }

  public function search(Request $request, $courseId = null)
  {
  	$searchModule = new SearchModule($request);
  	$modules = $searchModule->listModules();

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
