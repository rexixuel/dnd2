<!Doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Scripts -->
      <script src="{{ asset('js/jquery.min.js')}}" type="text/javascript"> </script>
      <script src="{{ asset('js/dnd.js')}}" type="text/javascript"> </script>
      <script src="{{ asset('js/modal.js')}}"></script>      
      <script src="{{ asset('js/carousel.js')}}"></script>
      <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <!-- Fonts -->

    <!-- Stylesheets -->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('css/dnd.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.css')}}" />
        <title> {{$title}} </title>
    </head>
    <body class="container">
     <div class="bg-blurred">
      <div class="content">
        <nav class="nav navbar">
          <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
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
            <a href="/" class="navbar-brand center-block"> 
              <img src="{{ asset('img/mtm_logo.jpg')}}" class="img-responsive navbar-left"/> 
            </a>
            <div class="nav navbar-left">
              <a href="/" class="">  <h1 class=""> Technology Management Center </h1> 
              <h4 class="text-left"> University of the Philippines, Diliman</h4>
              </a>
            </div>
          </div>
        </nav>
        <div class="row">
<!--           <div class="col-md-2 col-md-offset-10">
            <h4 class="text-center"> Hi {{ Auth::user()->first_name }}! </h4>
          </div>
 -->        </div>
        <section>
          @yield('content')       
          <footer class="footer">
            <div class="col-xs-4">
               <small class="input-group"> 
                  <a href="/" class="btn btn-link btn-sm"> Home </a>
                  <a href="{{ asset('about') }}" class="btn btn-link btn-sm" > About </a>
                  <a href="{{ asset('contact') }}" class="btn btn-link btn-sm"> Contact Us </a>
              </small> 
              <div class="clear"> </div>
            </div>
            <div class="col-xs-8">
              <small> <p class="text-right"> Compass <br />
               All Rights Reserved </p> </small>          
            </div>                  
          </footer>
        </section>
      </div>
     </div> 
    </body>
</html>
