		<nav class="">
			<ul class="nav nav-tabs">
			  @foreach ($courses as $course)
			  	@if ($course->id == $courseId)
			  		<li role="presentation" class="active"><a href="{{ URL::asset($link.'/'.$course->id) }}"> {{$course->title}} </a></li>
			  	@else
			  		<li role="presentation"><a href="{{ URL::asset($link.'/'.$course->id) }}"> {{$course->title}} </a></li>
			  	@endif
			  @endforeach
			</ul>
		</nav>