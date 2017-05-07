<!DOCTYPE html >
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <link rel="stylesheet" href="{{ URL::asset('css/dnd.css') }}" />
      <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}" />
      @yield('titlePage')

    </head>

    <body class = "">
      <div class="container-fluid">
      <nav class="nav nav-header">
        <header class="nav navbar-header">
          <a href="/" class="navbar-brand navbar-left"> <img src="img/tmclogo3.png" />  </a>
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

        <footer class="row footer">
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

      </div>
      <script src="{{ URL::asset('/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"> </script>      
      <script src="{{ URL::asset('/node_modules/bootstrap/dist/js/npm.js') }}"> </script>
      <script src="{{ URL::asset('/dist/js/material.min.js') }}"> </script>
      <script src="{{ URL::asset('/dist/js/ripples.min.js') }}"> </script>              
      <script src="{{ URL::asset('/dist/js/ripples.min.js') }}"> </script>              
      <script src="{{ URL::asset('/dist/js/bootstrap-material-datetimepicker.js') }}"></script>
      <script src="{{ URL::asset('/dist/js/jquery.maskedinput.min.js') }}"></script>
      <script>
        $.material.init();
        @if(!Auth::guest())
            @yield('sidebarScript')
        @endif
      </script>
    </body>
</html> 
