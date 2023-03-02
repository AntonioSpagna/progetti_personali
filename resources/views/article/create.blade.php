<x-layout>
    <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Crea Articolo
            </h1>
        </div>
    </div>
    <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            <div class="login-box">
 
                <form method="POST" action="{{route('article.store')}}">
                  <div class="user-box">
                    <input type="text" name="title">
                    <label>Titolo</label>
                  </div>
                  <div class="user-box">
                    <input type="text" name="subtitle" >
                    <label>Sottotitolo</label>
                  </div>
                  <div class="user-box">
                        <textarea name="body" id="" cols="30" class="form-control" rows="10"></textarea>
                    <label>Descrizione</label>
                  </div>
                  <div class="user-box">
                    <input type="file" name="img">
                    <label>Immagine</label>
                </div>
                <div class="user-box">
                    <select name="category" class="form-control" >
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    <label>Categorie</label>
                </div>
                  <center>
                  <a href="#">
                         SEND
                     <span></span>
                  </a></center>
                </form>
              </div>
        </div>
    </div>
</x-layout>