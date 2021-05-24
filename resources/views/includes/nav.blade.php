<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }

    @media screen and (max-width:953px) {
        .menu{
            display: none;
        }
    }


    .menu.active{
        display: block;
        -webkit-animation-name: zoomIn;
        animation-name: zoomIn;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
</style>

<div class="back-menu">
    <nav class="w-full mx-auto h-full py-10 relative md:mx-8">
        <label for="toggle -mt-4" class="-mt-4 toggle md:hidden">
            <i class="fas fa-bars toggle-icon"></i>
        </label>
        <a href="/" class="overflow-hidden flex items-center -mt-4 logo md:w-full">
            <div class="w-10 h-10 md:w-16 md:h-16">
                <img src="{{ asset('img/favicon.png') }}" alt="Logo site" class="w-full">
            </div>
            <span class="text-3xl leading-7 ml-1 w-24">la cuisine de sulson</span>
        </a>

        {{--        <div style="width:78%;position: relative;">--}}
        <div class="w-full sm:top-20 sm:absolute bg-white sm:shadow md:flex md:items-center p-4 text-center menu">
            <ul class="md:flex md:items-center">
                <li class="item py-0.5"><a href="#">Home</a></li>
                <li class="item py-0.5"><a href="#">About</a></li>
                <li class="item py-0.5 has-submenu">
                    <a tabindex="0" class="inline-flex py-0.5 items-center">Services
                        <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </a>
                    <ul class="submenu bg-dark-600 py-1 hidden">
                        <li class="subitem py-0.5"><a href="#">Design</a></li>
                        <li class="subitem py-0.5"><a href="#">Development</a></li>
                        <li class="subitem py-0.5"><a href="#">SEO</a></li>
                        <li class="subitem py-0.5"><a href="#">Copywriting</a></li>
                    </ul>
                </li>
                <li class="item has-submenu">
                    <a tabindex="0" class="inline-flex py-0.5 items-center">Plans
                        <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                        </svg>
                    </a>
                    <ul class="submenu bg-dark-600 py-1 hidden">
                        <li class="subitem py-0.5"><a href="#">Freelancer</a></li>
                        <li class="subitem py-0.5"><a href="#">Startup</a></li>
                        <li class="subitem py-0.5"><a href="#">Enterprise</a></li>
                    </ul>
                </li>
                <li class="item"><a href="#">Blog</a></li>
                <li class="item"><a href="#">Contact</a>
                </li>

                {{--  @foreach($categories as $category)
                     @if($category->children)
                         <li class="dropdown outline-none focus:outline-none">
                             <a class="item dropbtn outline-none focus:outline-none mr-2"
                                     tabindex="0">
                                 {{ $category->name }}
                                 <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg"
                                      viewBox="0 0 20 20">
                                     <path
                                         d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                 </svg>
                             </a>
                             <ul class="dropdown-content origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                                 @foreach($category->children as $child)
                                     <li class="subitem"><a href="#home">{{ $child->name }}</a></li>
                                 @endforeach
                             </ul>
                         </li>
                     @else
                         <li class="menu-item-1"><a href="#">{{ $category->name }}</a></li>
                     @endif
                 @endforeach --}}
            </ul>
        </div>
        @guest
            <div class="menu-register">
                <a class="register" href="{{ route('register') }}">S'inscrire</a>
                <span style="font-weight: 900;">|</span>
                <a class="register" href="{{ route('login') }}">Connexion</a>
            </div>
        @else
            <div class="flex justify-center items-center">
                <!-- Dropdown profile -->
                <div x-data="{ open: false }" class="relative mr-2">
                {{--                        <button x-on:click="open = true" class="ml-2 block border h-10 w-10 rounded-full overflow-hidden--}}
                {{--                    focus:outline-none">--}}
                {{--                            @if(Auth::user()->avatar)--}}
                {{--                                <img src="{{ asset('storage/users/'. Auth::user()->avatar) }}"--}}
                {{--                                     class="h-full w-full object-cover">--}}
                {{--                            @else--}}
                {{--                                <livewire:image-upload/>--}}
                {{--                            @endif--}}
                {{--                        </button>--}}
                <!-- Dropdown Body -->
                    <div x-show.transition="open" x-on:click.away="open = false"
                         class="absolute right-0 w-40 mt-2 py-2 bg-white border rounded shadow-xl z-1600">
                        <a href="{{ route('logout') }}"
                           class="transition-colors duration-200 flex items-center justify-center px-4 py-2 text-lg
                            text-dark-600 rounded hover:bg-primary-600 hover:text-dark-100"
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
        {{--        </div>--}}
    </nav>
    {{--  <div class="menu flex items-center justify-between">
        <div class="left flex items-center pt-2 top-4">
            <div class="toggle-menu">
                <label for="toggle-btn">
                    <i class="fas fa-bars toggle-icon"></i>
                </label>
                <input id="toggle-btn" type="checkbox">
                <ul class="toggle-items top-0">
                    <li class="toggle-item-1"><a href="#">Accueil</a></li>
                    <li class="toggle-item-20"><a href="#">Blog</a></li>
                    <li class="item has-submenu">
                        <a tabindex="0" class="flex items-center">Dinner
                            <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </a>
                        <ul class="submenu">
                            <li class="subitem"><a href="#">Freelancer</a></li>
                            <li class="subitem"><a href="#">Startup</a></li>
                            <li class="subitem"><a href="#">Enterprise</a></li>
                        </ul>
                    </li>
                    <li class="toggle-item-3"><a href="#">About us</a></li>
                    <li class="toggle-item-4"><a href="#">Contact us</a></li>
                    <li class="item has-submenu">
                        <a tabindex="0" class="flex items-center">Dejeuner
                            <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </a>
                        <ul class="submenu">
                            <li class="subitem"><a href="#">Freelancer</a></li>
                            <li class="subitem"><a href="#">Startup</a></li>
                            <li class="subitem"><a href="#">Enterprise</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
              <a href="/" class="logo toggle-menu flex items-center w-full">
                  <div class="logo-link">
                      <img src="{{ asset('img/favicon.png') }}" alt="Logo site" class="w-10 h-10">
                  </div>
                  <span class="logo-link ml-1 w-36">la cuisine de sulson</span>
              </a>
        </div>
         <div class="toggle-item-5 mr-4 toggle-menu">
             <a href="{{ route('login') }}" class="p-2 bg-primary-600 text-white rounded-md text-sm">Connexion</a>
         </div>
     </div> --}}
</div>

<script>
    const toggle = document.querySelector(".toggle");
    const menu = document.querySelector(".menu");

    /* Toggle mobile menu */
    function toggleMenu() {
        if (menu.classList.contains("active")) {
            menu.classList.remove("active");
            // // adds the menu (hamburger) icon
            // toggle.innerHTML = "<i class=’fas fa-bars’></i>";
        } else {
            menu.classList.add("active");
            // // adds the close (x) icon
            // toggle.innerHTML = "<i class=’fas fa-times’></i>";
        }
    }

    /* Event Listener */
    toggle.addEventListener("click", toggleMenu, false);
    // function myFunction() {
    //     document.getElementById("myDropdown").classList.toggle("show");
    // }
    //
    // // Close the dropdown if the user clicks outside of it
    // window.onclick = function(event) {
    //     if (!event.target.matches('.dropbtn')) {
    //         var dropdowns = document.getElementsByClassName("dropdown-content");
    //         var i;
    //         for (i = 0; i < dropdowns.length; i++) {
    //             var openDropdown = dropdowns[i];
    //             if (openDropdown.classList.contains('show')) {
    //                 openDropdown.classList.remove('show');
    //             }
    //         }
    //     }
    // }

    const items = document.querySelectorAll(".item");

    /* Activate Submenu */
 function toggleItem() {
        if (this.classList.contains("submenu-active")) {
            this.classList.remove("submenu-active");
            this.style.color = '#333333'
        }
        else {
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
