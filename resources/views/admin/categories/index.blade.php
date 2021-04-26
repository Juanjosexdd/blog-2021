@extends('adminlte::page')

@section('title', 'Lista Categorias')

@section('content_header')
    @can('admin.categories.create')
        <a class="btn btn-outline-info float-right" href="{{route('admin.categories.create')}}"> Agregar categoria</a>
    @endcan

    <h1>Lista Categorias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>
                            <td>{{$category->name}}</td>
                            <td width="10px">
                                @can('admin.categories.edit')
                                    <a class="btn btn-outline-info btn-sm" href="{{route('admin.categories.edit',$category)}}"><i class="fas fa-edit"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.categories.destroy')    
                                    <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop