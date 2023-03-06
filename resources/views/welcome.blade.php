<x-layout>
    @if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
    @endif
    <div class="container-fluid text-center text-dark">
        <div class="row justify-content-center">
            
        </div>
    </div>
    {{-- @foreach ($articles as $article)
    @if ($article->id%2==0)
    <div id="card-a" class="container zoom my-5 bordo  w-50">
        <div class="row h-100">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row ">
                    {{-- colonna sinitra --}}
                    {{-- <div class="col-6 p-0 bordo-dx ">
                        <img src="{{Storage::url($article->img)}}" class="w-100 h-100" alt="">
                    </div> --}}
                    {{-- colonna destra --}}
                    {{-- <div class="col-6 ps-5 ">
                        <div class="pt-3">
                            <a class="text-dark mt-5 color-hv" href="{{route('article.byCategory' , ['category'=>$article->category->id])}}">{{$article->category->name}}</a>
                        </div>
                        <h2 class="pt-2">{{$article->title}}</h2>
                        <h6 class="pb-3">{{$article->subtitle}}</h6>
                        <p>
                            {{subStr($article->body, 0, 20)}}...
                        </p>
                        <div>
                            Redatto il: {{$article->created_at->format('d/m/Y')}} da <a class="text-dark color-hv" href="{{route('article.byUser' , ['user'=>$article->user->id])}}">{{$article->user->name}}</a>
                        </div>
                        <a href="{{route('article.show', compact('article'))}}" class="pt-1" type="submit">Leggi adesso<span class=""><i class="fa-solid arrow ps-3 fa-arrow-right-long"></i></span></a>
                    </div>
                </div> 
            </div>
        </div>
    </div> --}}
    
    
{{--     
    @else       
     
    
    <div id="card-a" class="container zoom my-5 bordo ">
        <div class="row h-100">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="row"> --}}
                    {{-- colonna sinitra --}}
                    {{-- <div class="col-6 ps-5 ">
                        <div class="pt-3">
                            <a class="text-dark mt-5 color-hv" href="{{route('article.byCategory' , ['category'=>$article->category->id])}}">{{$article->category->name}}</a>
                        </div>
                        <h2 class="pt-2">{{$article->title}}</h2>
                        <h6 class="pb-1">{{$article->subtitle}}</h6>
                        <p>
                            {{subStr($article->body, 0, 20)}}...
                        </p>
                        <div>
                            Redatto il: {{$article->created_at->format('d/m/Y')}} da <a class="text-dark color-hv" href="{{route('article.byUser' , ['user'=>$article->user->id])}}">{{$article->user->name}}</a>
                        </div>
                        <a href="{{route('article.show', compact('article'))}}" class="pt-2" type="submit">Leggi adesso<span class=""><i class="fa-solid arrow ps-3 fa-arrow-right-long"></i></span></a>
                    </div> --}}
                    {{-- colonna destra --}}
                    {{-- <div class="col-6 p-0 bordo-dx">
                        <img src="{{Storage::url($article->img)}}" class="w-100 h-100 " alt="">
                    </div>    
                </div> 
            </div>
        </div>
    </div>
    @endif
    
    @endforeach         --}}





        <!-- CARD INDEX E HOMEPAGE -->
        @foreach ($articles as $article)
        @if ($article->id%2==0)
        <div id="card-a" class="container zoom my-5 bordo vh-50">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="row ">
                        {{-- colonna sinitra --}}
                        <div class="col-6 p-0 bordo-dx rowclsx">
                            <img src="{{Storage::url($article->img)}}" class="w-100 imgvclsx " alt="">
                        </div>
                        {{-- colonna destra --}}
                        <div class="col-6 ps-5 ">
                            <div class="pt-3" id="iconContainer">
                                <a class="text-dark mt-5 color-hv " id="iconCategory" href="{{route('article.byCategory' , ['category'=>$article->category->id])}}">/  {{$article->category->name}}   <i class="{{$article->category->icon}} ps-1 fs-4"></i></a>
                            </div>
                            <h2 class="pt-5">{{$article->title}}</h2>
                            <h6 class="pb-3">{{$article->subtitle}}</h6>
                            <p>
                                {{subStr($article->body, 0, 50)}}...
                            </p>
                            <div>
                                Redatto il: {{$article->created_at->format('d/m/Y')}} da <a class="text-dark color-hv" href="{{route('article.byUser' , ['user'=>$article->user->id])}}">{{$article->user->name}}</a>
                            </div>
                            <a href="{{route('article.show', compact('article'))}}" class="pt-5" type="submit">Leggi adesso<span><i class="fa-solid arrow ps-3 fa-arrow-right-long"></i></span></a>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        
        @else       
        
        <div id="card-a" class="container zoom my-5 bordo vh-50">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="row">
                        {{-- colonna sinitra --}}
                        <div class="col-6 ps-5 ">
                            <div class="pt-3 ">
                                <a class="text-dark mt-5 color-hv " href="{{route('article.byCategory' , ['category'=>$article->category->id])}}">/ {{$article->category->name}}<i class="{{$article->category->icon}} ps-1 fs-4"></i></a>
                            </div>
                            <h2 class="pt-5">{{$article->title}}</h2>
                            <h6 class="pb-3">{{$article->subtitle}}</h6>
                            <p >
                                {{subStr($article->body, 0, 50)}}...
                            </p>
                            <div>
                                Redatto il: {{$article->created_at->format('d/m/Y')}} da <a class="text-dark color-hv" href="{{route('article.byUser' , ['user'=>$article->user->id])}}">{{$article->user->name}}</a>
                            </div>
                            <a href="{{route('article.show', compact('article'))}}" class="pt-5" type="submit">Leggi adesso<span class=""><i class="fa-solid arrow ps-3 fa-arrow-right-long"></i></span></a>
                        </div>
                        {{-- colonna destra --}}
                        <div class="col-6 p-0 bordo-dx rowclsx">
                            <img src="{{Storage::url($article->img)}}" class="w-100 imgvclsx" alt="">
                        </div>
                        
                    </div> 
                </div>
            </div>
        </div>
        @endif
        @endforeach    
</x-layout>