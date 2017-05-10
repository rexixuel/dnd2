@extends('layouts.app',['title' => 'Home'])
@section ('content')
		<div class="container-fluid">
			<section class="jumbotron"> 
				<h2> MTM Online Comprehensive Exam Learning Tool </h2>
				<small> Welcome to the comprehensive exam learning tool for MTM students </small>  
			</section>
			<div id="carousel-news" class="carousel slide carousel-news" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active"> 
			      <img src="https://images.unsplash.com/photo-1453873623425-04e3561289aa?dpr=1&auto=format&fit=crop&w=1500&h=980&q=80&cs=tinysrgb&crop=&bg=" alt="This is news 1">
			      <div class="carousel-caption">
			        <h1> News 1 </h1>
						<p> Bacon ipsum dolor amet spare ribs pastrami filet mignon cupim pancetta. Strip steak ribeye kielbasa leberkas turkey  </p>
			      </div>
			    </div>
			    <div class="item"> 
			      <img src="https://images.unsplash.com/photo-1475085807956-5e76cdaf6639?dpr=1&auto=compress,format&fit=crop&w=1199&h=899&q=80&cs=tinysrgb&crop=&bg=" alt="This is news 2">
			      <div class="carouselOpacity">
			        <div class="carousel-caption">
			          <h1> News 2 </h1>
						<p> Bacon ipsum dolor amet spare ribs pastrami filet mignon cupim pancetta. Strip steak ribeye kielbasa leberkas turkey  </p>
			        </div>
			      </div>
			    </div>			    
			  </div>
			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-news" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-news" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
	    </div>
@stop