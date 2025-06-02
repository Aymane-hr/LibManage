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
                                data-bs-target="#registrationModal">Créer
                                un compte</button>
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
                            <input class="inputField" type="text" name="name" id="name"
                                placeholder="Nom d'utilisateur">
                            <input class="inputField" type="email" name="email" placeholder="Adresse e-mail">
                            <input class="inputField" type="password" name="password" placeholder="Mot de passe">
                            <input class="inputField" type="password" name="password"
                                placeholder="Confirmer le mot de passe">
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
                                data-bs-target="#registrationModal">Créer
                                un compte</button>
                            <div class="signUpBg">
                                <img src="assets/img/registrationbg.jpg" alt="signUpBg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcumb Section Start -->
    <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="{{asset('assets/img/hero/book.png')}}" alt="livre">
        </div>
        <div class="book2">
            <img src="{{asset('assets/img/hero/book.png')}}" alt="livre">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>À propos de nous</h1>
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
                            À propos de nous
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section Start -->
    <section class="about-section fix section-padding">
        <div class="container">
            <div class="about-wrapper">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-image">
                            <img src="assets/img/about.jpg" alt="img">
                            <div class="video-box">
                                <a href="https://www.youtube.com/watch?v=Cn4G2lZ_g2I"
                                    class="video-btn ripple video-popup">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <h2 class="wow fadeInUp" data-wow-delay=".3s">À propos de la librairie <br> Bookle</h2>
                            </div>
                            <p class="mt-3 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                                Nullam convallis ullamcorper nulla. Nam accumsan ac leo quis posuere. Nunc rutrum lorem
                                justo, at blandit mauris ullamcorper tristique. Suspendisse vel ante venenatis,
                                porttitor ligula sed, iaculis metus. Nullam non erat gravida, viverra leo ut, maximus
                                tortor. Pellentesque vitae nunc rhoncus, lacinia nulla sed, commodo lectus. Curabitur at
                                consectetur velit.
                            </p>
                            <p class="mt-3 wow fadeInUp" data-wow-delay=".7s">
                                Morbi cursus enim in consequat suscipit. Quisque id dui ante. Praesent auctor sed velit
                                ac aliquet. Morbi consectetur sem nec ipsum malesuada, ut gravida nisl molestie. Proin
                                hendrerit ullamcorper dui, quis convallis mauris cursus nec. Interdum et malesuada fames
                                ac ante ipsum primis in faucibus. Vivamus ac laoreet orci.
                            </p>
                            <a href="about.html" class="link-btn wow fadeInUp" data-wow-delay=".8s">Aperçu <i
                                    class="fa-regular fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Cta Banner Section Start -->
    <section class="cta-banner-section fix section-padding pt-0">
        <div class="container">
            <div class="cta-banner-wrapper section-padding bg-cover"
                style="background-image: url('assets/img/cta-banner.jpg');">
                <div class="book-shape">
                    <img src="assets/img/book-shape.png" alt="forme-img">
                </div>
                <div class="girl-shape float-bob-x">
                    <img src="assets/img/girl-shape-2.png" alt="forme-img">
                </div>
                <div class="cta-content text-center">
                    <h2 class="text-white mb-40 wow fadeInUp" data-wow-delay=".3s">Obtenez 25% de réduction sur tout <br>
                        type de super vente</h2>
                    <a href="shop.html" class="theme-btn white-bg wow fadeInUp" data-wow-delay=".5s">Acheter maintenant
                        <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>



    <!-- Team Section Start -->
    <section class="team-section fix section-padding pt-0 margin-bottom-30">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Auteur à la une</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">Interdum et malesuada fames ac ante ipsum primis in
                    faucibus. <br> Donec at nulla nulla. Duis posuere ex lacus</p>
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
                                        <img src="{{ $auteur->image }}" width="100" height="100"
                                            style="border-radius: 50%; object-fit: cover;" alt="img">
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
@endsection
