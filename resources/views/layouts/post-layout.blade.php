@extends('layouts.master')

@section('main')
    @if(\Illuminate\Support\Facades\Route::currentRouteName() === 'category')
    <section class="h-64 py-20" style="background: #f6f6f6 url({{ asset('img/header-banner.jpg') }}) repeat-x bottom center;">
        <div class="container">
            <div class="text-center">
                <h1 class="text-title text-3xl pb-2">{{ $category->name }}</h1>
                <p class="desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, similique?</p>
            </div>
        </div>
    </section>
    @endif
    <div class="wrapper">
        <section id="content">
            <div>
                @yield('content')
            </div>
            <div id="sidebar">
                @yield('aside')
            </div>
        </section>
    </div>
@endsection
