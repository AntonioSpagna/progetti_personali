<x-layout>
    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    <div class="container-fluid text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="text-dark ">
                Aulab Post
            </h1>
        </div>
    </div>
    <div class="container-fluid p-3 text-center text-dark">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card" style="width: 18rem">
                        <img class="card-img-top" src="{{Storage::url($article->img)}}" alt="">
                        <div class="card-details">
                          <p class="text-title">{{$article->title}}</p>
                          <p class="text-title">{{$article->subtitle}}</p>
                          <p class="text-title">{{$article->category->name}}</p>     
                          <a  class="color-hv text-dark" href="{{route('article.byCategory' , ['category'=>$article->category->id])}}">{{$article->category->name}}</a>                     
                        </div>
                        <div>
                            Redatto il: {{$article->created_at->format('d/m/Y')}} da <a class="color-hv text-dark" href="{{route('article.byUser' , ['user'=>$article->user->id])}}">{{$article->user->name}}</a> 
                        </div>
                        <button type="submit" class="card-button" href="{{route('article.show', compact('article'))}}">Leggi</button>
                      </div>
                </div>
               
            @endforeach
        </div>
    </div>
</x-layout>