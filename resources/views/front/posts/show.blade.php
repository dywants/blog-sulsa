@extends('layouts.post-layout')

@section('content')
    <section class="post container px-2">
        <div class="max-w-2xl">
            <div class="mb-4 md:mb-0 w-full mx-auto relative">
                <div class="flex flex-row mt-2 px-2 py-3 mx-3">
                    <div class="w-auto h-auto rounded-full border-2 border-pink-500">
                        <img class='w-12 h-12 object-cover rounded-full shadow cursor-pointer' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
                    </div>
                    <div class="flex flex-col mb-2 ml-4 mt-1">
                        <div class='text-gray-600 text-sm font-semibold'>Sara Lauren</div>
                        <div class='flex w-full mt-1'>
                            <div class='text-blue-700 font-base text-xs mr-1 cursor-pointer'>
                                UX Design
                            </div>
                            <div class='text-gray-400 font-thin text-xs'>
                                • 30 seconds ago
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <h1 class="text-4xl font-semibold text-gray-800 leading-tight">{{ $post->title }}</h1>
                    <a href="#" class="py-2 text-green-700 inline-flex items-center justify-center mb-2">
                        {{ $post->category->name }}
                    </a>
                </div>

                <img
                    src="{{ asset('/storage/' . $post->image )}}"
                    class="thumbnail" style="height: 28em;"/>

                <div class="px-4 text-lg leading-relaxed w-full ">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </section>
@endsection

@section('aside')
    <div class="flex flex-row mt-2 px-2 py-3 mx-3">
        <div class="w-auto h-auto rounded-full border-2 border-pink-500">
            <img class='w-12 h-12 object-cover rounded-full shadow cursor-pointer' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
        </div>
        <div class="flex flex-col mb-2 ml-4 mt-1">
            <div class='text-gray-600 text-sm font-semibold'>Sara Lauren</div>
            <div class='flex w-full mt-1'>
                <div class='text-blue-700 font-base text-xs mr-1 cursor-pointer'>
                    UX Design
                </div>
                <div class='text-gray-400 font-thin text-xs'>
                    • 30 seconds ago
                </div>
            </div>
        </div>
    </div>
@endsection
