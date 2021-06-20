@extends('layouts.master')

@section('main')
    <div class="container relative mt-10">
        @forelse($abouts as $about)
            <div class="content mx-auto">
                <div class="model">
                    <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547
                                                            130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775
                                                            97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666
                                                            0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346
                                                            165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403
                                                            129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028
                                                            -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>

                            <image class="home__blob-img" x='12' y='18' xlink:href="{{  asset('storage/' .$about->image ) }}"/>
                        </g>
                    </svg>
                </div>

                <div class="main-text">
                    <h1>Hello je suis, {{ $about->fullname }}</h1>
                    <p>{{ $about->function }}</p>
                    <a href="#" class="portfolio-btn mt-2">Me contacter</a>
                </div>
            </div>

            <div class="main my-8">
                {!! $about->description!!}
            </div>
        @empty
            <p>Pas encore d'information du moi revenez plutard!</p>
        @endforelse
    </div>
@endsection
