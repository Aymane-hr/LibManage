@extends('layouts.app')

@section('content')
    <!-- Login Modal -->
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
                                    J'accepte vos termes et conditions
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

    <!-- Registration Modal -->
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
                                    J'accepte vos termes et conditions
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

    <!-- Hero Section start  -->
    <div class="hero-section hero-1 fix">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-8 col-lg-6">
                    <div class="hero-items">
                        <div class="book-shape">
                            <img src="assets/img/hero/book.png" alt="shape-img">
                        </div>
                        <div class="frame-shape1 float-bob-x">
                            <img src="assets/img/hero/frame.png" alt="shape-img">
                        </div>
                        <div class="frame-shape2 float-bob-y">
                            <img src="assets/img/hero/frame-2.png" alt="shape-img">
                        </div>
                        <div class="frame-shape3">
                            <img src="assets/img/hero/xstar.png" alt="img">
                        </div>
                        <div class="frame-shape4 float-bob-x">
                            <img src="assets/img/hero/frame-shape.png" alt="img">
                        </div>
                        <div class="bg-shape1">
                            <img src="assets/img/hero/bg-shape.png" alt="img">
                        </div>
                        <div class="bg-shape2">
                            <img src="assets/img/hero/bg-shape2.png" alt="shape-img">
                        </div>
                        <div class="hero-content">
                            <h6 class="wow fadeInUp" data-wow-delay=".3s">Jusqu'à 30% de réduction</h6>
                            <h1 class="wow fadeInUp" data-wow-delay=".5s">Obtenez votre nouveau livre <br> au meilleur prix
                            </h1>
                            <div class="form-clt wow fadeInUp" data-wow-delay=".9s">
                                <button type="submit" class="theme-btn">
                                    Acheter maintenant <i class="fa-solid fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-xl-4 col-lg-6">
                    <div class="girl-image">
                        <img class=" float-bob-x" src="assets/img/hero/hero-girl.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section start  -->
    <section class="feature-section fix section-padding">
        <div class="container">
            <div class="feature-wrapper">
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".2s">
                    <div class="icon">
                        <i class="icon-icon-1"></i>
                    </div>
                    <div class="content">
                        <h3>Retour & remboursement</h3>
                        <p>Garantie de remboursement</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".4s">
                    <div class="icon">
                        <i class="icon-icon-2"></i>
                    </div>
                    <div class="content">
                        <h3>Paiement sécurisé</h3>
                        <p>30% de réduction en s'abonnant</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".6s">
                    <div class="icon">
                        <i class="icon-icon-3"></i>
                    </div>
                    <div class="content">
                        <h3>Support de qualité</h3>
                        <p>Toujours en ligne 24/7</p>
                    </div>
                </div>
                <div class="feature-box-items wow fadeInUp" data-wow-delay=".8s">
                    <div class="icon">
                        <i class="icon-icon-4"></i>
                    </div>
                    <div class="content">
                        <h3>Offres quotidiennes</h3>
                        <p>20% de réduction en s'abonnant</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shop Section start  -->
    <section class="shop-section section-padding fix pt-0">
        <div class="container">
            <div class="section-title-area">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Livres en vedette</h2>
                </div>
                <a href="shop.html" class="theme-btn transparent-btn wow fadeInUp" data-wow-delay=".5s">Explorer plus <i
                        class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="swiper book-slider">

                <div class="swiper-wrapper">
                    @foreach ($produits as $produit)
                       
                        <div class="swiper-slide">
                            <div class="shop-box-items style-2">
                                <div class="book-thumb center">
                                    <a href="{{ route('shop-details', $produit->id) }}">
                                        <img src="{{ asset($produit->images->first()->image) }}" alt="img">
                                    </a>
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
                                    <h5> {{ $produit->designation }}</h5>
                                    <h3><a href="{{ route('shop-details', $produit->id) }}">{{ $produit->designation }}</a></h3>
                                    <ul class="price-list">
                                        <li>{{ $produit->prix_ht }}</li>
                                    </ul>
                                    <ul class="author-post">
                                        <li class="authot-list">
                                            <span class="thumb">
                                            </span>
                                            <span class="content">{{ $produit->auteur->nom }}</span>
                                        </li>
                                        <li class="star">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-regular fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shop-button">
                                    <form  action="{{ route('add-to-cart',$produit->id) }}" method="POST" class="d-flex align-items-center gap-3 flex-wrap mb-0">
                                        @csrf
                                        @method('POST')
                                         <button class="theme-btn"><i
                                            class="fa-solid fa-basket-shopping"></i>
                                        Ajouter au panier</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Book Catagories Section start  -->
    <section class="book-catagories-section fix section-padding">
        <div class="container">
            <div class="book-catagories-wrapper">
                <div class="section-title text-center">
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">Meilleures catégories de livres</h2>
                </div>
                <div class="array-button">
                    <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                    <button class="array-next"><i class="fal fa-arrow-right"></i></button>
                </div>
                <div class="swiper book-catagories-slider">
                    <div class="swiper-wrapper">
                        @foreach ($categoris as $categorie)
                            <div class="swiper-slide">
                                <div class="book-catagories-items">
                                    <div class="book-thumb">
                                        <img src="{{ asset($categorie->image) }}" width="100" height="100" alt="img">
                                        <div class="circle-shape">
                                            <img src="assets/img/book-categori/circle-shape.png" alt="shape-img">
                                        </div>
                                    </div>
                                    <div class="number"> 01 </div>
                                    <h3><a href="shop-details.html">{{$categorie->categorie}}</a></h3>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Banner Section start  -->
    <section class="cta-banner-section fix section-padding pt-0">
        <div class="container">
            <div class="cta-banner-wrapper section-padding bg-cover"
                style="background-image: url('assets/img/cta-banner.jpg');">
                <div class="book-shape">
                    <img src="assets/img/book-shape.png" alt="shape-img">
                </div>
                <div class="girl-shape float-bob-x">
                    <img src="assets/img/girl-shape-2.png" alt="shape-img">
                </div>
                <div class="cta-content text-center">
                    <h2 class="mb-40 wow fadeInUp" data-wow-delay=".3s"
                        style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">Obtenez 25% de réduction sur
                        tous <br> les types de super ventes</h2>
                    <a href="shop.html" class="theme-btn wow fadeInUp" data-wow-delay=".5s"
                        style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Acheter maintenant <i
                            class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section start  -->
    <section class="testimonial-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-left">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Ce que disent nos clients</h2>
            </div>
            <div class="swiper testimonial-slider">
                <div class="swiper-wrapper">
                    @foreach ($commentaires as $commentaire)
                        <div class="swiper-slide">
                            <div class="testimonial-card-items">
                                <p>
                                    {{ $commentaire->commentaire }}
                                </p>
                                <div class="client-info-wrapper d-flex align-items-center justify-content-between">
                                    <div class="client-info">
                                        <div class="client-img bg-cover"
                                            style="background-image: url('assets/img/testimonial/01.jpg');">
                                            <div class="icon">
                                                <img class="shape" src="assets/img/testimonial/shape.svg"
                                                    alt="img">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <h3> {{ $commentaire->user->name }}</h3>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- Team Section start  -->
    <section class="team-section fix section-padding pt-0 margin-bottom-30">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Auteur en vedette</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    <br> Donec at nulla nulla. Duis posuere ex lacus
                </p>
            </div>
            <div class="array-button">
                <button class="array-prev"><i class="fal fa-arrow-left"></i></button>
                <button class="array-next"><i class="fal fa-arrow-right"></i></button>
            </div>
            <div class="swiper team-slider">
                <div class="swiper-wrapper">
                    @foreach ($auteurs as $auteur)
                        <div class="swiper-slide">
                            <div class="team-box-items">
                                <div class="team-image">
                                    <div class="thumb">
<img src="{{$auteur->image}}" width="100" height="100" style="border-radius: 50%; object-fit: cover;" alt="img">
                                    </div>
                                    <div class="shape-img">
                                        <img src="assets/img/team/shape-img.png" alt="img">
                                    </div>
                                </div>
                                <div class="team-content text-center">
                                    <h6><a href="team-details.html">{{ $auteur->nom }}</a></h6>
                                    <p>{{ $auteur->produits->count() }} Livres publiés</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!-- News Section start  -->
    <section class="news-section fix section-padding section-bg">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Nos dernières actualités</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    <br> Donec at nulla nulla. Duis posuere ex lacus
                </p>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="news-card-items">
                            <div class="news-image">
                                @foreach ($blog->images as $image)

                                    <img src="{{ $image->image }}" alt="img">
                                @endforeach
                                @foreach ($blog->blogsTags as $tag)
                                    <div class="post-box">
                                        <span class="tag">{{ $tag->tag->tag }}</span>
                                    </div>
                                @endforeach
                            </div>
                            <div class="news-content">
                                <ul>
                                    <li>
                                        <i class="fa-light fa-calendar-days"></i>{{ $blog->created_at->format('d M Y') }}
                                    </li>
                                </ul>
                                <h3><a href="news-details.html">{{ $blog->titre }}</a></h3>
                                <a href="{{ route('blog-details', $blog->id) }}" class="theme-btn-2">Lire la suite <i
                                        class="fa-regular fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
