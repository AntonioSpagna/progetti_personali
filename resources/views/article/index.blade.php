<x-layout>
    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    <div class="container-fluid p-5 text-center text-dark">
        <div class="row justify-content-center">
            <h1 class="display-1 text-dark">
                Tutti gli articoli
            </h1>
        </div>
    </div>
    <div class="container-fluid p-5 text-center text-dark">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card" style="width: 18rem">
                        <img class="card-img-top" src="{{Storage::url($article->img)}}" alt="">
                        <div class="card-details">
                          <p class="text-title">{{$article->title}}</p>
                          <p class="text-title">{{$article->subtitle}}</p>
                          <p class="text-title">{{$article->category->name}}</p>  
                          <a class="text-dark color-hv" href="{{route('article.byCategory' , ['category'=>$article->category->id])}}">{{$article->category->name}}</a>                        
                        </div>
                        <div>
                            Redatto il: {{$article->created_at->format('d/m/Y')}} da <a class="text-dark color-hv" href="{{route('article.byUser' , ['user'=>$article->user->id])}}">{{$article->user->name}}</a>
                        </div>
                        <a type="submit" class="card-button btn" href="{{route('article.show', compact('article'))}}">Leggi</a>
                      </div>
                </div>
                
            @endforeach
        </div>
    </div>
</x-layout>