<!Doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Fonts -->
		<!-- Stylesheets -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
		<link type="text/css" rel="stylesheet" href="css/dnd.css" />
        <title> @yield('titlePage') </title>
    </head>
    <body class="container-fluid home-background">
    	<nav class="nav nav-header">
	    	<header class="nav navbar-header">
	    		<a href="/" class="navbar-brand"> <img src="img/UP_Open_University_logo.png" /> University of the Philippines - M Tech Management </a>
	    	</header>
	    	<ul class="nav navbar-nav navbar-right"> 
	    		<li>
	    			<a href="{{ URL::asset('about')}}"> About </a> 
	    		</li>
	    		<li>
	    			<a href="{{ URL::asset('faqs')}}"> FAQs </a> 
	    		</li>
	    		@yield('navLinks')
	    	</ul>
    	</nav>
    	<section class="row">
			@yield('content')    		
	    </section>

        <footer class="row footer-landing">
          <div class="col-xs-4">
             <p class="text-left footer-text"> Copyright <i class="glyphicon glyphicon-copyright-mark"> </i>  Team Dimaunahan <br />
            MTM
            </p> 
            <div class="clear"> </div>
          </div>
          <div class="col-xs-8">
            <p class="text-right footer-text"> Comprehensive Exam Drag and Drop <br />
             All Rights Reserved </p>

            <div class="clear"> </div>
          </div>          
        </footer>

    </body>
</html>