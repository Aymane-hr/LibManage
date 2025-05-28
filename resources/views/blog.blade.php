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
                             <input type="checkbox" class="form-check-input" name="save-for-next"
                                id="saveForNext">
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
                             <img src="assets/img/facebook.png" alt="facebook">
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
                       <input class="inputField" type="text" name="name" id="name" placeholder="Nom d'utilisateur">
                       <input class="inputField" type="email" name="email" placeholder="Adresse e-mail">
                       <input class="inputField" type="password" name="password" placeholder="Mot de passe">
                       <input class="inputField" type="password" name="password"
                          placeholder="Confirmer le mot de passe">
                       <div class="input-check remember-me">
                          <div class="checkbox-wrapper">
                             <input type="checkbox" class="form-check-input" name="save-for-next"
                                id="rememberMe">
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
                             <img src="assets/img/facebook.png" alt="facebook">
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
          <img src="assets/img/hero/book1.png" alt="livre">
       </div>
       <div class="book2">
          <img src="assets/img/hero/book2.png" alt="livre">
       </div>
       <div class="container">
          <div class="page-heading">
             <h1>Grille du blog</h1>
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
                       Grille du blog
                    </li>
                </ul>
             </div>
          </div>
       </div>
    </div>

    <!-- News Section Start -->
    <section class="news-section fix section-padding">
       <div class="container">
          <div class="row g-4">
             <!-- Traduisez les titres, catégories, boutons, etc. ci-dessous -->
             <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <div class="news-card-items style-2 mt-0">
                    <div class="news-image">
                       <img src="assets/img/news/05.jpg" alt="img">
                       <img src="assets/img/news/05.jpg" alt="img">
                       <div class="post-box">
                          Librairie
                       </div>
                    </div>
                    <div class="news-content">
                       <ul>
                          <li>
                             <i class="fa-light fa-calendar-days"></i>
                             10 Fév 2024
                          </li>
                          <li>
                             <i class="fa-regular fa-user"></i>
                             Par Admin
                          </li>
                       </ul>
                       <h3><a href="news-details.html">Top 5 des jeux de tarot pour le sommet mondial du tarot</a></h3>
                       <a href="news-details.html" class="theme-btn-2">Lire la suite <i
                             class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
             </div>
             <!-- Répétez la traduction pour chaque carte/news -->
             <!-- ... -->
             <!-- Exemple pour une autre carte -->
             <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <div class="news-card-items style-2 mt-0">
                    <div class="news-image">
                       <img src="assets/img/news/06.jpg" alt="img">
                       <img src="assets/img/news/06.jpg" alt="img">
                       <div class="post-box">
                          Éducation
                       </div>
                    </div>
                    <div class="news-content">
                       <ul>
                          <li>
                             <i class="fa-light fa-calendar-days"></i>
                             20 Mar 2024
                          </li>
                          <li>
                             <i class="fa-regular fa-user"></i>
                             Par Admin
                          </li>
                       </ul>
                       <h3><a href="news-details.html">Dans les coulisses avec l'auteure Victoria Aveyard</a></h3>
                       <a href="news-details.html" class="theme-btn-2">Lire la suite <i
                             class="fa-regular fa-arrow-right-long"></i></a>
                    </div>
                </div>
             </div>
             <!-- Continuez à traduire les autres éléments de la même manière -->
             <!-- ... -->
          </div>
          <div class="page-nav-wrap text-center wow fadeInUp" data-wow-delay=".3s">
             <ul>
                <li><a class="previous" href="news-grid.html">Précédent</a></li>
                <li><a class="page-numbers" href="news-grid.html">1</a></li>
                <li><a class="page-numbers" href="news-grid.html">2</a></li>
                <li><a class="page-numbers" href="news-grid.html">3</a></li>
                <li><a class="page-numbers" href="news-grid.html">...</a></li>
                <li><a class="next" href="news-grid.html">Suivant</a></li>
             </ul>
          </div>
       </div>
    </section>

@endsection
