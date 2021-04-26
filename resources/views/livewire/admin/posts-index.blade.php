<div class="card">
    <div class="card-header">
        <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre de un post">
    </div>
    @if ($posts->count())    
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col"
                        class="cursor:pointer w-24 px-6 py-3 text-left text-gray-500 uppercase tracking-wider"
                        wire:click="order('id')" cursor:pointer>
                            ID
                            @if ($sort == 'id')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th scope="col"
                        class="cursor-pointer px-6 py-3 text-left text-gray-500 uppercase tracking-wider"
                        wire:click="order('name')">
                            Nombre
                            @if ($sort == 'id')
                                @if ($direction == 'asc')
                                    <i class="fas fa-sort-alpha-up-alt float-right mt-1"></i>
                                @else
                                    <i class="fas fa-sort-alpha-down-alt float-right mt-1"></i>
                                @endif
                            @else
                                <i class="fas fa-sort float-right mt-1"></i>
                            @endif
                        </th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->name}}</td>
                            <td with="10px">
                                <a class="btn btn-outline-info btn-sm" href="{{route('admin.posts.edit',$post)}}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td with="10px">
                                <form action="{{route('admin.posts.destroy', $post)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <span class="float-right">
                {{$posts->links()}}
            </span>
        </div>
    @else
    <div class="card-body">
        <strong>
            No existe ninguna coincidencia ...
        </strong>
    </div>
    @endif
</div>
