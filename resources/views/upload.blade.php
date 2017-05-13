@extends('layouts.app',['title' => 'Upload'])

@section ('content')
		<div class="container-fluid">	
			@include('modules.courseTabs', ['link' => 'upload'])
			<div class="pageTitle">
				<h1 class="text-center"> Upload Modules </h1>
				<h3 class="text-center"> <small> Browse or drag and drop modules to upload. Edit file details on the form that will appear. </small> </h3>
			</div>
			@if (session('message'))
            	<div class="alert alert-success">
                	{!! session('message') !!}
                </div>
            @endif   
				<form class="form form-group" method="POST" action="{{ asset('upload/'.$courseId) }}" enctype="multipart/form-data" role="form">
					{{ csrf_field() }}				
					<div class="input-container">
						<div class="row">
						  <div class="form-group">
							<div class="form-group box">
								<div class="boxInput">
									<input class="boxFile form-control" type="file" name="filePath[]" id="filePath" multiple />
									<label for="filePath" name="filePathLabel" id="filePathLabel" class="text-center">Browse for module(s) to upload 
									</label>
								</div>
							</div>
						  </div>
						</div>	
						<div class="col-lg-7 container-fluid">
                          <div class="panel panel-info">
			                <div class="panel-heading">
				  			  <span> Files for upload <i class="fa fa-upload pull-right" aria-hidden="true"></i> </span>
			                </div>										
              			    <div class="panel-body">
						      <div class="row thumbnailGrid">
						        <div class="col-md-4 fileMeta">
						  	      <div class="thumbnail">
							        <a class="fileLink" role="button"> <h1 class="text-center fileIcon"> <i class="fa fa-file-pdf-o" aria-hidden="true"></i> </h1>
						  		     <div class="caption">
						  			   <p class="text-center" id="fileTitle"> </p>
						  		     </div>
						  		    </a>
						  	      </div>
						        </div>
						      </div>
		  	  		  	    </div> <!-- panel-body -->
			   			    <div class="panel-footer fileMeta-buttons">
							  <div class="btn-group">
								  <button type="submit" name="upload" id="upload" class="btn btn-primary"> Save </button>  
					  			  <button id="cancel" class="btn btn-link" href="upload"> Cancel </button>
				  			  </div>
				  			</div>		  	  		  	    
		  	              </div>
		  	            </div>
						<div class="col-lg-5">
		  	              <aside class="panel panel-default">
		  	                <div class="panel-heading">
		  	                	<span> File Details <i class="fa fa-info-circle pull-right" aria-hidden="true"></i> </span>
		  	                </div>
		  	                <div class="panel-body fileMetadata">
		  	                </div>
					      </aside>
					    </div>
					</div>
		  		</form>		  	  
	    </div>
@stop
