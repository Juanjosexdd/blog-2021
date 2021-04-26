<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" type="text" class="form-control" placeholder="Ingrese el nombre de un post">
        </div>
        @if ($users->count())  
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"
                            class="cursor-pointer w-24 px-6 py-3 text-left text-gray-500 uppercase tracking-wider"
                            wire:click="order('id')">
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
                            class="cursor-pointer w-24 px-6 py-3 text-left text-gray-500 uppercase tracking-wider"
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
                            <th>Email</th>
                            <th colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a class="btn btn-outline-info btn-sm" href="{{route('admin.users.edit', $user)}}"><i class="fas fa-edit"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <span class="float-right">
                    {{$users->links()}}
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
</div>
