@extends('layouts.app')
@section('content')

<!-- Section Fil d'Ariane Début -->
<div class="breadcrumb-wrapper mb-0" style="margin-bottom:0;">
    <div class="book1">
        <img src="{{asset('assets/img/hero/book.png')}}" alt="livre">
    </div>
    <div class="book2">
        <img src="{{asset('assets/img/hero/book.png')}}" alt="livre">
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
<section class="news-details fix section-padding pt-0 mt-0">
    <div class="container">
        <div class="news-details-area">
            <div class="row g-5">
                <div class="col-xl-9 col-lg-8">
                    <div class="blog-post-details">
                        <div class="single-blog-post card shadow-sm border-0">
                            <div class="post-content p-4">
                                <ul class="post-list d-flex flex-wrap align-items-center mb-3 gap-2">
                                    @foreach ($blog->blogsTags as $tag)
                                        <li>
                                            <span class="badge bg-primary text-light">{{ $tag->tag->tag }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                                <h3 class="fw-bold mb-3">{{ $blog->titre }}</h3>
                                <p class="mb-4 fs-5 text-secondary">
                                    {{ $blog->contenu }}
                                </p>
                                @if($blog->images->count())
                                <div class="row g-3 mt-2">
                                    @foreach ($blog->images as $image)
                                        <div class="col-md-6">
                                            <div class="details-image rounded overflow-hidden">
                                                <img src="{{ asset($image->image) }}" alt="img" class="img-fluid w-100 rounded shadow-sm">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar (optional, uncomment if needed)
                <div class="col-xl-3 col-lg-4">
                    <div class="main-sidebar">
                        ... (sidebar content)
                    </div>
                </div>
                -->
            </div>
        </div>
    </div>
</section>
@endsection
