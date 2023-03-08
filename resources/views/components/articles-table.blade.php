<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titolo</th>
        <th scope="col">Sottotitolo</th>
        <th scope="col">Redattore</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{$article->title}}</td>
            <td>{{$article->subtitle}}</td>
            <td>{{$article->user->name}}</td>
            <td class="d-flex justify-content-around">
                @if(is_null($article->is_accepted))
                <a href="{{route('article.show', compact('article'))}}" class="btn">Leggi l'articolo</a>
                @else 
                <a href="{{route('revisor.undoArticle', compact('article'))}}" class="btn">Riporta in revisione</a>
                @endif
                
            </td>
          </tr>
        @endforeach
      
    </tbody>
  </table>