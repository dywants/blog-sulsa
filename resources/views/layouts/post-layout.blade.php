@extends('layouts.master')

@section('main')
    <section id="content">
        <div>
           @yield('content')
        </div>
        <div id="sidebar">
            @yield('aside')
        </div>
    </section>
@endsection
