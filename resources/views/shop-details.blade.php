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
                       <input class="inputField" type="text" name="name" id="name2" placeholder="Nom d'utilisateur">
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
          <img src="assets/img/hero/book1.png" alt="livre">
       </div>
       <div class="book2">
          <img src="assets/img/hero/book2.png" alt="livre">
       </div>
       <div class="container">
          <div class="page-heading">
             <h1>Détails du produit</h1>
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
                       Détails du produit
                    </li>
                </ul>
             </div>
          </div>
       </div>
    </div>

    <!-- Shop Details Section Start -->
    <section class="shop-details-section fix section-padding">
       <div class="container">
          <div class="shop-details-wrapper">
             <div class="row g-4">
                <div class="col-lg-5">
                    <div class="shop-details-image">
                       <div class="tab-content">
                          @foreach ($images as $key =>$image )
                          <div id="thumb{{$loop->index + 1}}" class="tab-pane fade @if($key == 0) show active @endif">
                             <div class="shop-details-thumb">
                                <img src="{{ $image->image }}" width="450" height="450" alt="img">
                             </div>
                          </div>
                          @endforeach
                       </div>
                       <ul class="nav">
                          @foreach ($images as $key =>$image )
                          <li class="nav-item">
                             <a href="#thumb{{$loop->index + 1}}" data-bs-toggle="tab" class="nav-link  @if($key == 0)active @endif">
                                <img src="{{ $image->image }}" width="50" alt="img">
                             </a>
                          </li>
                          @endforeach
                       </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="shop-details-content">
                       <div class="title-wrapper">
                          <h2>{{$designation}}</h2>
                          {{-- <h5>Disponibilité en stock.</h5> --}}
                       </div>
                       <div class="star">
                          <a href="shop-details.html"> <i class="fas fa-star"></i></a>
                          <a href="shop-details.html"><i class="fas fa-star"></i></a>
                          <a href="shop-details.html"> <i class="fas fa-star"></i></a>
                          <a href="shop-details.html"><i class="fas fa-star"></i></a>
                          <a href="shop-details.html"><i class="fa-regular fa-star"></i></a>
                          {{-- <span>(1 Avis client)</span> --}}
                       </div>

                       <div class="price-list">
                          <h3>{{$prix}}</h3>
                       </div>
                       <div class="cart-wrapper">
                          <div class="d-flex align-items-center gap-3 flex-wrap">
                             <form action="{{ route('add-to-cart',$id) }}" method="POST" class="d-flex align-items-center gap-3 flex-wrap mb-0">
                                @csrf
                                @method('POST')
                                <div class="quantity-basket mb-0">
                                    <p class="qty mb-0">
                                       <button class="qtyminus" aria-hidden="true" type="button">−</button>
                                       <input type="number" name="qty" id="qty2" min="1" max="10" step="1" value="1">
                                       <button class="qtyplus" aria-hidden="true" type="button">+</button>
                                    </p>
                                </div>
                                <button type="submit" class="theme-btn mb-0">
                                    <i class="fa-solid fa-basket-shopping"></i> Ajouter au panier
                                </button>
                             </form>
                          </div>
                          <div class="icon-box">
                             <a href="shop-details.html" class="icon">
                                <i class="far fa-heart"></i>
                             </a>
                             {{-- <a href="shop-details.html" class="icon-2">
                                <img src="assets/img/icon/shuffle.svg" alt="svg-icon">
                             </a> --}}
                          </div>
                       </div>
                       <div class="category-box">
                          <div class="category-list">
                             <ul>
                                <li>
                                    <span>ISBN :</span> {{$isbn}}
                                </li>
                                <li>
                                    <span>Catégorie :</span> {{$category}}
                                </li>
                             </ul>
                          </div>
                       </div>
                    </div>
                </div>
             </div>
          </div>
       </div>
    </section>

    <!-- Top Ratting Book Section Start -->
    <section class="top-ratting-book-section fix section-padding pt-0">
       <div class="container">
          <div class="section-title text-center">
             <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Produits similaires</h2>
             <p class="wow fadeInUp" data-wow-delay=".5s">
                Interdum et malesuada fames ac ante ipsum primis in faucibus. <br> Donec at nulla nulla. Duis
                posuere ex lacus
             </p>
          </div>
          <div class="swiper book-slider">
             <div class="swiper-wrapper">
                @foreach($produits as $produit)
            
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

@endsection
