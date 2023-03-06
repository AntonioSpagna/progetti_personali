<x-layout>
    <div class="container-fluid p-5 text-center ">
        <div class="row  justify-content-center">
            <h1 class="">
                Utente {{$user->name}}
            </h1>
        </div>
    </div>
    <div class="container-fluid p-5 text-center ">
        <div class="row justify-content-center ">
            @foreach ($articles as $article)
                <div class="col-12 col-md-8 col-lg-6 d-flex justify-content-center">
                    <div class="card">
                        <img src="{{Storage::url($article->img)}}" alt="" class="card-img-top">
                        <div class="card-details">
                          <h4 class="text-title">{{$article->title}}</h4>
                          <h6 class="text-title">{{$article->subtitle}}</h6>
                          <a class="text-dark mt-5 color-hv" href="{{route('article.byCategory' , ['category'=>$article->category->id])}}">{{$article->category->name}}</a>                          
                        </div>
                        <div>
                            Redatto il: {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                        </div>
                        <a type="submit" class="card-button btn" href="{{route('article.show', compact('article'))}}">Leggi</a>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>