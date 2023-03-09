@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ (session('info')) }}</strong>
        </div>
    @endif

    <div class="card-card-body">
        {!! Form::model($category, ['route'=>['admin.categories.update', $category], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug de la categoria', 'readonly']) !!}

                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Actualizar Categoria', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
    
    @stop

    @section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    {{-- Section JS to pass a jQuery Plugin stringToSlug --}}
    @section('js')
        <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

        <script>
            $(document).ready( function() {
                $("#name").stringToSlug({ //By typing #name, it should point to the form with that name
                    setEvents: 'keyup keydown blur',
                    getPut: '#slug', //By typing #slug, it should point to the form with that name
                    space: '-'
                });
            });
        </script>
    @endsection