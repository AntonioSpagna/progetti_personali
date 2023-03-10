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


  {{-- <div id="mainNavigation" class="bg-navbar">
    <nav role="navigation">
      <div class="py-3 text-center border-bottom">
        <img src="{{Storage::url('/img/logo-navbar.png')}}" alt="" class="invert logo">
      </div>
    </nav>
    <div class="navbar-expand-md ">
      <div class="navbar-dark text-center my-2">
        <button class="navbar-toggler w-75" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span> <span class="align-middle">Menu</span>
        </button>
      </div>
      <div class="text-center text-white mt-3 collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav mx-auto ">
          
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Articoli</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($categories as $category)
                  <li><a class="dropdown-item" href="{{route('article.byCategory' , ['category'=>$category->id])}}">{{$category->name}} <i class="{{$category->icon}} fs-5"></i></a></li>
              @endforeach  
            </ul>
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
  </div> --}}
  

 




    




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
  

 <nav id="Main_Navbar" class="navbar  navbar-expand-lg p-0">
    <div class="container-fluid">
      <a class="navbar-brand " href="{{route('homepage')}}"><img class="logo" src="{{Storage::url('/img/logo.png')}}" alt=""></a>
      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-3 mb-lg-0">
          <li class="nav-item px-1">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-1 px-lg-3" href="{{route('article.index')}}">Articoli</a>
          </li>
           <li class="nav-item dropdown px-1">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($categories as $category)
                  <li class="dropdown-item"><a  href="{{route('article.byCategory' , ['category'=>$category->id])}}"><i class="{{$category->icon}} fs-5 pe-2"></i> {{$category->name}} </a></li>
              @endforeach  
            </ul>
          </li> 
          
          @guest
          
          <li class="nav-item dropdown px-1 px-md-3">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accedi
            </a>
            <ul class="dropdown-menu menu-drop">
              <li><a class="dropdown-item link-drop" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item link-drop" href="{{route('login')}}">Login</a></li>
            </ul>
          </li>
          @else
          @if (Auth::user()->is_admin || Auth::user()->is_revisor)
          <li class="nav-item dropdown px-1">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Dashboards
            </a>
            <ul class="dropdown-menu menu-drop">
              @if (Auth::user()->is_admin)
            <li class="nav-item">
              <a class="dropdown-item link-drop" href="{{route('admin.dashboard')}}">Dashboard Admin</a>
            </li> 
           @endif
           @if (Auth::user()->is_revisor)
            <li class="nav-item">
              <a class="dropdown-item link-drop " href="{{route('revisor.dashboard')}}">Dashboard Revisore</a>
            </li> 
           @endif
            </ul>
          </li>
          @endif
          <li class="nav-item">
            <a class="nav-link px-1" href="{{route('careers')}}">Lavora con noi</a>
          </li>  
           
          <li class="nav-item dropdown px-1">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Benvenuto {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu menu-drop">
              <a href="{{route('logout')}}" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a> 
              <form id="logout-form" action="{{route('logout')}}" method="POST" class="d-none">
                @csrf
              </form>             
            </ul>
          </li>
        </ul>
    
        
            
         
        <a class="btn mx-2 mx-md-4 button_Nav mb-3 mb-xl-0" href="{{route('article.create')}}">Crea articolo</a>
        @endguest
        <div id="myModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <form class="d-flex mb-3 mb-md-0" action="{{route('article.search')}}" method="GET">
              <input type="search" class="form-control me-2" name="query" placeholder="Cosa cerchi" aria-label="Search">
              <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
          </div>
        </div>
            
                <button id="myBtn" class="btn-search me-md-3" type="submit"><i class="fa-solid fa-magnifying-glass fs-4"></i></button> 

            
      </div>
    </div>
  </nav>    
 

  





