{{-- <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled">Disabled</a>
      </div>
    </div>
  </div>
</nav> --}}


  <div id="mainNavigation" class="bg-secondary">
    <nav role="navigation">
      <div class="py-3 text-center border-bottom">
        <img src="{{Storage::url('/img/logo-navbar.png')}}" alt="" class="invert logo">
      </div>
    </nav>
    <div class="navbar-expand-md bg-secondary">
      <div class="navbar-dark text-center my-2">
        <button class="navbar-toggler w-75" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span> <span class="align-middle">Menu</span>
        </button>
      </div>
      <div class="text-center  mt-3 collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto ">
          
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Destinations</a>
          </li>
          @guest
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accedi
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
            </ul>
          </li>
          @else
          <li class="nav-item me-3">
            <a class="nav-link btn text-white btn-dark px-2" href="{{route('article.create')}}">Inserisci articoli</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Benvenuto {{Auth::user()->name}}</a>
            <ul class="dropdown-menu">
              <li class="nav-link">
                <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
              </li>
              <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
              </form>
            </ul>
          </li>
          @endguest
          
        </ul>
      </div>
    </div>
  </div>
  
  {{-- <header>
    <div class="container-navbar bg-navbar">
      <nav>
        <div class="menu-icons"><i class="icon ion-md-menu"></i>
          <i class="icon ion-md-close"></i>
        </div>
        <a href="index.html" class="logo">
          <img src="{{Storage::url('/img/logo.png')}}" alt="" class="invert mt-0 pt-0 logo">
        </a>
        <ul class="nav-list">
          <li><a href="">Home</a>
          </li>
          <li>
            <a href="">Articoli
              <i class="icon ion-md-arrow-dropdown"></i>
            </a>
          </li>
          <li>
            <a href="">Accedi
              <i class="icon ion-md-arrow-dropdown"></i>
            </a>
            <ul class="sub-menu">
              <li>
                <a href="">Registrati</a>
              </li>
              <li>
                <a href="">Login</a>
              </li>
            </ul>
          </li> 
          <li class="move-right btn"><a href="">Inserisci articolo</a>
          </li>
        </ul>
        
        
      </nav>
      
      <div class="d-flex h-50 justify-content-center align-items-center">
        <p class="aulab-post text-white text-center">The Aulab Post</p>
      </div> 
    </div> 
  </header>
   --}}