<style>
    .dropdown:hover .dropdown-menu {
        display: block;
    }
</style>

<div class="back-menu">
    <div class="back-menu-center">

            <a href="/" class="logo">
                <div class="logo-link">
                    <img src="{{ asset('img/favicon.png') }}" alt="Logo site">
                </div>
                <span class="logo-link ml-1">la cuisine de sulson</span>
            </a>

        <div style="width:78%;position: relative;">
            <div class="menu-items">
                <ul>
                    <li class="menu-item-1"><a href="#">Accueil</a></li>
                    <li class="menu-item-3"><a href="#">Qui suis-je?</a></li>
                    <li class="menu-item-4"><a href="#">Me contacter</a></li>
                    <div class="dropdown outline-none focus:outline-none">
                        <button onclick="myFunction()" class="dropbtn outline-none focus:outline-none" tabindex="0">
                            Dropdown
                            <svg class="fill-current h-4 w-4 ml-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                            </svg>
                        </button>
                        <div id="myDropdown" class="dropdown-content origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <a href="#home">Home</a>
                            <a href="#about">About</a>
                            <a href="#contact">Contact</a>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="menu-register">
                <a class="register" href="{{ route('register') }}">S'inscrire</a>
                <span style="font-weight: 900;">|</span>
                <a class="register" href="{{ route('login') }}">Connexion</a>
            </div>
        </div>
    </div>
    <div class="menu flex items-center justify-between">
       <div class="left flex items-center">
           <div class="toggle-menu">
               <label for="toggle-btn">
                   <i class="fas fa-bars toggle-icon"></i>
               </label>
               <input id="toggle-btn" type="checkbox">
               <ul class="toggle-items">
                   <li class="toggle-item-1"><a href="#">Accueil</a></li>
                   <li class="toggle-item-2"><a href="#">Blog</a></li>
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
           <a  href="/" class="w-8 h-8">
               <img src="{{ asset('img/favicon.png') }}" alt="Logo site" class="w-full">
           </a>
       </div>
        <div class="toggle-item-5 mr-4">
            <a href="{{ route('login') }}" class="p-1 bg-primary-600 text-white rounded-md text-sm">Connexion</a>
        </div>
    </div>
</div>

<script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }

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
