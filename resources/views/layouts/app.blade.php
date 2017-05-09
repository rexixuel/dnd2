<!Doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scripts -->
      <script src="js/jquery.min.js" type="text/javascript"> </script>
      <script src="js/dnd.js" type="text/javascript"> </script>
      <script src="js/modal.js"></script>      
      <script src="js/carousel.js"></script>      
    <!-- Fonts -->

    <!-- Stylesheets -->
      <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
      <link type="text/css" rel="stylesheet" href="css/dnd.css" />
      <link type="text/css" rel="stylesheet" href="css/font-awesome.css" />
        <title> {{$title}} </title>
    </head>
    <body class="container">
      <nav class="nav">
        <ul class="nav nav-justified"> 
          <li>
            <a href="{{ URL::asset('about')}}"> <i class="fa fa-info-circle" aria-hidden="true"></i>
About </a> 
          </li>
          <li>
            <a href="{{ URL::asset('faqs')}}"> <i class="fa fa-question-circle" aria-hidden="true"></i>

FAQs </a> 
          </li>
          @if (Auth::check())              
              @include('modules.navlinks')
          @else
            <li>
              <a href="{{ url('/login') }}"> <i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
            </li>
            <li>
              <a href="{{ url('/register') }}"> <i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
            </li>
          @endif          
        </ul>      
      </nav>
      <nav class="navbar">
        <div class="container-fluid">
          <header class="navbar-header">
            <a href="/" class="navbar-brand center-block"> <img src="img/tmc_logo.png" class="img-responsive navbar-left"/> 
            <h1 class="navbar-right"> Technology Management Center </h1>
            <h4> University of the Philippines, Diliman</h3> </a>
          </header>        
        </div>
      </nav>
      <section>
        @yield('content')       
      </section>

      <footer class="footer">
        <div class="col-xs-4">
           <small> <p class="text-left"> Copyright <i class="glyphicon glyphicon-copyright-mark"> </i>  MTM </p>
          </small> 
          <div class="clear"> </div>
        </div>
        <div class="col-xs-8">
          <small> <p class="text-right"> Comprehensive Exam Online Learning Tool <br />
           All Rights Reserved </p> </small>          
        </div>          
      
      </footer>

    </body>
</html>
