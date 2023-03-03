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
</x-layout>