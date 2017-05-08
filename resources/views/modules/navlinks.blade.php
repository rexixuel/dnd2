          <li>
            <a href="{{ URL::asset('quiz')}}"> Take Quiz </a> 
          </li> 
 		    @if (Auth::user()->role < 1)
	          <li class="active">
	            <a href="{{ URL::asset('upload')}}"> Upload </a> 
	          </li>
	      @endif
          <li>
            <a href="{{ URL::asset('download')}}"> Download </a> 
          </li>	
          <li>
            <a href="{{ URL::asset('logout')}}"> Log out </a> 
          </li>	          
