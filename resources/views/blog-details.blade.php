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
                            <input class="inputField" type="text" name="name" id="name2" placeholder="Nom d'utilisateur">
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
                <h1>Détails du blog</h1>
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
                            Détails du blog
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Détails de l'actualité Début -->
    <section class="news-details fix section-padding">
        <div class="container">
            <div class="news-details-area">
                <div class="row g-5">
                    <div class="col-xl-9 col-lg-8">
                        <div class="blog-post-details">
                            <div class="single-blog-post">
                                <div class="post-featured-thumb bg-cover"
                                    style="background-image: url('assets/img/news/post-4.jpg');"></div>
                                <div class="post-content">
                                    <ul class="post-list d-flex align-items-center">
                                        {{-- <li>
                                            <i class="fa-light fa-user"></i>
                                            Par Admin
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-regular fa-comments"></i>
                                            2 Commentaires
                                        </li> --}}
                                        @foreach ( $blog->blogsTags as $tag )
                                        <li>
                                           {{ $tag->tag->tag }}
                                        </li>
                                        @endforeach

                                    </ul>
                                    <h3>{{ $blog->titre }} </h3>
                                    <p class="mb-3">
                                        {{ $blog->contenu }}
                                    </p>
                                    <div class="row g-4 mt-4">
                                        @foreach ($blog->images as $image)
                                            <div class="col-lg-6">
                                                <div class="details-image">
                                                    <img src="{{ asset($image->image) }}" alt="img">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-lg-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Recherche</h3>
                                </div>
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Rechercher ici">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Catégories</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        <li><a href="news-details.html">Aventure</a> <span>(5)</span></li>
                                        <li><a href="news-details.html">Éducation</a> <span>(3)</span></li>
                                        <li class="active"><a href="news-details.html">Romance</a><span>(6)</span></li>
                                        <li><a href="news-details.html">Fiction Moderne</a> <span>(2)</span></li>
                                        <li><a href="news-details.html">Contemporain</a> <span>(4)</span></li>
                                        <li><a href="news-details.html">Art & Littérature</a> <span>(7)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Articles récents</h3>
                                </div>
                                <div class="recent-post-area">
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp3.jpg" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    18 Déc, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    Top 10 des jeux de tarot pour le sommet mondial du tarot
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp4.jpg" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    20 Mars, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    Eu Parturient Dictumst Fames Quam Tempor
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="recent-items">
                                        <div class="recent-thumb">
                                            <img src="assets/img/news/pp5.jpg" alt="img">
                                        </div>
                                        <div class="recent-content">
                                            <ul>
                                                <li>
                                                    <i class="fa-solid fa-calendar-days"></i>
                                                    10 Mars, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    Intelligence des étudiants dans l'éducation...
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Tags</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <div class="tagcloud">
                                        <a href="news-standard.html">Romance</a>
                                        <a href="news-details.html">Livres</a>
                                        <a href="news-details.html">Astuces & Conseils</a>
                                        <a href="news-details.html">Aventure</a>
                                        <a href="news-details.html">Éducation</a>
                                        <a href="news-details.html">Librairie</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
