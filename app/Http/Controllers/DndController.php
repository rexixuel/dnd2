<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Module;
use App\Course;
use Auth;

class DndController extends Controller
{

  public function __construct()
  {
  	$this->middleware('isAdmin')->only('upload', 'store', 'delete');
  	$this->middleware('auth');
  }

  public function delete (Request $request)
  {
  	$module = new Module();
	$module = $module->find($request->deleteId);
	  
	Storage::cloud()->delete($module->filePath);  
	
	$title = $module->title;
	  
	$module->delete();
	  
  	return back()->with('message', 'The following file(s) have been succesfully deleted: <br /> <br /> <ul>'.$title."</ul>");
  }  	
	
  public function download ()
  {
  	$module = new Module();
  	$modules = $module::all();

  	$course = new Course();
  	$courses = $course::all();

  	return view('download', compact('modules', 'courses'));
  }  

  public function getFile($id)
  {
  	$module = new Module();
  	$module = $module->findOrFail($id);
	
	// for production. Storage does not support extraction of extension name natively
  	$extension = explode('.', $module->filePath);
	$extension = end($extension);
	
  	$mimeType = Storage::disk('s3')->mimeType($module->filePath);
  	$path = Storage::cloud()->get($module->filePath);
  	
  	// return response()->download(storage_path("app/{$module->filePath}"), $module->title.'.'.$extension, ['Content-Type' => $mimeType]);

  	return response($path,200, ['Content-Type' => $mimeType, 
				    'Content-Disposition' => 'attachment; filename="'.$module->title.'.'.$extension.'"']);
  }

  public function search(Request $request)
  {
  	$module = new Module();  	
  	if(!empty($request['course_id']))
  	{
	  	$modules = $module->where(function ($query) use($request) {
	  					 	$query->where('title','LIKE','%'.$request['searchField'].'%')
						 		  ->orWhere('author','LIKE','%'.$request['searchField'].'%');
						       // ->orWhere('tag','LIKE','%'.$request['searchField'].'%')
						  })
						 ->where('course_id','=',$request['course_id'])						 
	  					 ->get();
  	}
  	else
  	{
	  	$modules = $module
	  					  ->where(function ($query) use($request) {
	  					 	$query->where('title','LIKE','%'.$request['searchField'].'%')
						 		  ->orWhere('author','LIKE','%'.$request['searchField'].'%');
						       // ->orWhere('tag','LIKE','%'.$request['searchField'].'%')
						  })	  					 	  					  
	  					  ->orderBy('course_id')
	  					  ->get();
  	}

  	$course = new Course();
  	$courses = $course::all();

  	return view('download', compact('modules', 'courses'));  	
  }

  public function upload ()
  {    
    $course = new Course();
    $courses = $course::all();

    return view('upload', compact('courses'));
  }

  public function store (Request $request)
  {      
  	$fileCount = 0;

	  do{
  		$this->validate($request, [
  	        'filePath.'.$fileCount => 'required',	        
  	        'author.'.$fileCount => 'required|max:255',
  	    ]);

  		$fileCount++;

  	}while($fileCount < count($request['filePath']));

  	$fileCount = 0;  	
  	$fileList = "";  	

  	do{

	    // Get the file from the request
	    $file = $request['filePath'][$fileCount];


	    // store to public/storage/compreDump
	  	$path = $file->store('compreDump', 's3');
			
		$moduleFields['filePath'] = $path;		
		if(empty($request['title'][$fileCount]))
		{
			$moduleFields['title'] = $request['filePath'][$fileCount]->getClientOriginalName();			
		}
		else
		{
			$moduleFields['title'] = $request['title'][$fileCount];			
		}
		$moduleFields['author'] = $request['author'][$fileCount];
		$moduleFields['course_id'] = $request['course_id'][$fileCount];
		$moduleFields['pages'] = $request['pages'][$fileCount];
		$moduleFields['tags'] = $request['tags'][$fileCount];
		$moduleFields['description'] = $request['description'][$fileCount];

		$module = new Module();

		// Get storage path and store to database

		$module = $module->create($moduleFields);
  		$fileList = $fileList."<li>".$request['filePath'][$fileCount]->getClientOriginalName()."</li>";

		$fileCount++;
  	

  	}while($fileCount < count($request['filePath']));

  	return back()->with('message', 'The following files have been succesfully uploaded: <br /> <br /> <ul>'.$fileList."</ul>");
  }
}
