<!DOCTYPE html>
<html lang="fr-CM">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de sulson</title>
    <!-- font awesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
          crossorigin="anonymous" />
    <!-- custom style.css file -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="flex flex-col h-screen">

<!-- Header -->
<header id="header" class="shadow">
    @include('includes.nav')
</header>
<!-- .Header -->

<!-- Main Site -->
<div id="app">
    <main id="site-main">
        @yield('main')
    </main>
</div>
<!-- .Main Site -->

<!-- footer -->
<footer style="background: #f6f6f6 url({{ asset('img/footer_top_bg.jpg') }}) repeat-x top center;">
    <a href="/" id="footer-logo">
        <img src="{{ asset('/img/favicon.png') }}" class="h-16 w-16" alt="Logo">
    </a>
    <div class="tags social">
        <div class="d-flex flex-wrap">
            <a href="#" class="nav-link btn rounded-full bg-white"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="nav-link btn rounded-full bg-white ml-2"><i class="fab fa-twitter"></i></a>
            <a href="#" class="nav-link btn rounded-full bg-white ml-2"><i class="fab fa-instagram"></i></a>
            <a href="#" class="nav-link btn rounded-full bg-white ml-2"><i class="fab fa-dribbble"></i></a>
        </div>
    </div>
    <div id="footer-menu">
        @forelse($pages as $page)
            <a href="{{ route('page', $page->slug) }}">{{ $page->title }}</a>
        @empty
            <p></p>
        @endforelse
    </div>
    <div id="scroll-up">
        <span class="">
            <svg class="w-8 h-8 text-dark-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path fill="currentColor" d="M17,13.41,12.71,9.17a1,1,0,0,0-1.42,0L7.05,13.41a1,1,0,0,0,0,1.42,1,1,0,0,0,1.41,0L12,11.29l3.54,3.54a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29A1,1,0,0,0,17,13.41Z"/></svg>
        </span>
    </div>
    <div id="credit">
        © 2021 - crée par:<a href="https://dywants.com" class="text-primary">dywants</a> - All rights reserved.
    </div>
</footer>
<!-- .footer -->

<!-- custom javascript main.js file -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
