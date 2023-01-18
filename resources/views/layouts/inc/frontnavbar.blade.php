<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Radana</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('category')}}">Category</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="{{url('cart')}}">Cart</a>
        </li> 



          @guest
           @if(Route::has('login'))
             <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">{{__('Login')}}</a>
             </li>     
           @endif
           @if(Route::has('register'))
             <li class="nav-item">
              <a class="nav-link" href="{{route('login')}}">{{__('Register')}}</a>
             </li>     
           @endif

           @else
           <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">{{Auth::user()->name}}</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Profile</a><br>
                                    <a class="dropdown-item" href="#">Setting</a>
                                    
                                    <div class="divider"></div>
                                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                      </form>
                                </div>
                            </li>

          @endguest
      
     
        
      </ul>
    </div>
  </div>
</nav>



