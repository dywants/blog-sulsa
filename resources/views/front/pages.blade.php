@extends('layouts.master')

@section('content')
    <div class="header-banner relative h-100 w-full z-40 bg-cover bg-center bg-purple-300 bg-opacity-75  bg-no-repeat
    before:bg-purple-300 before:empty-content flex items-center justify-items-start"
         style="background-image: url({{asset('img/header-banner.jpg')}});">
        <div class="container my-0 mb-4 px-12 py-4 mx-auto z-400 text-center">
            <h1 class="text-gray-100 text-3xl leading-10">
                {{ $page->title }}
            </h1>
        </div>
    </div>
    <div class="container px-12 mx-auto mt-8">
        <div class="max-w-3xl px-8 mx-auto">
            <article class="w-full">
                {!! $page->body !!}
            </article>
        </div>
    </div>
@endsection
