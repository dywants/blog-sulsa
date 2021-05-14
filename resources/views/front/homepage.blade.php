@extends('layouts.master')

@section('main')
    <div class="wrapper">
{{--        <header>--}}
            <section id="hero" class="my-3">
                <div id="hero-desc">
                    <div id="hero-date"><span>{{ $postFirst->created_at->format('d/m/Y') }}</span></div>
                    <div id="hero-title">
                        <a href="{{ route('posts.display', $postFirst->slug) }}">
                            <h2>{{ $postFirst->title }}</h2>
                        </a>
                    </div>
                    <div id="hero-cta"><a href="{{ route('posts.display', $postFirst->slug) }}">Lire l'article</a></div>
                </div>
                <div id="hero-image" style="width: 840px; height: 557px;">
                    <img src="{{ asset('storage/' . $postFirst->image) }}" alt="image {{ $postFirst->title }}">
                </div>
            </section>
{{--        </header>--}}
        <section id="content">
            <div id="articles" class="pb-4">
                @foreach($postsResult as $post)
                    @include('includes.card')
                @endforeach
            </div>
            <aside id="sidebar" >
                <div class="p-4 @if(\Illuminate\Support\Facades\Route::currentRouteName() === "homepage")bg-secondary-600 @endif">
                    <div id="top-articles">
                        <h4>TOP RECETTES</h4>
                        <hr>
                        @forelse($postsFeatured as $post)
                            <div class="sidebar-article">
                                <div>
                                    <img src="{{ asset('storage/'. $post->image) }}" class="sidebar-thumb" width="100%" height="100%" alt="">
                                </div>
                                <div class="sidebar-article-desc">
                                    <h5>{{ $post->title }}</h5><span class="date">{{ $post->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        @empty
                            <p>Pas de l'article mise en avant pour le moment</p>
                        @endforelse
                    </div>
                    <div id="subscribe">
                        <hr>
                        <h4 class="text-white">NEWSLETTER</h4>
                        <form>
                            <input type="text" placeholder="Entrez votre email...">
                            <button type="submit">S'inscrire</button>
                        </form>
                    </div>
                </div>
            </aside>
        </section>
    </div>
@endsection
