@extends('layouts.app',['title' => 'Upload'])

@section ('content')
		<div class="container-fluid">	

			<div class="pageTitle">
				<h1 class="text-center"> Upload Modules </h1>
				<h3 class="text-center"> <small> Browse or drag and drop modules to upload. Edit file details on the form that will appear. </small> </h3>
			</div>
			@if (session('message'))
            	<div class="alert alert-success">
                	{!! session('message') !!}
                </div>
            @endif                    						
			<form class="form form-group" method="POST" action="upload" enctype="multipart/form-data" role="form">
				{{ csrf_field() }}				
				<div class="input-container">
					<div class="row container">
					  <div class="col-md-12 form-group">
						<div class="form-group box">
							<div class="boxInput">
								<input class="boxFile" class="form-control" type="file" name="filePath[]" id="filePath" multiple />
								<label for="filePath" name="filePathLabel" id="filePathLabel" class="text-center">Browse for module(s) to upload 
								</label>
							</div>
						</div>
					  </div>
					</div>
					<div class="panel panel-info fileMeta">
						<div class="row">
						  <div class="col-md-12 form form-horizontal">
							<div class="form-group {{ $errors->has('title.0') ? ' has-error' : '' }} ">					
								<label class="col-sm-2 control-label" for="title" name="titleLabel[]" id="titleLabel"> Title </label>
								<div class="col-sm-8">
									<input class="form-control" type="text" name="title[]" id="title" autocomplete />
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="author" name="authorLabel[]" id="authorLabel"> Author </label>
								<div class="col-sm-8">
									<input class="form-control" type="text" name="author[]" id="author" required autocomplete />
								</div>
							</div>					
							<div class="form-group">
								<label class="col-sm-2 control-label" for="course_id" name="courseLabel[]" id="courseLabel"> Course </label>
								<div class="col-sm-8">
									<select id="course" name="course_id[]" class="dropdown form-control">
										@foreach($courses as $course)
											<option value="{{ $course->id }}"> {{ $course-> title }} </option>
										@endforeach
									</select>
								</div>
							</div>					
							<div class="form-group">
								<label class="col-sm-2 control-label" for="pages" name="pagesLabel[]" id="pagesLabel"> # of Pages</label>
								<div class="col-sm-8">
									<input class="form-control" type="number" name="pages[]" id="pages" min="1" value="1" />
								</div>
							</div>															

							<div class="form-group">
								<label class="col-sm-2 control-label" for="tags" name="tagsLabel[]" id="tagsLabel"> Tags </label>
								<div class="col-sm-8">
									<input class="form-control" type="text" name="tags[]" id="tags" />
								</div>
							</div>															

							<div class="form-group">
								<label class="col-sm-2 control-label" for="description" name="descriptionLabel" id="descriptionLabel"> Description </label>
								<div class="col-sm-8">
									<textarea name="description[]" id="description" placeholder="Enter brief desciption for module"></textarea>
								</div>
							</div>																				
						  </div>
						</div>
					</div>
				</div>
   			    <div class="row fileMeta-buttons">
				  <div class="form-group col-md-12">
				    <div class="col-sm-offset-2 col-sm-10">
					  <button type="submit" name="upload" id="upload" class="btn btn-primary"> Save </button>
		  			  <!-- <button type="" name="submit" id="cancel" class="btn btn-link" value="cancel"> Cancel </button> -->
		  			  <a id="cancel" class="btn btn-link" href="upload"> Cancel </a>
	  			    </div>
	  			  </div>
	  			</div>

			</form>
	    </div>
@stop
