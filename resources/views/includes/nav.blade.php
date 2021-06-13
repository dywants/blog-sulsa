<div>
    <nav class="shadow-sm">

        <a href="/" class="overflow-hidden flex items-center -mt-4 logo md:w-full">
            <div class="w-10 h-10">
                <img src="{{ asset('img/favicon.png') }}" alt="Logo site" class="w-full">
            </div>
            <span class="text-lg leading-7 ml-1 width">la cuisine de sulson</span>
        </a>

        <ul class="nav-links">
            <li><a href="/">Accueil</a></li>
            <li>
                <a href="" class="inline-flex items-center">Php
                    <svg class="fill-current h-4 w-4 ml-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </a>
                <ul class="sub-nav-links">
                    <li><a href="">laravel</a></li>
                    <li><a href="">django</a></li>
                    <li><a href="">symphony</a></li>
                    <li><a href="">cakephp</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </li>
            <li><a href="" class="inline-flex items-center">Javascript
                    <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </a>
                <ul class="sub-nav-links">
                    <li><a href="">poulet</a></li>
                    <li><a href="">riz</a></li>
                    <li><a href="">tomate</a></li>
                    <li><a href="">php</a></li>
                    <li><a href="">nodejs</a></li>
                </ul>
            </li>
            <li>
                <a href="" class="inline-flex items-center">Python
                    <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </a>
                <ul class="sub-nav-links">
                    <li><a href="">panda</a></li>
                    <li><a href="">data-center</a></li>
                    <li><a href="">wordpress</a></li>
                </ul>
            </li>
            <li><a href="" class="inline-flex items-center">Designs
                    <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </a>
                <ul class="sub-nav-links">
                    <li><a href="">Home</a></li>
                    <li><a href="">Work</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Projects</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </li>
            <li><a href="" class="inline-flex items-center">wordpress
                    <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </a>
                <ul class="sub-nav-links">
                    <li><a href="">Themes</a></li>
                    <li><a href="">Plugin</a></li>
                    <li><a href="">custom</a></li>
                    <li><a href="">Page Builder</a></li>
                    <li><a href="">Elementary</a></li>
                </ul>
            </li>
            <li><a href="">Git Hub</a></li>
            <li><a href="">Contact</a></li>
        </ul>

        <div class="burger cursor-pointer z-40">
            <div class="line1 line"></div>
            <div class="line2 line"></div>
            <div class="line3 line"></div>
        </div>
        @guest
            <div class="menu-register flex items-center">
                <a class="register hidden md:inline-flex" href="{{ route('register') }}">S'inscrire</a>
                <span class="hidden md:block" style="font-weight: 900;">|</span>
                <a class="register hidden md:inline-flex" href="{{ route('login') }}">Connexion</a>
                <a href="#" class="md:hidden mr-10">Connexion</a>
            </div>
        @else
            <div class="flex justify-center items-center absolute top-7 m-1.5 right-8">
                <!-- Dropdown profile -->
                <div class="relative mr-2">
                    <button id="btn-profile" class="ml-2 block border h-10 w-10 rounded-full overflow-hidden
                                    focus:outline-none">
                        @if(Auth::user()->avatar)
                            <img src="{{ asset('storage/users/'. Auth::user()->avatar) }}"
                                 class="h-full w-full object-cover">
                        @else
{{--                            <livewire:image-upload/>--}}
                        @endif
                    </button>
                    <!-- Dropdown Body -->
                    <div id="menu-profile" class="absolute right-0 w-40 mt-2 bg-white border p-1.5 z-50 rounded-md shadow-xl z-1600 hidden">
                        <a href="#" class="transition-colors duration-200 flex items-center justify-center px-4 py-1.5 rounded-md text-base
                            text-dark-600 hover:bg-primary-600 hover:text-dark-100">Profile</a>
                        <a href="{{ route('logout') }}"
                           class="transition-colors duration-200 flex items-center justify-center px-4 py-1.5 rounded-md text-base
                            text-dark-600 hover:bg-primary-600 hover:text-dark-100"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" width="24"
                                 height="24" class="mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    </div>
                    <!-- // Dropdown Body -->
                </div>
                <!-- // Dropdown profile -->
            </div>
        @endguest
    </nav>
</div>

<script>
    const navSlide = () => {
        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.nav-links');

        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');
        });
    }
    navSlide();

    // menu profile
    const navProfile = () => {
        const btn = document.getElementById('btn-profile')
        const menuContent = document.getElementById('menu-profile')

        btn.addEventListener('click', () => {
            menuContent.classList.toggle('show');
        })
    }
    navProfile();

    const items = document.querySelectorAll(".item");

    /* Activate Submenu */
    function toggleItem() {
        if (this.classList.contains("submenu-active")) {
            this.classList.remove("submenu-active");
            this.style.color = '#333333'
        } else {
            this.classList.add("submenu-active");
            this.style.color = 'white';
        }
    }

    /* Event Listeners */
    for (let item of items) {
        if (item.querySelector(".submenu")) {
            item.addEventListener("click", toggleItem, false);
            item.addEventListener("keypress", toggleItem, false);
        }
    }

</script>


{{--@foreach($items as $menu_item)--}}
{{--    @if($loop->first)--}}
{{--        <span class="opener">{{ $menu_item->title }}</span>--}}
{{--        <ul>--}}
{{--            @else--}}
{{--                @if(!$menu_item->parent_id)--}}
{{--        </ul>--}}
{{--    @endif--}}
{{--    <li><a href="{{ url($menu_item->url) }}">{{ $menu_item->title }}</a></li>--}}
{{--    @endif--}}
{{--@endforeach--}}
