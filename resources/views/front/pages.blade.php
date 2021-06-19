@extends('layouts.master')

@section('main')
    <section class="h-64 py-20"
             style="background: #f6f6f6 url({{ asset('img/header-banner.jpg') }}) repeat-x bottom center;">
        <div class="container">
            <div class="text-center">
                <h1 class="text-title text-3xl pb-2">{{ $page->title }}</h1>
            </div>
        </div>
    </section>

    <div class="container px-12 mx-auto my-10">
        <div class="max-w-3xl px-8 mx-auto">
            <article class="w-full">
                {!! $page->body !!}
            </article>
        </div>
    </div>
@endsection
