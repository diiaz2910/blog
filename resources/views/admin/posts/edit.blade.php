@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit a Post</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ (session('info')) }}</strong>
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            {!! Form::model($post,['route' => ['admin.posts.update', $post], 'autocomplete'=>'off', 'files'=>true, 'method' => 'put']) !!}

                @include('admin.posts.partials.form')

                {!! Form::submit('Update', ['class'=>'btn btn-primary']) !!}


            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
        }

        .image-wrapper img{
            position: relative;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
    </style>
@stop

{{-- Section JS to pass a jQuery Plugin stringToSlug --}}
@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({ //By typing #name, it should point to the form with that name
                setEvents: 'keyup keydown blur',
                getPut: '#slug', //By typing #slug, it should point to the form with that name
                space: '-'
            });
        });

        ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

        //TO CHANGE IMAGE
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result);
            };
            reader.readAsDataURL(file);
        }
    </script>

    
@endsection