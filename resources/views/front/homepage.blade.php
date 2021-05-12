@extends('layouts.master')

@section('main')
    <div class="wrapper">
        <header>
            <section id="hero" class="mb-3">
                <div id="hero-desc">
                    <div id="hero-date"><span>{{ $postFirst->created_at->format('d/m/Y') }}</span></div>
                    <div id="hero-title">
                        <a href="{{ route('posts.display', $postFirst->slug) }}">
                            <h2>{{ $postFirst->title }}</h2>
                        </a>
                    </div>
                    <div id="hero-cta"><a href="{{ route('posts.display', $postFirst->slug) }}">Lire l'article</a></div>
                </div>
                <div id="hero-image"><img src="{{ asset('storage/' . $postFirst->image) }}" alt="image {{ $postFirst->title }}"></div>
            </section>
        </header>
        <section id="content">
            <div id="articles">
                @foreach($postsResult as $post)
                    @include('includes.card')
                @endforeach
                <div id="end">
                    <p>You've reached the end of the list.</p>
                </div>
            </div>
            <div id="sidebar">
                <div id="top-articles">
                    <h4>TOP ARTICLES</h4>
                    <hr>
                    <div class="sidebar-article">
                        <div class="sidebar-thumb"></div>
                        <div class="sidebar-article-desc">
                            <h5>Chile’s pollution problem has led to green startups.</h5><span class="date">Feb 10, 2018</span>
                        </div>
                    </div>
                    <div class="sidebar-article">
                        <div class="sidebar-thumb"></div>
                        <div class="sidebar-article-desc">
                            <h5>This DIY game console is as much fun to build as it is to play.</h5><span class="date">Feb 9, 2018</span>
                        </div>
                    </div>
                    <div class="sidebar-article">
                        <div class="sidebar-thumb"></div>
                        <div class="sidebar-article-desc">
                            <h5>How blockchain is streamlining business operations.</h5><span class="date">Feb 5, 2018</span>
                        </div>
                    </div>
                    <div class="sidebar-article">
                        <div class="sidebar-thumb"></div>
                        <div class="sidebar-article-desc">
                            <h5>This $29 JavaScript eBook helps you learn with ease.</h5><span class="date">Feb 1, 2018</span>
                        </div>
                    </div>
                </div>
                <div id="subscribe">
                    <hr>
                    <h4>GET WEEKLY UPDATES</h4>
                    <form><input type="text" placeholder="Enter your email..."><button type="submit">SUBSCRIBE</button></form>
                </div>
            </div>
        </section>
    </div>
@endsection
