@extends('layouts.app')
@section('content')
 
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
                                @foreach ($produit->images as $key => $image)
                                    <div id="thumb{{ $loop->index + 1 }}"
                                        class="tab-pane fade @if ($key == 0) show active @endif">
                                        <div class="shop-details-thumb">
                                            <img src="{{ $image->image }}" width="450" height="450" alt="img">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <ul class="nav">
                                @foreach ($produit->images as $key => $image)
                                    <li class="nav-item">
                                        <a href="#thumb{{ $loop->index + 1 }}" data-bs-toggle="tab"
                                            class="nav-link  @if ($key == 0) active @endif">
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
                                <h2>{{ $produit->designation }}</h2>
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
                                <h3>{{ $produit->prix_ht }}</h3>
                            </div>
                            <div class="cart-wrapper">
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <form action="{{ route('add-to-cart', $id) }}" method="POST"
                                        class="d-flex align-items-center gap-3 flex-wrap mb-0">
                                        @csrf
                                        @method('POST')
                                        <div class="quantity-basket mb-0">
                                            <p class="qty mb-0">
                                                <button class="qtyminus" aria-hidden="true" type="button">−</button>
                                                <input type="number" name="qty" id="qty2" min="1"
                                                    max="10" step="1" value="1">
                                                <button class="qtyplus" aria-hidden="true" type="button">+</button>
                                            </p>
                                        </div>
                                        <button type="submit" class="theme-btn mb-0">
                                            <i class="fa-solid fa-basket-shopping"></i> Ajouter au panier
                                        </button>
                                    </form>
                                </div>
                                <div class="icon-box">
                                    <form action="{{ route('save-favori', $id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="icon">

                                            @if ($produit->ifHaveFavori())
                                                <i class="fas fa-heart" style="color: red;"></i>
                                            @else
                                                <i class="far fa-heart"></i>
                                            @endif
                                        </button>
                                    </form>
                                    {{-- <a href="shop-details.html" class="icon-2">
                                <img src="assets/img/icon/shuffle.svg" alt="svg-icon">
                             </a> --}}
                                </div>
                            </div>
                            <div class="category-box">
                                <div class="category-list">
                                    <ul>
                                        <li>
                                            <span>ISBN :</span> {{ $produit->isbn }}
                                        </li>
                                        <li>
                                            <span>Catégorie :</span> {{ $produit->category->category ?? null }}
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
                    @foreach ($produits as $produit)
                        <div class="swiper-slide">
                            <div class="shop-box-items style-2">
                                <div class="book-thumb center">
                                    <a href="{{ route('shop-details', $produit->id) }}">
                                        <img src="{{ asset($produit->images->first()->image) }}" alt="img">
                                    </a>
                                    <ul class="shop-icon d-grid justify-content-center align-items-center">
                                        <li>
                                            <form action="{{ route('save-favori', $produit->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('POST')

                                                <button type="submit" class="icon"
                                                    style="background: none; border: none; padding: 0;">
                                                    @if ($produit->ifHaveFavori())
                                                        <i class="fas fa-heart" style="color: red;"></i>
                                                    @else
                                                        <i class="far fa-heart"></i>
                                                    @endif
                                                </button>
                                            </form>
                                        </li>
                                        <li>
                                            <a href="{{ route('shop-details', $produit->id) }}"><i
                                                    class="far fa-eye"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="shop-content">
                                    <h5> {{ $produit->designation }}</h5>
                                    <h3><a
                                            href="{{ route('shop-details', $produit->id) }}">{{ $produit->designation }}</a>
                                    </h3>
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
                                    <form action="{{ route('add-to-cart', $produit->id) }}" method="POST"
                                        class="d-flex align-items-center gap-3 flex-wrap mb-0">
                                        @csrf
                                        @method('POST')
                                        <button class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
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
