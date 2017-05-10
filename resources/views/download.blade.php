@extends('layouts.app',['title' => 'Download'])

@section ('content')
		<!-- Small modal -->		
		<div class="modal fade" id="deleteWarning" tabindex="-1" role="dialog" aria-labelledby="delete">
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content alert alert-warning">
		      <div class="modal-header alert-warning">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="modalLabel">Deleting File...</h4>
		      </div> <!-- modal header -->
		      <div class="modal-body">
		         <p id="deleteWarningMessage"> </p> 
		      </div> <!-- modal body -->
		      <div class="modal-footer">
		        <form class="form form-inline" method="POST" action="delete" role="form">
				{{ csrf_field() }}
				  <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>		
				  <button type="submit" class="btn btn-danger" name="deleteId" id="deleteId">Delete</button>
				</form>
		      </div> <!-- modal footer -->		      
		    </div> <!-- modal content -->
		  </div> <!-- modal dialog -->
		</div> <!-- modal -->

		@include('modules.courseTabs', ['link' => 'download'])

		<div class="container-fluid">	

			<div class="pageTitle">
				<h1 class="text-center"> Download Modules </h1>
				<!-- <h3 class="text-center"> <small> Click the link to download module </small> </h3> -->
			</div>
			<div class="searchForm">
				<form class="form form-inline" method="POST" action="download" role="form">
					{{ csrf_field() }}
					<div class="input-group col-md-3">
						<div class="input-group-addon"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></div>
						<input type="text" class="form-control" name="searchField" id="searchField"
						placeholder="Search by title, author, tags. Leave empty to browse all modules in specified course" />
					</div>
					<div class="input-group col-md-6">					
						<button type="submit" name="search" id="search" class="btn btn-default"> Search </button>
					</div>					
				</form>				
			</div>
			@if (session('message'))
				<div class="alert alert-success">
					{!! session('message') !!}
				</div>
			@endif
			<div class="moduleList">
				<table class="table table-striped table-hover table-responsive">
					<thead>
					  <tr>
						<th> Title </th>
						<th> Author </th>
						<th> Course </th>
						<th colspan="3"> Uploaded on </th>
					  </tr>
					</thead>
					<tbody>
				@foreach ($modules as $module)
					  <tr>
						<td> <a href="download/{{$module->id}}" > {{ $module->title }} </a> </td>
						<td> {{ $module->author }} </td>
						<td> {{ $module->course->title }} </td>
						<td> {{ $module->created_at }} </td>
						<td> <a href="{{ asset('grab/'.$module->id)}}" class="btn btn-primary"> <i class="fa fa-cloud-download" aria-hidden="true"></i> </a> </td>
						@if(Auth::user()->role < 1)
							<td> <button class="btn btn-danger delete" type="button" data-toggle="modal" data-target="#deleteWarning" data-title="{{ $module->title }}"
								data-id="{{$module->id}}"> 							        
							     	<i class="fa fa-trash" aria-hidden="true"></i> 
							     </button> 
							</td>
						@endif
					  </tr>
					</tbody>
				@endforeach
				</table>
			</div>

	    </div>		
@stop
