@extends('layouts.app',['title' => 'Download'])

@section ('content')
		<!-- Small modal -->		
		<div class="modal fade" id="deleteWarning" tabindex="-1" role="dialog" aria-labelledby="delete">
		  <div class="modal-dialog modal-sm" role="document">
		    <div class="modal-content alert alert-warning">
		      <div class="modal-header alert alert-warning">
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
			<form class="" method="POST" action="{{ asset('download/'.$courseId)}}" role="form">
			  <div class="form-inline">
				<div class="searchForm" method="POST" action="{{ asset('download/'.$courseId)}}" role="form">
					{{ csrf_field() }}
					<div class="form-group">
					  <div class="input-group">
						<div class="input-group-addon"><i class="glyphicon glyphicon-search" aria-hidden="true"></i></div>
						<input type="text" class="form-control" name="searchField" id="searchField"
						placeholder="Search by title, author, tags. Leave empty to browse all modules in specified course" />
					  </div>
					</div>
					<div class="form-group">					
						<button type="submit" name="downloadAction" id="search" class="btn btn-default" value="search"> Search </button>
					</div>
					<div class="input-group pull-right">
						@if(Auth::user()->role < 1)
							<button type="button" role="button" name="deleteAction" id="deleteAction" class="btn btn-danger btn-sm"
									data-toggle="modal" data-target="#deleteWarning" data-title="All {{ $courseId }} Files"
									data-id="deleteSelected" value="deleteSelected">
								 Delete Selected
							</button>
						@endif
						<button type="submit" role="button" name="downloadAction" id="downloadSelected" class="btn btn-default btn-sm" value="downloadSelected"> Download Selected </button>
						<button type="submit" role="button" name="downloadAction" id="downloadAll" class="btn btn-primary btn-sm" value="downloadAll"> Download All </button>
					</div>										
				</div>
				
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
						<th> Title <a href="{{ asset('download/'.$courseId.'/title') }}"> <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i> </a></th>
						<th> Author <a href="{{ asset('download/'.$courseId.'/author') }}"> <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i> </a> </th>
						<th> Course </th>
						<th> Uploaded on <a href="{{ asset('download/'.$courseId.'/created_at') }}"> <i class="fa fa-sort-amount-desc" aria-hidden="true"> </a></th>
						<th>

						</th>
					  </tr>
					</thead>
					<tbody>
				@foreach ($modules as $module)
					  <tr>
						<td class=""> 
						<input type="checkbox" name="modules[]" class="moduleChecked" id="moduleChecked" value="{{ $module->id }}" /> 
						<a href="{{ asset('downloadSingle/'.$module->id)}}" > {{ $module->title }} </a> </td>
						<td> {{ $module->author }} </td>
						<td> {{ $module->course->title }} </td>
						<td> {{ $module->created_at }} </td>
						<td> <a href="{{ asset('downloadSingle/'.$module->id)}}" class="btn btn-primary"> <i class="fa fa-cloud-download" aria-hidden="true"></i> </a> </td>
						@if(Auth::user()->role < 1)
							<td> <button class="btn btn-danger delete" type="button" data-toggle="modal" data-target="#deleteWarning" data-title="{{ $module->title }}"
								data-id="{{$module->id}}" value="delete">
							     	<i class="fa fa-trash" aria-hidden="true"></i> 
							     </button> 
							</td>
						@endif
					  </tr>
					</tbody>
				@endforeach
				</table>
				@if (!empty($modules->toArray()))
				<div class="btn btn-block">
					{{$modules->links()}}
				</div>					
				@endif
			  </div>
			</form>
	    </div>		
@stop
