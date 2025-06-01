@extends('layouts.app')
@section('content')
    <!-- Modal de Connexion -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">
                            <h1 id="loginModalLabel">Bon retour !</h1>
                            <input class="inputField" type="email" name="email" placeholder="Adresse e-mail">
                            <input class="inputField" type="password" name="password" placeholder="Mot de passe">
                            <div class="input-check remember-me">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext">
                                    <label for="saveForNext">Se souvenir de moi</label>
                                </div>
                                <div class="text"> <a href="index-2.html">Mot de passe oublié ?</a> </div>
                            </div>
                            <div class="loginBtn">
                                <a href="index-2.html" class="theme-btn rounded-0"> Se connecter </a>
                            </div>
                            <div class="orting-badge">
                                Ou
                            </div>
                            <div>
                                <a class="another-option" href="https://www.google.com/">
                                    <img src="assets/img/google.png" alt="google">
                                    Continuer avec Google
                                </a>
                            </div>
                            <div>
                                <a class="another-option another-option-two" href="https://www.facebook.com/">
                                    <img src="assets/img/facebook.png" alt="google">
                                    Continuer avec Facebook
                                </a>
                            </div>

                            <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault">
                                <label class="form-check-label">
                                    J'accepte vos termes & conditions
                                </label>
                            </div>
                        </div>

                        <div class="banner">
                            <button type="button" class="rounded-0 login-btn" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Se connecter</button>
                            <button type="button" class="theme-btn rounded-0 register-btn" data-bs-toggle="modal"
                                data-bs-target="#registrationModal">Créer un compte</button>
                            <div class="loginBg">
                                <img src="assets/img/signUpbg.jpg" alt="signUpBg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal d'Inscription -->
    <div class="modal fade" id="registrationModal" tabindex="-1" aria-labelledby="registrationModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">
                            <h1 id="registrationModalLabel">Créer un compte !</h1>
                            <input class="inputField" type="text" name="name" id="name" placeholder="Nom d'utilisateur">
                            <input class="inputField" type="email" name="email" placeholder="Adresse e-mail">
                            <input class="inputField" type="password" name="password" placeholder="Mot de passe">
                            <input class="inputField" type="password" name="password" placeholder="Confirmer le mot de passe">
                            <div class="input-check remember-me">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" class="form-check-input" name="save-for-next" id="rememberMe">
                                    <label for="rememberMe">Se souvenir de moi</label>
                                </div>
                                <div class="text"> <a href="index-2.html">Mot de passe oublié ?</a> </div>
                            </div>
                            <div class="loginBtn">
                                <a href="index-2.html" class="theme-btn rounded-0"> Se connecter </a>
                            </div>
                            <div class="orting-badge">
                                Ou
                            </div>
                            <div>
                                <a class="another-option" href="https://www.google.com/">
                                    <img src="assets/img/google.png" alt="google">
                                    Continuer avec Google
                                </a>
                            </div>
                            <div>
                                <a class="another-option another-option-two" href="https://www.facebook.com/">
                                    <img src="assets/img/facebook.png" alt="google">
                                    Continuer avec Facebook
                                </a>
                            </div>
                            <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault">
                                <label class="form-check-label">
                                    J'accepte vos termes & conditions
                                </label>
                            </div>
                        </div>

                        <div class="banner">
                            <button type="button" class="rounded-0 login-btn" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Se connecter</button>
                            <button type="button" class="theme-btn rounded-0 register-btn" data-bs-toggle="modal"
                                data-bs-target="#registrationModal">Créer un compte</button>
                            <div class="signUpBg">
                                <img src="assets/img/registrationbg.jpg" alt="signUpBg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Fil d'Ariane Début -->
    <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="assets/img/hero/book1.png" alt="livre">
        </div>
        <div class="book2">
            <img src="assets/img/hero/book2.png" alt="livre">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>Boutique par défaut</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="index.html">
                                Accueil
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Boutique par défaut
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Boutique Début -->
    <section class="shop-section fix section-padding">
        <div class="container">
            <div class="shop-default-wrapper">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 order-2 order-md-1 wow fadeInUp" data-wow-delay=".3s">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Recherche</h5>
                                </div>
                                <form action="{{ route('shop-default-search') }}" method="POST"
                                    class="search-toggle-box">
                                    @csrf
                                    @method('POST')
                                    <div class="input-area search-container">
                                        <input class="search-input" name="search"
                                            value="{{ old('search', $search ?? null) }}" type="text"
                                            placeholder="Rechercher ici">
                                        <button type="submit" class="cmn-btn search-icon">
                                            <i class="far fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h5>Catégories</h5>
                                </div>
                                <div class="categories-list">
                                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                        @foreach ($categorys as $category)
                                            <li class="nav-item" role="categorie">
                                                <a href="{{ route('shop-default-filter', ['id_categorie' => $category->id]) }}"
                                                    class="nav-link {{ ($id_categorie ?? null) == $category->id ? 'active' : '' }}"
                                                    id="pills-arts-tab">{{ $category->categorie }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 order-1 order-md-2">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-arts" role="tabpanel"
                                aria-labelledby="pills-arts-tab" tabindex="0">
                                <div class="row">
                                    @if ($produits->isEmpty())
                                        <div class="col-12 text-center">
                                            <p>Aucun produit trouvé.</p>
                                        </div>
                                    @endif
                                    @foreach ($produits as $produit)
                                        @php
                                            $imagePath = App\Models\Image::where('produit_id', $produit->id)->first()
                                                ->image;
                                        @endphp
                                        <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                                            <div class="shop-box-items">
                                                <div class="book-thumb center">
                                                    <a href="{{ route('shop-details', $produit->id) }}"><img
                                                            src="{{ $imagePath }}" alt="img"></a>
                                                    <ul class="shop-icon d-grid justify-content-center align-items-center">
                                                        <li>
                                                            <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="{{ route('shop-details', $produit->id) }}"><i
                                                                    class="far fa-eye"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="shop-content">
                                                    <h3><a
                                                            href="{{ route('shop-details', $produit->id) }}">{{ $produit->designation }}</a>
                                                    </h3>
                                                    <ul class="price-list">
                                                        <li>{{ $produit->prix_ht }} €</li>
                                                        <li>
                                                            <i class="fa-solid fa-star"></i>
                                                            3.4 (25)
                                                        </li>
                                                    </ul>
                                                    <div class="shop-button">
                                                        <form action="{{ route('add-to-cart',$produit->id) }}" method="POST"
                                                            class="d-flex align-items-center gap-3 flex-wrap mb-0">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit" href="{{ route('shop-details', $produit->id) }}"
                                                                class="theme-btn"><i
                                                                    class="fa-solid fa-basket-shopping"></i>
                                                                Ajouter au panier</button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                        <div class="page-nav-wrap text-center">
                            {{ $produits->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
