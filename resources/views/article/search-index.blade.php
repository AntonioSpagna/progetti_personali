<x-layout>
<div class="container-fluid p-5 text-center">
    <div class="row justify-content-center">
        <h1>
            Tutti gli articoli per: {{$query}}
        </h1>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
       @foreach ($articles as $article)
           <div class="col-12 col-md-8 col-lg-6">
            <div class="card">
                <img src="{{Storage::url($article->img)}}" alt="" class="card-img-top ">
                <div class="card-details">
                  <h4 class="text-title">{{$article->title}}</h4>
                  <h6 class="text-title">{{$article->subtitle}}</h6>
                  <p class="text-title">{{$article->category->name}}</p>                          
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