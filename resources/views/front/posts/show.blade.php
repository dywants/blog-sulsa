@extends('layouts.post-layout')

<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v11.0&appId=315852386913072&autoLogAppEvents=1"
        nonce="v0nksIu2"></script>

@section('content')
    <section class="post container pb-4 bg-white">
        <div class="mb-4 md:mb-0 w-full mx-auto relative shadow-md">
            <div class="flex flex-row px-4 py-2">
                <div class="w-auto h-auto rounded-full border-2 border-primary-600">
                    <img class='w-12 h-12 object-cover rounded-full shadow cursor-pointer' alt='User avatar'
                         src='{{asset('storage/'. $post->authorId->avatar) }}'>
                </div>
                <div class="flex flex-col mb-2 ml-4 mt-1">
                    <div class='text-gray-600 text-sm font-semibold'>{{ $post->authorId->name }}</div>
                    <div class='flex w-full mt-1'>
                        <div class='text-gray-400 font-thin text-xs'>
                            {{ $post->created_at->diffForHumans() }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4 px-4">
                <h1 class="text-4xl font-semibold text-gray-800 leading-tight mb-2">{{ $post->title }}</h1>
                <div class="flex items-center">
                    <a href="{{ route('category', $post->category->slug) }}" class="category mb-0" style="margin-bottom:0;">
                        {{ $post->category->name }}
                    </a>
                    <span class="relative inline-block ml-8">
                        <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                           <path fill="currentColor" d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z"/>
                       </svg>
                         <span class="absolute top-0 right-0 inline-flex items-center justify-center px-1.5 py-0.5 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-600 rounded-full">{{ $post->views_count }}</span>
                    </span>
               </div>
            </div>

            <img
                src="{{ asset('storage/' . $post->image) }}"
                class="thumbnail w-full" style="height: 28em;"/>

            <div class="px-4 text-lg leading-relaxed w-full my-4">
                {!! $post->body !!}
            </div>

            <div class="fab-share my-10 ml-2 flex items-center">
                <div class="fb-like" data-href="{{ Request::url() }}" data-width="" data-layout="button_count"
                     data-action="like" data-size="large" data-share="false"></div>
                <div class="fb-share-button" data-href="{{ Request::url() }}" data-layout="button_count"
                     data-size="large"><a target="_blank"
                                          href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fblog-sulsa.test%2F&amp;src=sdkpreparse"
                                          class="fb-xfbml-parse-ignore">Partager</a></div>
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
    <div class="card border w-96 hover:shadow-none relative flex flex-col mx-auto shadow-sm mx-5 mb-5">
        <img class="max-h-20 w-full opacity-80 absolute top-0" style="z-index:-1" src="{{ asset('img/background.jpg') }}" alt="" />
        <div class="profile w-full flex m-3 ml-4 text-white">
            <img class="w-28 h-28 p-1 bg-white rounded-full" src="{{ asset('/storage/' . $about->image) }}" alt=""/>
            <div class="title mt-11 ml-3 font-bold flex flex-col">
                <div class="name break-words">{{ $about->fullname }}</div>
                <div class="add font-semibold text-sm italic dark text-dark-600">{{ $about->function }}</div>
            </div>
        </div>
        <div class="buttons flex absolute bottom-0 font-bold right-0 text-xs text-gray-500 space-x-0 my-3.5 mr-3">
            <a href="{{ route('contact') }}" class="add border rounded-l-2xl rounded-r-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Contact</a>
            <a href="{{ route('about') }}" class="add border rounded-r-2xl rounded-l-sm border-gray-300 p-1 px-4 cursor-pointer hover:bg-gray-700 hover:text-white">Bio</a>
        </div>
    </div>

    <div class="facebook-card card border w-96 hover:shadow-none relative flex flex-col mx-auto shadow-sm mx-5 mb-5 px-6">
       <div class="widget__title py-4">
           <h3 class="title text-lg leading-9 h-10 p-0 m-0 text-dark-600 border-b">Facebook Page</h3>
       </div>

        <div class="widget_content my-8">
            <div class="fb-page" data-href="https://www.facebook.com/lacuisinedesulson/" data-tabs="timeline"
                 data-width="" data-height="" data-small-header="false" data-adapt-container-width="true"
                 data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/lacuisinedesulson/" class="fb-xfbml-parse-ignore"><a
                        href="https://www.facebook.com/lacuisinedesulson/">La Cuisine de Sulson</a></blockquote>
            </div>
        </div>

    </div>
@endsection

@section('other-section')
    <div class="my-8">
        <div class="fb-comments" data-href="{{ Request::url() }}" data-width="736" data-numposts="5"></div>
    </div>
   <div class="mt-8">
       <div id="disqus_thread"></div>
   </div>
    <section class="related__post mt-8 py-4">
        <div class="col-12 w-full">
            <h2 class="title-separated flex items-center flex-col justify-center relative text-center text-primary-600 text-2xl mx-0 my-12">
                <span>Mes autres</span>
                <span>Recettes</span>
            </h2>
        </div>
        <div class="grid grid-cols-6 gap-3">
            @foreach($postsRelated as $post)
                <div class="card-related__post col-span-6 md:col-span-2">
                    @include('includes.card')
                </div>
            @endforeach
        </div>
    </section>
@endsection

{{--<script>--}}
{{--    /**--}}
{{--     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.--}}
{{--     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */--}}

{{--    var disqus_config = function () {--}}
{{--    this.page.url = {{ Request::url() }};  // Replace PAGE_URL with your page's canonical URL variable--}}
{{--    this.page.identifier = {{ $post->slug }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable--}}
{{--    };--}}

{{--    (function() { // DON'T EDIT BELOW THIS LINE--}}
{{--        var d = document, s = d.createElement('script');--}}
{{--        s.src = 'https://lacuisinedesulson.disqus.com/embed.js';--}}
{{--        s.setAttribute('data-timestamp', +new Date());--}}
{{--        (d.head || d.body).appendChild(s);--}}
{{--    })();--}}
{{--</script>--}}
{{--<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>--}}
