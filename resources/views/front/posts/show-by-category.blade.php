@extends('layouts.post-layout')

@section('content')
    <section class="post">
        <div id="articles">
            @foreach($posts as $post)
                @include('includes.card')
            @endforeach
        </div>
    </section>
@endsection
