@props(['post'])

<article class="mb-8 mt-8 bg-white shadow-lg rounded-lg overflow-auto">
    @if ($post->image)
        <img class="shadow-lg rounded-lg h-72 max-w-2xl mx-auto object-center" src="{{ Storage::url($post->image->url) }}" alt="">
    @else
        <img class="shadow-lg rounded-lg h-72 max-w-2xl mx-auto object-center" src="https://cdn.pixabay.com/photo/2019/02/05/14/08/quindio-3977049_960_720.jpg" alt="">
    @endif

    <div class="px-2 py-3">
        <h1 class="font-bold text-center text-xl mb-2">
            <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
        </h1>
        <div class="text-center text-gray-700 text-base">
            {!! $post->extract !!}
        </div>
    </div>
    <div class="px-6 pt-4 pb-2">
        @foreach ($post->tags as $tag)
            <a href="{{ route('posts.tag',$tag) }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mb-3 mr-2">{{ $tag->name }}</a>
        @endforeach
    </div>
</article>