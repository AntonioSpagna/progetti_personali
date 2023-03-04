<x-layout>
    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    <div class="container-fluid p-5 text-center text-white">
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
                    <div class="text-center">
                         <img src="{{Storage::url($article->img)}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-8 ">
                         
                     <div class="mt-5">
                        <p>{{$article->body}}</p> 
                     </div>  
                     <div class="">
                          Redatto il: {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                     </div>
                     <div class="mb-3 mt-2">                             
                      <a class="text-dark color-hv" href="{{route('article.byCategory' , ['category'=>$article->category->id])}}">{{$article->category->name}}</a>
                      </div>
                     <a class="card-button btn" href="{{route('article.index')}}">Torna indietro</a>
                    </div>
                 
                    
                    
                    {{-- <div class="card">
                        <img src="{{Storage::url($article->img)}}" alt="">
                        <div class="card-details">
                          <p class="text-title">{{$article->title}}</p>
                          <p class="text-title">{{$article->subtitle}}</p>
                          <p class="text-title">{{$article->category->name}}</p>                          
                        </div>
                        <div>
                            Redatto il: {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                        </div>
                        <button class="card-button" href="">Leggi</button>
                      </div> --}}
                </div>
           
        </div>
    </div>
</x-layout>