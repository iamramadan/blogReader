<nav class="navbar navbar-expand-lg navbar-white">
    <a class="navbar-brand order-1" href="{{ route('home') }}">
      <img class="img-fluid" width="100px" src="images/logo.png"
        alt="Reader | Hugo Personal Blog Template">
    </a>
    <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="{{ route('home') }}" >
             <i class="ti-home ml-1"></i>
          </a>
          
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            About <i class="ti-angle-down text-lg ml-1"></i>
          </a>
          <div class="dropdown-menu">
            
            <a class="dropdown-item" href="{{ route('about-me') }}">About Me</a>
            
            {{-- <a class="dropdown-item" href="about-us.html">About Us</a> --}}
            
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('contacts')}}">Contact</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">Pages <i class="ti-angle-down ml-1"></i>
          </a>
          <div class="dropdown-menu">
            
            {{-- <a class="dropdown-item" href="author.html">Author</a> --}}
            
            {{-- <a class="dropdown-item" href="author-single.html">Author Single</a> --}}

            {{-- <a class="dropdown-item" href="advertise.html">Advertise</a> --}}
            
            {{-- <a class="dropdown-item" href="{{ route('blog-detail')}}">Post Details</a> --}}
            
            {{-- <a class="dropdown-item" href="post-elements.html">Post Elements</a> --}}
            
            {{-- <a class="dropdown-item" href="t">Tags</a> --}}
            {{-- <a class="dropdown-item" href="search-not-found.html">Search Not Found</a> --}}
            
            <a class="dropdown-item" href="{{route('privacy_policy')}}">Privacy Policy</a>
            
            <a class="dropdown-item" href="{{route('term-and-conditions')}}">Terms Conditions</a>
            
          </div>
        </li>

    
        @auth
        <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary btn-sm text-white">logout</button>
            </form>
        </li>
        @endauth
      </ul>
    </div>

    <div class="order-2 order-lg-3 d-flex align-items-center">
      <select class="m-2 border-0 bg-transparent" id="select-language">
        <option id="en" value="" selected>En</option>
        <option id="fr" value="">Fr</option>
      </select>
      
      <!-- search -->
      <form class="search-bar">
        <input id="search-query" name="s" type="search" placeholder="Type &amp; Hit Enter...">
      </form>
      
      <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse" data-target="#navigation">
        <i class="ti-menu"></i>
      </button>
    </div>

    {{-- @guest --}}
        
   
    {{-- @endguest --}}
    {{-- {{route('logout')}} --}}
    {{-- @endauth --}}

  </nav>