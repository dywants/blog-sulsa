@extends('layouts.master')

@section('main')
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
