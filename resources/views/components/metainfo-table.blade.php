<div class="table-responsive">
    <table class="table align-middle">
        <thead>
            <tr>
                <th class="fixed-width" scope="col">#</th>
                <th class="fixed-width" scope="col">Nome Tag</th>
                <th class="fixed-width" scope="col">Q.ta Articoli collegati</th>
                <th class="fixed-width" scope="col">Aggiorna</th>
                <th class="fixed-width" scope="col">Cancella</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($metaInfos as $metaInfo)
            <tr>
                <th scope="row">{{$metaInfo->id}}</th>  
                <td>{{$metaInfo->name}}</td>
                <td>{{count($metaInfo->articles)}}</td>
                @if ($metaType == 'tags')
                <td>
                    <form action="{{route('admin.editTag',['tag' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="Nuovo nome Tag" class="form-control w-50 d-inline">
                        <button class="btn" type="submit">Aggiorna</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn" type="submit">Elimina</button>
                    </form>
                </td>
                @else
                <td>
                    <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <input type="text" name="name" placeholder="Nuovo nome Categoria" class="form-control w-50 d-inline">
                        <button class="btn" type="submit">Aggiorna</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.deleteCategory' , ['category' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn" type="submit">Elimina</button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>