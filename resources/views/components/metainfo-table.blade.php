<div class="table-responsive">
    <table class="table align-middle ">
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
            <tr >
                <th scope="row">{{$metaInfo->id}}</th>  
                <td>{{$metaInfo->name}}</td>
                <td>{{count($metaInfo->articles)}}</td>
                @if ($metaType == 'tags')
                <td>
                    <form action="{{route('admin.editTag',['tag' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <input type="text" name="name" placeholder="Nuovo nome Tag" class="form-control w-75 d-inline">
                            <a type="submit"><i  id="myicon5" class="fa-solid fa-square-check fs-4 mt-1"></i></a>
                            <a id="mybottone5" class="btn mt-1" type="submit">Aggiorna</a>
                        </div>
                        
                    </form>
                </td>
                <td>
                    <form  action="{{route('admin.deleteTag', ['tag' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="text-center">
                            <a  type="submit"><i id="myicon6" class="fa-solid fa-trash-can"></i></a>
                        </div>                     
                        
                        <a id="mybottone6" class="btn" type="submit">Elimina</a>
                    </form>
                </td>
                @else
                <td>
                    <form action="{{route('admin.editCategory', ['category' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="d-flex flex-column align-items-center align-items-lg-start">
                            <input type="text" name="name" placeholder="Nuovo nome Categoria" class="form-control w-75 d-inline">
                            <a type="submit"><i  id="myicon7" class="fa-solid fa-square-check fs-4 mt-1"></i></a>
                            <a id="mybottone7" class="btn mt-1" type="submit">Aggiorna</a>
                        </div>
                    </form>
                </td>
                <td>
                    <form action="{{route('admin.deleteCategory' , ['category' => $metaInfo])}}" method="POST">
                        @csrf
                        @method('delete')
                        <div class="text-center">
                            <a  type="submit"><i id="myicon8" class="fa-solid fa-trash-can"></i></a>
                        </div>
                        <a id="mybottone8" class="btn" type="submit">Elimina</a>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
    </table>
</div>