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

        <div class="container-fluid">

            <div class="navb-logo">
                <img src="{{Storage::url('/img/default.jpg')}}" alt="Logo">
            </div>

            <div class="navb-items d-none d-lg-flex d-xl-flex">

                <div class="item">
                    <a href="/">Home</a>
                </div>

                <div class="item">
                    <a href="/services">Services</a>
                </div>

                <div class="item">
                    <a href="/cases">Cases</a>
                </div>

                <div class="item">
                    <a href="/about">About</a>
                </div>

                <div class="item-button">
                    <a href="/contact" type="button">Let's talk</a>
                </div>
            </div>

            <!-- Button trigger modal -->
            <div class="mobile-toggler d-lg-none">
                <a href="#" data-bs-toggle="modal" data-bs-target="#navbModal">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="navbModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-header">
                            <img src="/img/logo-variant.png" alt="Logo">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
                        </div>

                        <div class="modal-body">
                            
                            <div class="modal-line">
                                <i class="fa-solid fa-house"></i><a href="/">Home</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-bell-concierge"></i><a href="/services">Services</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-file-lines"></i> <a href="/cases">Cases</a>
                            </div>

                            <div class="modal-line">
                                <i class="fa-solid fa-circle-info"></i><a href="/about">About</a>
                            </div>

                            <a href="/contact" class="navb-button" type="button">Let's talk</a>
                        </div>

                        <div class="mobile-modal-footer">
                            
                            <a target="_blank" href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a target="_blank" href="#"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header> --}}

    


    




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
      <a class="navbar-brand " href="#"><img class="logo" src="{{Storage::url('/img/logo.png')}}" alt=""></a>
      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-3 mb-lg-0">
          <li class="nav-item px-3">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="{{route('article.index')}}">Articoli</a>
          </li>
          <li class="nav-item dropdown px-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorie
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach ($categories as $category)
                  <li><a class="dropdown-item" href="{{route('article.byCategory' , ['category'=>$category->id])}}">{{$category->name}} <i class="{{$category->icon}} fs-5"></i></a></li>
              @endforeach  
            </ul>
          </li>
          @guest
          
          <li class="nav-item dropdown px-3">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Accedi
            </a>
            <ul class="dropdown-menu menu-drop">
              <li><a class="dropdown-item link-drop" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item link-drop" href="{{route('login')}}">Login</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link px-3" href="{{route('careers')}}">Invia la tua email</a>
          </li>   
          @else
          
          <li class="nav-item dropdown px-3">
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
                
          <li class="nav-item px-3">
            <a class="nav-link" href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
          </li>
        </ul>
        <a class="btn ms-2 button_Nav" href="{{route('article.create')}}">Crea articolo</a>
        @endguest
      </div>
    </div>
  </nav>   