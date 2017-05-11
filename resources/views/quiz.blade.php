@extends('layouts.app',['title' => 'Quiz'])

@section ('content')
		
		<div class="container-fluid">
			@if (session('message'))
            	<div class="alert alert-success">
                	{!! session('message') !!}
                </div>
            @endif                    									
			<form class="form" method="POST" action="quiz" role="form">
				{{ csrf_field() }}
				<div class="input input-group">
				{!! $quizForm !!}				
				</div>
				<div class="btn-group">
					<button type="submit" class="btn btn-primary" name="submitAnswer" id="submitAnswer" value="Submit">Submit</button>
				</div>
			</form>
	    </div>
@stop
