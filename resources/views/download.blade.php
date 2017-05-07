@extends('layouts.app',['title' => 'Download'])
@section ('content')
		<div class="container">	

			<div class="pageTitle">
				<h1 class="text-center"> Download Modules </h1>
				<!-- <h3 class="text-center"> <small> Click the link to download module </small> </h3> -->
			</div>
			<div class="searchForm container centerDiv">
				<form class="form form-inline" method="POST" action="download" role="form">
					{{ csrf_field() }}
					<div class="input-group col-md-3">
						<div class="input-group-addon"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></div>
						<input type="text" class="form-control" name="searchField" id="searchField"
						placeholder="Search by title, author, tags. Leave empty to browse all modules in specified course" />
					</div>
					<div class="input-group ">
 					  <select id="course" name="course_id" class="dropdown form-control">
							<option value="0"> All Courses </option>
						@foreach($courses as $course)
							<option value="{{ $course->id }}"> {{ $course-> title }} </option>
						@endforeach
					  </select>					
					</div>
					<div class="input-group col-md-6">					
						<button type="submit" name="search" id="search" class="btn btn-default"> Search </button>
					</div>					
				</form>				
			</div>
			<div class="moduleList">
				<table class="table table-striped table-hover table-responsive">
					<thead>
						<th> Title </th>
						<th> Author </th>
						<th> Course </th>
						<th colspan="2"> Uploaded on </th>
					</thead>
				@foreach ($modules as $module)
					<tr>
						<td> <a href="download/{{$module->id}}" > {{ $module->title }} </a> </td>
						<td> {{ $module->author }} </td>
						<td> {{ $module->course->title }} </td>
						<td> {{ $module->created_at }} </td>
						<td> <a href="download/{{$module->id}}"> Download </a> </td>
					</tr>
				@endforeach
				</table>
			</div>

	    </div>
@stop