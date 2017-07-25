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
      <script src="{{ asset('js/collapse.js')}}"></script>
      <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <!-- Fonts -->

    <!-- Stylesheets -->
      <link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('css/dnd.css')}}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('css/font-awesome.css')}}" />
        <title> {{$title}} </title>
    </head>
    <body class="container ">
     <div class="bg-blurred">
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <nav class="navbar">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
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
              </div>
              <div class="navbar-left">
                <a href="/" class="navbar-brand"> 
                  <img src="{{ asset('img/mtm_logo.jpg')}}" class="img-responsive center-block"/> 
                </a>
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed navbar-right" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                </button>
              </div>              

                <a href="/" class="pull-left">  <h1 class=""> Technology Management Center </h1> 
                <h4 class="text-left"> University of the Philippines, Diliman</h4>
                </a>
              </div>
            </nav>
          </div>
        </div>
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
