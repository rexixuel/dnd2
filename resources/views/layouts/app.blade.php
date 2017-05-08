<!Doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scripts -->
      <script src="js/jquery.min.js" type="text/javascript"> </script>
      <script src="js/dnd.js" type="text/javascript"> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>      
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
            <a href="{{ URL::asset('about')}}"> About </a> 
          </li>
          <li>
            <a href="{{ URL::asset('faqs')}}"> FAQs </a> 
          </li>
          @if (Auth::check())              
              @include('modules.navlinks')
          @else
            <li>
              <a href="{{ url('/login') }}">Login</a>
            </li>
            <li>
              <a href="{{ url('/register') }}">Register</a>
            </li>
          @endif          
        </ul>      
      </nav>
      <nav class="nav nav-header">
        <header class="nav navbar-header">
          <a href="/" class="navbar-brand center-block"> <img src="img/tmclogo3.png" class="img-responsive"/>  </a>
        </header>        
      </nav>
      <section>
        @yield('content')       
      </section>

      <footer class="footer">
        <div class="col-xs-4">
           <p class="text-left footer-text"> Copyright <i class="glyphicon glyphicon-copyright-mark"> </i>  Team Dimaunahan 
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
