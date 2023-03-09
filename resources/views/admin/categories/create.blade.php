@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Nueva Categoria</h1>
@stop

@section('content')
    <div class="card-card-body">
        {!! Form::open(['route'=>'admin.categories.store']) !!}
            
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la categoria']) !!}

                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug...', 'readonly']) !!}

                @error('slug')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            {!! Form::submit('Crear Categoria', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
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
