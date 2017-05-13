@extends('layouts.app',['title' => 'Quiz'])

@section ('content')
		
		<div class="container-fluid">
            @include('modules.courseTabs', ['link' => 'quiz'])
			<aside class="nav sidebar col-md-3">
				<h3 class="text-center"> Type of Test </h3>
				<ul class="nav nav-pills nav-stacked">
				 @if($quizType == 'multipleChoice')
				 	<li role="presentation" class="active">
				 @else
				 	<li role="presentation" class="">
				 @endif
				  <a href="{{ url('quiz/'.$courseId.'/multipleChoice')}}"> Multiple Choice
					<span class="pull-right"> <i class="fa fa-list-ul" aria-hidden="true"></i> </span> </a> </li>					
 				 @if($quizType == 'tof')
				 	<li role="presentation" class="active">
				 @else
				 	<li role="presentation" class="">
				 @endif <a href="{{ url('quiz/'.$courseId.'/tof')}}"> True or False
					<span class="pull-right"> <i class="fa fa-dot-circle-o" aria-hidden="true"></i> </span> </a> </li>					
 				 @if($quizType == 'summary')
				 	<li role="presentation" class="active">
				 @else
				 	<li role="presentation" class="">
				 @endif <a href="{{ url('quiz/'.$courseId.'/summary')}}"> Summary Review Questions
				    <span class="pull-right"> <i class="fa fa-commenting-o" aria-hidden="true"></i> </span> </a> </li>					
				 @if($quizType == 'application')
				 	<li role="presentation" class="active">
				 @else
				 	<li role="presentation" class="">
				 @endif <a href="{{ url('quiz/'.$courseId.'/application')}}"> Application Question
				    <span class="pull-right"> <i class="fa fa-commenting-o" aria-hidden="true"></i> </span> </a> </li>				    
				</ul>
			</aside>		
			<section class="col-lg-9 quizPanel">
<!-- 				@if (session('message'))
	            	<div class="alert alert-success">
	                	{!! session('message') !!}
	                </div>
	            @endif -->

			  <div class="panel panel-info">
				<div class="panel-heading">
					<h4> {{$course->title}} {{$type}} Questions </h4>
				</div>

				<form class="form" method="POST" action="{{ URL::asset('quiz/'.$courseId.'/'.$quizType)}}" role="form">
					{{ csrf_field() }}
					<div class="panel-body">
						<div class="input input-group">
						@if (session('message'))			            	
			                {!! session('message') !!}			                
			            @else
							{!! $quizForm !!}				
			            @endif						
						</div>
					</div>
					<div class="panel-footer">
						<div class="btn-group">
							<button type="submit" class="btn btn-primary" name="submitAnswer" id="submitAnswer" value="Submit">Submit</button>
						</div>
					</div>				
				</form>
			   </div>
			 </section>
	    </div>
@stop
