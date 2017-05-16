<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Module;
use App\Course;
use Chumper\Zipper\Zipper;
use Carbon\Carbon;
use Auth;

class DndController extends Controller
{

  public function __construct()
  {
  	$this->middleware('isAdmin')->only('upload', 'store', 'delete', 'deleteSelected', 'deleteAction');
  	$this->middleware('auth');
  }

  public function delete (Request $request)
  {
  	$module = new Module();
	  $module = $module->find($request->deleteId);
	  dd($module);
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
    Storage::disk()->delete($module->filePath);  

    $titles = "";
    foreach ($selectedModules as $selectedModule) {
      $file = $module->find($selectedModule);
      Storage::disk()->delete($file->filePath);
      $file->delete();      
      $titles =  $titles.'<li>'.$file->title. '</li>' ;
    }
  
    
    
    return back()->with('message', 'The following file(s) have been succesfully deleted: <br /> <br /> <ul> '.$titles.'</ul>');
  }     

  public function sort($courseId, $sortField)
  {
    $module = new Module;
    $modules = $module->where('course_id','=',$courseId)                      
                      ->orderBy($sortField)
                      ->paginate(10);
    $courses = new Course;
    $courses = $courses->all();

    return view('download',compact('modules', 'courseId','courses'));
  }

	public function downloadDefault()
  {
    return $this->download(1);
  }

  public function download ($courseId)
  {

  	$module = new Module();
  	$modules = $module->where('course_id','=',$courseId)
                      ->orderBy('created_at')
                      ->paginate(10);;

  	$course = new Course();
  	$courses = $course::all();

  	return view('download', compact('modules', 'courses','courseId'));
  }  

  public function downloadSelected (Request $request, $courseId)
  {
    $selectedModules = $request["modules"];
   
    $zipper = new Zipper();
    $module = new Module();

    $fileArray = [];
    $zipName = Auth::user()->student_number.'_'.Carbon::now().'_'.$courseId;

    foreach ($selectedModules as $selectedModule) {
      $file = $module->find($selectedModule);
      $zipFile = $zipper->zip(storage_path("app/{$zipName}.zip"))->addString($file->title, Storage::disk()->get($file->filePath));
    }

    $zipFile->close();

    return response()->download(storage_path("app/{$zipName}.zip"));
  }

  public function downloadAll (Request $request, $courseId)
  {
    $zipper = new Zipper();
    $module = new Module();
    $modules = $module->where('course_id','=',$courseId)->get();    

    $fileArray = [];
    $zipName = Auth::user()->student_number.'_'.Carbon::now().'_'.$courseId;
    foreach($modules as $file)
    {      
      $path = storage_path("app/{$file->filePath}");
      $fileArray = array_prepend($fileArray,$path);
      
      $zipFile = $zipper->zip(storage_path("app/{$zipName}.zip"))->addString($file->title, Storage::disk()->get($file->filePath));
    }

    $zipFile->close();

    // $zipFile = $zipper->zip('test.zip')->folder('test')->add($fileArray);
    // $zipFile = $zipper->zip(storage_path('app/test.zip'))->add($fileArray)->close();

    return response()->download(storage_path("app/{$zipName}.zip"));

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
  	
  	return response()->download(storage_path("app/{$module->filePath}"), $module->title.'.'.$extension, ['Content-Type' => $mimeType]);

    // below is for cloud storage

    // $mimeType = Storage::disk('s3')->mimeType($module->filePath);
    // $path = Storage::cloud()->get($module->filePath);
  	// return response($path,200, ['Content-Type' => $mimeType, 
			// 	    'Content-Disposition' => 'attachment; filename="'.$module->title.'.'.$extension.'"']);
  }

  public function searchDefault(Request $request)
  {
    return $this->search($request, $courseId);
  }

  public function downloadAction(Request $request, $courseId)
  {
    switch ($request["downloadAction"]) {
      case 'search':
        return $this->search($request, $courseId);
        break;
      case 'downloadSelected':
        return $this->downloadSelected($request, $courseId);
        break;      
      case 'downloadAll':
        return $this->downloadAll($request, $courseId);
        break;              
      default:
        return back();
        break;
    }

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

  public function search(Request $request, $courseId)
  {
  	$module = new Module();  	
  	if(!empty($request['course_id']))
  	{
	  	$modules = $module->where(function ($query) use($request) {
	  					 	$query->where('title','LIKE','%'.$request['searchField'].'%')
						 		  ->orWhere('author','LIKE','%'.$request['searchField'].'%')
						      ->orWhere('tags','LIKE','%'.$request['searchField'].'%');
						  })
						 ->where('course_id','=',$request['course_id'])						 
	  				 ->get();
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
	  					  ->get();
  	}

  	$course = new Course();
  	$courses = $course::all();    

  	return view('download', compact('modules', 'courses','courseId'));  	
  }

  public function uploadDefault()
  {
    return $this->upload(1);
  }


  public function upload ($courseId)
  {    

    $course = new Course();
    $courses = $course::all();

    return view('upload', compact('courses', 'courseId'));
  }

  public function storeDefault (Request $request)
  {
    return store($request, 1);
  }

  public function store (Request $request, $courseId)
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
