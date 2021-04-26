@extends('adminlte::page')

@section('title', 'Lista etiquetas')

@section('content_header')
    @can('admin.tags.create')
        <a class="btn btn-outline-info float-right" href="{{route('admin.tags.create')}}"> Agregar etiqueta <i class="fas fa-save"></i></a>
    @endcan
    <h1>Lista etiquetas</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body table-responsive">
            <table class="table table-striped table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{$tag->id}}</td>
                            <td>{{$tag->name}}</td>
                            <td width="10px">
                                @can('admin.tags.edit')
                                    <a class="btn btn-outline-info btn-sm" href="{{route('admin.tags.edit',$tag)}}"><i class="fas fa-edit"></i></a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.tags.destroy')
                                    <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
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
        <div class="card-footer">
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop