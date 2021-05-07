<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de sulsa</title>

    <!-- font awesome icons cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
          integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
          crossorigin="anonymous" />

    <!-- custom style.css file -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body>

<!-- Header -->
<header id="header" class="shadow">
    @include('includes.nav')
</header>
<!-- .Header -->

<!-- Main Site -->
<main id="site-main">

  @yield('main')

</main>
<!-- .Main Site -->

<!-- footer -->
<div class="wrapper">
    <footer>
        <div id="footer-logo"><img src="https://res.cloudinary.com/prvnbist/image/upload/v1519887546/blog-logo.svg" alt="Logo"></div>
        <div class="tags social">
            <div class="d-flex flex-wrap">
                <a href="#" class="nav-link btn bg-light"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="nav-link btn bg-light"><i class="fab fa-twitter"></i></a>
                <a href="#" class="nav-link btn bg-light"><i class="fab fa-instagram"></i></a>
                <a href="#" class="nav-link btn bg-light"><i class="fab fa-dribbble"></i></a>
            </div>
        </div>
        <div id="footer-menu">
            <a href="#">TECH</a>
            <a href="#">SCIENCE</a>
            <a href="#">REVIEW</a>
            <a href="#">CULTURE</a>
        </div>
        <div id="scroll-up"><span><i class="fa fa-chevron-up"></i></span></div>
        <div id="credit">
            © 2021 <a href="#"  class="text-primary">dywants</a> - Personal Blog Theme. All rights reserved.
        </div>
    </footer>
</div>
<!-- .footer -->

<!-- custom javascript main.js file -->
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
