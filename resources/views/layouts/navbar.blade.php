<!-- Sticky Header Section start  -->
<header class="header-1 sticky-header" style="transform: translateY(0px);">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{ route('home') }}" class="header-logo">
                                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo-img">
                                </a>
                                </div>
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav>
                                            <ul>
                                            {{-- hadi ghi khlih --}}
                                            <li class="has-dropdown">
                                                <a href="{{ route('home') }}">
                                                    Accueil
                                                </a>
                                            </li>
                                            {{-- ok --}}
                                            <li>
                                                <a href="{{ route('shop-default') }}">
                                                    Boutique
                                                </a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ route('about') }}">
                                                    À propos de nous
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('blog') }}">
                                                    Blog
                                                </a>
                                            </li>
                                            @guest
                                                <li class="has-dropdown">
                                                    <a href="{{ route('login') }}">Connexion</a>
                                                </li>
                                            @endguest
                                        </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                            <div class="header-right">

                                <div class="menu-cart">
                                @auth
                                    <a href="{{route('favoris')}}" class="cart-icon">
                                        <i class="fa-regular fa-heart"></i>
                                        <span class="cart-count" id="favoris-count1"></span>
                                    </a>
                                    <a href="{{ route('shop-cart') }}" class="cart-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                        <span class="cart-count" id="cart-count1"></span>
                                    </a>
                                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger"
                                            style="margin-left: 10px; border-radius: 20px; padding: 6px 18px; font-size: 15px;">
                                            <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
                                        </button>
                                    </form>
                                @endauth
                                {{-- <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="assets/img/icon/icon-13.svg" alt="img">
                                        </div>
                                    </a>
                                </div> --}}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </header>

<!-- Main Header Section start  -->
<header class="header-1">
        <div class="mega-menu-wrapper">
            <div class="header-main">
                <div class="container">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="{{route('home')}}" class="header-logo">
                                        <img src="{{ asset('assets/img/logo/logo.png') }}" alt="logo-img">
                                    </a>
                                </div>
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu" style="display: block;">
                                            <ul>
                                            {{-- hadi ghi khlih --}}
                                            <li class="has-dropdown">
                                                <a href="{{ route('home') }}">
                                                    Accueil
                                                </a>
                                            </li>
                                            {{-- ok --}}
                                            <li>
                                                <a href="{{ route('shop-default') }}">
                                                    Boutique
                                                </a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="{{ route('about') }}">
                                                    À propos de nous
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('blog') }}">
                                                    Blog
                                                </a>
                                            </li>
                                            @guest
                                                <li class="has-dropdown">
                                                    <a href="{{ route('login') }}">Connexion</a>
                                                </li>
                                            @endguest
                                        </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-2 col-xl-4 col-xxl-2">
                            <div class="header-right">

                               <div class="menu-cart">
                                @auth
                                    <a href="{{route('favoris')}}" class="cart-icon">
                                        <i class="fa-regular fa-heart"></i>
                                        <span class="cart-count" id="favoris-count"></span>
                                    </a>
                                    <a href="{{ route('shop-cart') }}" class="cart-icon">
                                        <i class="fa-regular fa-cart-shopping"></i>
                                        <span class="cart-count" id="cart-count"></span>
                                    </a>
                                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-outline-danger"
                                            style="margin-left: 10px; border-radius: 20px; padding: 6px 18px; font-size: 15px;">
                                            <i class="fa-solid fa-right-from-bracket"></i> Déconnexion
                                        </button>
                                    </form>
                                @endauth

                                {{-- <div class="header-humbager ml-30">
                                    <a class="sidebar__toggle" href="javascript:void(0)">
                                        <div class="bar-icon-2">
                                            <img src="assets/img/icon/icon-13.svg" alt="img">
                                        </div>
                                    </a>
                                </div> --}}
                            </div>
                                <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    fetch('/cart')
                                        .then(response => response.json())
                                        .then(data => {
                                            let count = 0;
                                            for (const item of Object.values(data)) {
                                                if (item.quantity) {
                                                    count += 1;
                                                }
                                            }
                                            console.log('count :', count);
                                            const cartCountElement = document.getElementById('cart-count');
                                            const cartCountElement1 = document.getElementById('cart-count1');
                                            cartCountElement.textContent = count || 0;
                                            cartCountElement1.textContent = count || 0;
                                        })
                                        .catch(error => console.error('Erreur lors de la récupération du panier :', error));
                                });
                                fetch('/fovorisByuser')
                                    .then(response => response.json())
                                    .then(data => {

                                        const favorisCountElement = document.getElementById('favoris-count');
                                        const favorisCountElement1 = document.getElementById('favoris-count1');
                                        if (favorisCountElement && favorisCountElement1) {
                                            favorisCountElement.textContent = data.count || 0;
                                            favorisCountElement1.textContent = data.count || 0;
                                        }
                                    })
                                    .catch(error => console.error('Erreur lors de la récupération des favoris :', error));
                            </script>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </header>
