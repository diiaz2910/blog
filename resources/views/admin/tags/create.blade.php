@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create Tag</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route'=>'admin.tags.store']) !!}
                @include('admin.tags.partials.form')

                {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
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