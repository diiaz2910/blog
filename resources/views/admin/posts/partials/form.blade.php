<div class="from-group">
    {!! Form::label('name', 'Name: ') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter the name of the post']) !!}

    @error('name')
        <small class="text-danger">{{ $message }}</small>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug: ') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Slug....', 'readonly']) !!}

    @error('slug')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('category_id', 'Category: ') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}

    @error('category_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Tags</p>

    @foreach ($tags as $tag)
        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, null) !!}
            {{ $tag->name }}
        </label>
    @endforeach

    <hr>

    @error('tags')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Status</p>

    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Draft 
    </label>

    <label>
        {!! Form::radio('status', 2) !!}
        Visible 
    </label>

    <hr>

    @error('status')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

    <div class="row mb-3">
        <div class="col image-wrapper">
            @isset ($post->image)
            <img id="picture" src="{{ Storage::url($post->image->url) }}" alt="">
            @else
                <img src="https://cdn.pixabay.com/photo/2019/02/05/14/08/quindio-3977049_960_720.jpg" alt="">
            @endisset
        </div>

        <div class="col ml-3">
            <div class="form-group">
                {!! Form::label('file', 'Image Preview') !!}
                {!! Form::file('file', ['class'=>'form-control-file', 'accept'=>'image/*']) !!}
            </div>

            @error('file')

                <span class="text-danger">{{ $message }}</span>

            @enderror

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus neque illum suscipit, laborum expedita beatae, modi assumenda veritatis, quaerat rem mollitia sit tempora? Nam nesciunt, aliquid assumenda tempore aspernatur et.</p>

        </div>
    </div>

<div class="form-group">
    {!! Form::label('extract', 'Extract: ') !!}
    {!! Form::textarea('extract', null, ['class'=>'form-control']) !!}

    @error('extract')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('body', 'Post Body: ') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

    @error('body')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>