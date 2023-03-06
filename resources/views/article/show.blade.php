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
                <div class=" col-8 text-center">
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
                        <a class="text-dark color-hv" href="{{route('article.byCategory' , ['category'=>$article->category->id])}}">{{$article->category->name}} <i class="{{$article->category->icon}} ps-1 fs-5"></i></a>
                    </div>
                    <a class="card-button btn" href="{{route('article.index')}}">Torna indietro</a>
                </div>
            </div>
        </div>
    </div>
    

</x-layout>