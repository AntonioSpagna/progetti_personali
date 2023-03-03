<x-layout>
    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1 text-dark">
                Aulab Post
            </h1>
        </div>
    </div>
    <div class="container-fluid p-5 text-center ">
        <div class="row justify-content-center">
           
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card mb-3" style="max-width: 1500px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="{{Storage::url($article->img)}}" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">{{$article->title}}</h5>
                              <h5 class="card-title">{{$article->subtitle}}</h5>
                              <p class="text-title">{{$article->category->name}}</p>
                              <p>{{$article->body}}</p>                             
                            </div>
                            <div>
                                Redatto il: {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                            </div>
                            <button class="card-button" href="{{route('article.index')}}">Torna indietro</button>
                          </div>
                        </div>
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