@extends('layouts.post-layout')

@section('content')
    <section class="post container pb-4 bg-white">
        <div class="mb-4 md:mb-0 w-full mx-auto relative shadow-md">
            <div class="flex flex-row px-4 py-2">
                <div class="w-auto h-auto rounded-full border-2 border-primary-600">
                    <img class='w-12 h-12 object-cover rounded-full shadow cursor-pointer' alt='User avatar'
                         src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
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
            <div class="mb-4 px-4">
                <h1 class="text-4xl font-semibold text-gray-800 leading-tight">{{ $post->title }}</h1>
                <a href="{{ route('category', $post->category->slug) }}" class="category mb-4">
                    {{ $post->category->name }}
                </a>
            </div>

            <img
                src="{{ asset('storage/' . $post->image) }}"
                class="thumbnail w-full" style="height: 28em;"/>

            <div class="px-4 text-lg leading-relaxed w-full my-4">
                {!! $post->body !!}
            </div>

            <div class="w-full mx-auto">
                <div class="sm:grid grid-cols-4 gap-3 mx-auto">
                    @isset($post->previous)
                        <div class="col-start-1 col-end-3 my-2">
                            <a href="{{ route('posts.display', $post->previous->slug) }}">
                                <div
                                    class="h-full p-6 bg-white hover:shadow-lg border-b-4 border-primary-600 shadow-md">
                                    <h3 class="text-2xl mb-3 font-semibold inline-flex">
                                        <svg class="mr-2" width="24" height="30" viewBox="0 0 24 24"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1.02698 11.9929L5.26242 16.2426L6.67902 14.8308L4.85766 13.0033L22.9731 13.0012L22.9728 11.0012L4.85309 11.0033L6.6886 9.17398L5.27677 7.75739L1.02698 11.9929Z"
                                                fill="currentColor"/>
                                        </svg>
                                        Prev
                                    </h3>
                                    <p class="text-lg"> {{ $post->previous->title }}</p>
                                </div>
                            </a>
                        </div>
                    @endisset

                    @isset($post->next)
                        <div class="col-end-5 col-span-2 my-2">
                            <a href="{{ route('posts.display', $post->next->slug) }}">
                                <div
                                    class="h-full p-6 dark:bg-gray-800 bg-white hover:shadow-xl border-b-4 border-primary-600 shadow-md text-right">
                                    <h3 class="text-2xl mb-3 font-semibold inline-flex ">
                                        Next
                                        <svg class="ml-2" width="24" height="30" viewBox="0 0 24 24"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M23.0677 11.9929L18.818 7.75739L17.4061 9.17398L19.2415 11.0032L0.932469 11.0012L0.932251 13.0012L19.2369 13.0032L17.4155 14.8308L18.8321 16.2426L23.0677 11.9929Z"
                                                fill="currentColor"/>
                                        </svg>
                                    </h3>
                                    <p class="text-lg">{{ $post->next->title }}</p>
                                </div>
                            </a>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </section>
@endsection

@section('aside')
    <div class="card border w-96 hover:shadow-none relative flex flex-col mx-auto shadow-lg mx-5 mb-5">
        <img class="max-h-20 w-full opacity-80 absolute top-0" style="z-index:-1" src="https://unsplash.com/photos/h0Vxgz5tyXA/download?force=true&w=640" alt="" />
        <div class="profile w-full flex m-3 ml-4 text-white">
            <img class="w-28 h-28 p-1 bg-white rounded-full" src="https://images.pexels.com/photos/61100/pexels-photo-61100.jpeg?crop=faces&fit=crop&h=200&w=200&auto=compress&cs=tinysrgb" alt=""/>
            <div class="title mt-11 ml-3 font-bold flex flex-col">
                <div class="name break-words">Sarah</div>
                <!--  add [dark] class for bright background -->
                <div class="add font-semibold text-sm italic dark text-dark-600">Model</div>
            </div>
        </div>
        <div class="buttons flex absolute bottom-0 font-bold right-0 text-xs text-gray-500 space-x-0 my-3.5 mr-3">
            <div class="add border rounded-l-2xl rounded-r-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Contact</div>
            <div class="add border rounded-r-2xl rounded-l-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Bio</div>
        </div>
    </div>
@endsection
