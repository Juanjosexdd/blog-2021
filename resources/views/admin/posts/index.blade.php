@extends('adminlte::page')

@section('title', 'Lista de posts')

@section('content_header')
    <a class="btn btn-outline-info float-right" href="{{route('admin.posts.create')}}"> Agregar nuevo post <i class="fas fa-save"></i></a>

    <h1>Lista de posts</h1>
@stop

@section('content')

    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif

    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop