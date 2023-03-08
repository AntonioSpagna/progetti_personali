<x-layout>
    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    
    
  
    {{-- <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            <h1 class=" text-dark">
                {{$article->title}}
            </h1>
            <h2 class=" text-dark">{{$article->subtitle}}</h2>
        </div>
    </div>
    <div class="container-fluid p-5 ">
        <div class="row justify-content-center">
            
            <div class="col-12 justify-content-center d-flex align-items-center flex-column">   
                <div class=" col-12 col-md-10 col-lg-10 text-center">
                    <img src="{{Storage::url($article->img)}}" class="img-show rounded-start" alt="...">
                </div>
                <div class="col-8 ">
                    <div class="mt-5">
                        <p>{{$article->body}}</p> 
                    </div>  
                    <div class="">
                        Redatto il: {{$article->created_at->format('d/m/Y')}} da  <a class="text-dark color-hv" href="{{route('article.byUser' , ['user'=>$article->user->id])}}">{{$article->user->name}}</a>
                    </div>
                    <div class="mb-3 mt-2">                             
                        <a class="text-dark color-hv" href="{{route('article.byCategory' , ['category'=>$article->category->id])}}">/ {{$article->category->name}} <i class="{{$article->category->icon}} ps-1 fs-5"></i></a>
                    </div>
                    
                </div>
                <div class="pt-5 text-center">
                    @if (Auth::user() && Auth::user()->is_revisor)
                    @if ($article->is_accepted == NULL)
                    <a href="{{route('revisor.acceptArticle', compact('article'))}}" class="card-button btn-accept">Accetta Articolo</a>
                    <a href="{{route('revisor.rejectArticle', compact('article'))}}" class="card-button btn-discard">Rifiuta Articolo</a>
                    @else 
                  
                        <a href="{{route('revisor.undoArticle', compact('article'))}}" class="card-button btn-discard">Manda in revisione</a>
                        @endif
                        
                        @endif
                        <a class="card-button btn-return mt-2 mt-md-0" href="{{route('article.index')}}">Torna indietro</a>
                    
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container">
        {{-- row immagine e titolo --}}
        <div class="row justify-content-center align-content-center">
            <div  class="col-12 col-md-5 d-flex align-items-center p-0 ">
                <h1 class="fs-show text-dark">
                    {{$article->title}}
                </h1>
            </div>
            <div  class="col-12 col-md-7 p-0">
                <img src="{{Storage::url($article->img)}}" class="img-show" alt="...">
            </div>
        </div>
        {{-- row sottotitolo --}}
        <div class="row mt-4 ">
            <h3 class=" text-dark p-0"><i>"{{$article->subtitle}}"</i></h3>
        </div>
        {{-- row data --}}
        <div class="row border-top border-bottom span-data">            
            <span class="me-5">
               <i class="fa-solid fa-calendar-days">{{$article->created_at->format('d/m/Y')}} </i> 
            </span>
            <span class="me-5">
               <a class="text-dark color-hv" href="{{route('article.byUser' , ['user'=>$article->user->id])}}"><i class="fa-solid fa-pen-nib"></i>{{$article->user->name}}</a> 
            </span>
            <span class="ms-5">
                <i class="fa-solid fa-hourglass-half">1 minuto di lettura</i>
            </span>
                         
        </div>
    </div>









    
 {{-- <div id="progress-bar"></div>    --}}
</x-layout>