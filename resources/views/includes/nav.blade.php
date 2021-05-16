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
                        <button onclick="myFunction()" class="dropbtn outline-none focus:outline-none" >
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
    <div class="toggle-menu">
        <label for="toggle-btn">
            <i class="fas fa-bars toggle-icon"></i>
        </label>
        <input id="toggle-btn" type="checkbox">
        <ul class="toggle-items">
            <li class="toggle-item-1"><a href="#">Home</a></li>
            <li class="toggle-item-2"><a href="#">Blog</a></li>
            <li class="toggle-item-3"><a href="#">About us</a></li>
            <li class="toggle-item-4"><a href="#">Contact us</a></li>
            <li class="toggle-item-5"><a href="#">Register | login</a></li>
        </ul>
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
</script>
