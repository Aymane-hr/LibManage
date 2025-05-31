<!-- Sticky Header Section start  -->
<header class="header-1 sticky-header">
    <div class="mega-menu-wrapper">
        <div class="header-main">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-md-6 col-lg-10 col-xl-8 col-xxl-10">
                        <div class="header-left">
                            <div class="logo">
                                <a href="index.html" class="header-logo">
                                    <img src="assets/img/logo/logo.png" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            {{-- hadi ghi khlih --}}
                                            <li class="has-dropdown">
                                                <a href="accuiller.html">
                                                    Accueil
                                                </a>
                                            </li>
                                            {{-- ok --}}
                                            <li>
                                                <a href="home.html">
                                                    Boutique
                                                </a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="about.html">
                                                    À propos de nous
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog.html">
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
                            {{-- <div class="category-oneadjust gap-6 d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-grid-2"></i>
                                </div>
                                <select name="cate" class="category">
                                    <option value="1">
                                        Catégorie
                                    </option>
                                    <option value="1">
                                        Web Design
                                    </option>
                                    <option value="1">
                                        Développement Web
                                    </option>
                                    <option value="1">
                                        Design Graphique
                                    </option>
                                    <option value="1">
                                        Ingénierie Logicielle
                                    </option>
                                </select>
                                <form action="#" class="search-toggle-box d-md-block">
                                    <div class="input-area">
                                        <input type="text" placeholder="Auteur">
                                        <button class="cmn-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div> --}}
                            <div class="menu-cart">
                                @auth
                                    <a href="wishlist.html" class="cart-icon">
                                        <i class="fa-regular fa-heart"></i>
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
                            const cartCountElement = document.getElementById('cart-count1');
                            cartCountElement.textContent = count || 0;
                        })
                        .catch(error => console.error('Erreur lors de la récupération du panier :', error));
                });
            </script>


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
                                <a href="index.html" class="header-logo">
                                    <img src="assets/img/logo/logo.png" alt="logo-img">
                                </a>
                            </div>
                            <div class="mean__menu-wrapper">
                                <div class="main-menu">
                                    <nav>
                                        <ul>
                                            {{-- hadi ghi khlih --}}
                                            <li class="has-dropdown">
                                                <a href="accuiller.html">
                                                    Accueil
                                                </a>
                                            </li>
                                            {{-- ok --}}
                                            <li class="has-dropdown">
                                                <a href="home.html">
                                                    Boutique
                                                </a>
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="about.html">
                                                    À propos de nous
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog.html">
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
                            {{-- <div class="category-oneadjust gap-6 d-flex align-items-center">
                                <div class="icon">
                                    <i class="fa-sharp fa-solid fa-grid-2"></i>
                                </div>
                                <select name="cate" class="category">
                                    <option value="1">
                                        Catégorie
                                    </option>
                                    <option value="1">
                                        Web Design
                                    </option>
                                    <option value="1">
                                        Développement Web
                                    </option>
                                    <option value="1">
                                        Design Graphique
                                    </option>
                                    <option value="1">
                                        Ingénierie Logicielle
                                    </option>
                                </select>
                                <form action="#" class="search-toggle-box d-md-block">
                                    <div class="input-area">
                                        <input type="text" placeholder="Auteur">
                                        <button class="cmn-btn">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div> --}}
                            <div class="menu-cart">
                                @auth
                                    <a href="wishlist.html" class="cart-icon">
                                        <i class="fa-regular fa-heart"></i>
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
                                            cartCountElement.textContent = count || 0;
                                        })
                                        .catch(error => console.error('Erreur lors de la récupération du panier :', error));
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</header>
