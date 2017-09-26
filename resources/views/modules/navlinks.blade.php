          <li>
            <a href="{{ URL::asset('quiz')}}"> <i class="fa fa-book" aria-hidden="true"></i>
 Take Quiz  </a> 
          </li> 
 		    @if (Auth::user()->role < 1)
	          <li class="active">
	            <a href="{{ URL::asset('upload')}}"> <i class="fa fa-cloud-upload" aria-hidden="true"></i>
 Upload </a> 
	          </li>
	      @endif
          <li>
            <a href="{{ URL::asset('download')}}"> <i class="fa fa-cloud-download" aria-hidden="true"></i>
 Browse Modules </a> 
          </li>	
          <li>
            <a href="{{ URL::asset('logout')}}"> <i class="fa fa-sign-out" aria-hidden="true"></i>
 Log out </a> 
          </li>	          
