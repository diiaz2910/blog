<div class="form-group">
    {!! Form::label('name', "Nombre:") !!}
    {!! Form::text('name', null, ['class'=> 'form-control', 'placeholder' => 'Please enter the name of the Tag...']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', "Slug:") !!}
    {!! Form::text('slug', null, ['class'=> 'form-control', 'placeholder' => 'Slug...', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form group">
    {{-- <label for="">Color:</label>
    <select name="color" id="" class="form-control mb-2">
        <option value="Red">Red</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
    </select> --}}
    {!! Form::label('color', 'Color:') !!}
    {!! Form::select('color', $colors, null, ['class' => 'form-control mb-2']) !!}

    @error('color')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>