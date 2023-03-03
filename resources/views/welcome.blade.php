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
    <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="card">
                        <img src="{{Storage::url($article->img)}}" alt="">
                        <div class="card-details">
                          <p class="text-title">{{$article->title}}</p>
                          <p class="text-title">{{$article->subtitle}}</p>
                          <p class="text-title">{{$article->category->name}}</p>                          
                        </div>
                        <div>
                            Redatto il: {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                        </div>
                        <button type="submit" class="card-button" href="{{route('article.show', compact('article'))}}">Leggi</button>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>