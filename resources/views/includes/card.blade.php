<div class="article text-right">
    <img src="{{ asset('/storage/' . $post->image) }}" alt="" class="thumb w-full">
    <div class="px-2 shadow py-3">
        <div class="card-body text-left">
            <a href="{{ route('category', $post->category->slug) }}"><span class="category text-left
            mt-2">{{$post->category->name }}</span></a>
            <h2>{{ $post->title }}</h2>
            <span class="meta__donnees">Publié le {{ $post->created_at->format('d/m/Y') }}</span>
            <p>{{ $post->excerpt }}</p>
        </div>
        <div class="card-footer mb-3">
            <a href="{{ route('posts.display', $post->slug) }}">Voir Plus</a>
        </div>
    </div>
</div>
