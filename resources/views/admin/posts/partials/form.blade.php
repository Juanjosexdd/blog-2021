<div class="form-group">
    {!! Form::label('name', 'Nombre: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post']) !!}

    @error('name')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug: ') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post' ,'readonly']) !!}
    @error('slug')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
    @error('category_id')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Etiquetas</p>

    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{$tag->name}}
        </label>
    @endforeach
    <br>
    @error('tags')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label>
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>
    <label>
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>
    @error('status')
    <br>
    <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="row mb-3">
    <div class="col">
        <div class="image image-wrapper">
            @isset ($post->image)
                <img id="picture" class="" src="{{Storage::url($post->image->url)}}" alt="" srcset="">
            @else
                <img id="picture" class="" src="https://cdn.pixabay.com/photo/2016/11/19/18/57/godafoss-1840758_960_720.jpg" alt="" srcset="">
            @endisset
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('file', 'Imagen') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
        </div>
        @error('status')
        <br>
        <small class="text-danger">{{$message}}</small>
        @enderror
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem optio, commodi enim quam, eaque id officia eos ipsum quidem saepe minima totam impedit adipisci illo vero? Rem ipsam animi sequi.</p>
    </div>
</div>
<div class="form-group">
    {!! Form::label('extract', 'Extracto') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
    @error('extract')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>
<div class="form-group">
    {!! Form::label('body', 'Contenido del post') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    @error('body')
        <small class="text-danger">{{$message}}</small>
    @enderror
</div>