@extends('layouts.app')
@section('content')

     <!-- Login Modal -->
     <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="close-btn">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">
                            <h1 id="loginModalLabel">welcome back!</h1>
                            <input class="inputField" type="email" name="email" placeholder="Email Address">
                            <input class="inputField" type="password" name="password" placeholder="Enter Password">
                            <div class="input-check remember-me">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" class="form-check-input" name="save-for-next"
                                        id="saveForNext">
                                    <label for="saveForNext">Remember me</label>
                                </div>
                                <div class="text"> <a href="index-2.html">Forgot Your password?</a> </div>
                            </div>
                            <div class="loginBtn">
                                <a href="index-2.html" class="theme-btn rounded-0"> Log in </a>
                            </div>
                            <div class="orting-badge">
                                Or
                            </div>
                            <div>
                                <a class="another-option" href="https://www.google.com/">
                                    <img src="assets/img/google.png" alt="google">
                                    Continue With Google
                                </a>
                            </div>
                            <div>
                                <a class="another-option another-option-two" href="https://www.facebook.com/">
                                    <img src="assets/img/facebook.png" alt="google">
                                    Continue With Facebook
                                </a>
                            </div>

                            <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault">
                                <label class="form-check-label">
                                    I Accept Your Terms & Conditions
                                </label>
                            </div>
                        </div>

                        <div class="banner">
                            <button type="button" class="rounded-0 login-btn" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Log in</button>
                            <button type="button" class="theme-btn rounded-0 register-btn" data-bs-toggle="modal"
                                data-bs-target="#registrationModal">Create
                                Account</button>
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
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="identityBox">
                        <div class="form-wrapper">
                            <h1 id="registrationModalLabel">Create account!</h1>
                            <input class="inputField" type="text" name="name" id="name2" placeholder="User Name">
                            <input class="inputField" type="email" name="email" placeholder="Email Address">
                            <input class="inputField" type="password" name="password" placeholder="Enter Password">
                            <input class="inputField" type="password" name="password"
                                placeholder="Enter Confirm Password">
                            <div class="input-check remember-me">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" class="form-check-input" name="save-for-next"
                                        id="rememberMe">
                                    <label for="rememberMe">Remember me</label>
                                </div>
                                <div class="text"> <a href="index-2.html">Forgot Your password?</a> </div>
                            </div>
                            <div class="loginBtn">
                                <a href="index-2.html" class="theme-btn rounded-0"> Log in </a>
                            </div>
                            <div class="orting-badge">
                                Or
                            </div>
                            <div>
                                <a class="another-option" href="https://www.google.com/">
                                    <img src="assets/img/google.png" alt="google">
                                    Continue With Google
                                </a>
                            </div>
                            <div>
                                <a class="another-option another-option-two" href="https://www.facebook.com/">
                                    <img src="assets/img/facebook.png" alt="google">
                                    Continue With Facebook
                                </a>
                            </div>
                            <div class="form-check-3 d-flex align-items-center from-customradio-2 mt-3">
                                <input class="form-check-input" type="radio" name="flexRadioDefault">
                                <label class="form-check-label">
                                    I Accept Your Terms & Conditions
                                </label>
                            </div>
                        </div>

                        <div class="banner">
                            <button type="button" class="rounded-0 login-btn" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Log in</button>
                            <button type="button" class="theme-btn rounded-0 register-btn" data-bs-toggle="modal"
                                data-bs-target="#registrationModal">Create
                                Account</button>
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
            <img src="assets/img/hero/book1.png" alt="book">
        </div>
        <div class="book2">
            <img src="assets/img/hero/book2.png" alt="book">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>Shop Details</h1>
                <div class="page-header">
                    <ul class="breadcrumb-items wow fadeInUp" data-wow-delay=".3s">
                        <li>
                            <a href="index.html">
                                Home
                            </a>
                        </li>
                        <li>
                            <i class="fa-solid fa-chevron-right"></i>
                        </li>
                        <li>
                            Shop Details
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
                                        <img src="{{ $image->image }}" alt="img">
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
                                {{-- <h5>Stock availability.</h5> --}}
                            </div>
                            <div class="star">
                                <a href="shop-details.html"> <i class="fas fa-star"></i></a>
                                <a href="shop-details.html"><i class="fas fa-star"></i></a>
                                <a href="shop-details.html"> <i class="fas fa-star"></i></a>
                                <a href="shop-details.html"><i class="fas fa-star"></i></a>
                                <a href="shop-details.html"><i class="fa-regular fa-star"></i></a>
                                <span>(1 Customer Reviews)</span>
                            </div>

                            <div class="price-list">
                                <h3>{{$prix}}</h3>
                            </div>
                            <div class="cart-wrapper">
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <form action="{{ route('add-to-cart') }}" method="POST" class="d-flex align-items-center gap-3 flex-wrap mb-0">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="image" value="{{ $images[0]['image'] }}">
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <input type="hidden" name="prix" value="{{ $prix }}">
                                        <input type="hidden" name="designation" value="{{ $designation }}">
                                        <input type="hidden" name="isbn" value="{{ $isbn }}">
                                        <div class="quantity-basket mb-0">
                                            <p class="qty mb-0">
                                                <button class="qtyminus" aria-hidden="true" type="button">−</button>
                                                <input type="number" name="qty" id="qty2" min="1" max="10" step="1" value="1">
                                                <button class="qtyplus" aria-hidden="true" type="button">+</button>
                                            </p>
                                        </div>
                                        <button type="submit" class="theme-btn mb-0">
                                            <i class="fa-solid fa-basket-shopping"></i> Add To Cart
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
                                            <span>ISBN:</span> {{$isbn}}
                                        </li>
                                        <li>
                                            <span>Catégorie :</span> {{$category}}
                                        </li>
                                    </ul>


                                </div>
                            </div>
                            {{-- <div class="box-check">
                                <div class="check-list">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Free shipping orders from $150
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            30 days exchange & return
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Mamaya Flash Discount: Starting at 30% Off
                                        </li>
                                        <li>
                                            <i class="fa-solid fa-check"></i>
                                            Safe & Secure online shopping
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="social-icon">
                                <h6>Also Available On:</h6>
                                <a href="https://www.customer.io/"><img src="assets/img/cutomerio.png" alt="cutomer.io"></a>
                                <a href="https://www.amazon.com/"><img src="assets/img/amazon.png" alt="amazon"></a>
                                <a href="https://www.dropbox.com/"><img src="assets/img/dropbox.png" alt="dropbox"></a>
                            </div> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="single-tab section-padding pb-0">
                    <ul class="nav mb-5" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#description" data-bs-toggle="tab" class="nav-link ps-0 active"
                                aria-selected="true" role="tab">
                                <h6>Description</h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#additional" data-bs-toggle="tab" class="nav-link" aria-selected="false"
                                tabindex="-1" role="tab">
                                <h6>Additional Information </h6>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#review" data-bs-toggle="tab" class="nav-link" aria-selected="false" tabindex="-1"
                                role="tab">
                                <h6>reviews (3)</h6>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="description" class="tab-pane fade show active" role="tabpanel">
                            <div class="description-items">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quis erat
                                    interdum, tempor turpis in, sodales ex. In hac habitasse platea dictumst. Etiam
                                    accumsan scelerisque urna, a lobortis velit vehicula ut. Maecenas porttitor dolor a
                                    velit aliquet, et euismod nibh vulputate. Duis nunc velit, lacinia vel risus in,
                                    finibus sodales augue. Aliquam lacinia imperdiet dictum. Etiam tempus finibus
                                    tortor, quis placerat arcu tristique in. Sed vitae dui a diam luctus maximus.
                                    Quisque nec felis dapibus, dapibus enim vitae, vestibulum libero. Aliquam erat
                                    volutpat. Phasellus luctus rhoncus justo. Duis a nulla sit amet justo aliquam
                                    ullamcorper. Phasellus nulla lorem, pretium et libero in, porta auctor dui. In a
                                    ornare purus, et efficitur elit. Etiam consectetur sit amet quam ut tincidunt. Donec
                                    gravida ultricies tellus ac pharetra.
                                    Praesent a pulvinar purus. Proin sollicitudin leo eget mi sagittis aliquam. Donec
                                    sollicitudin ex ac lobortis mollis. Sed eget libero nec mi
                                </p>
                            </div>
                        </div>
                        <div id="additional" class="tab-pane fade" role="tabpanel">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="text-1">Availability</td>
                                            <td class="text-2">Available</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Categories</td>
                                            <td class="text-2">Adventure</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Publish Date</td>
                                            <td class="text-2">2022-10-24</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Total Page</td>
                                            <td class="text-2">330</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Format</td>
                                            <td class="text-2">Hardcover</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Country</td>
                                            <td class="text-2">United States</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Language</td>
                                            <td class="text-2">English</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Dimensions</td>
                                            <td class="text-2">30 × 32 × 46 Inches</td>
                                        </tr>
                                        <tr>
                                            <td class="text-1">Weight</td>
                                            <td class="text-2">2.5 Pounds</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="review" class="tab-pane fade" role="tabpanel">
                            <div class="review-items">
                                <div class="review-wrap-area d-flex gap-4">
                                    <div class="review-thumb">
                                        <img src="assets/img/shop-details/review.png" alt="img">
                                    </div>
                                    <div class="review-content">
                                        <div
                                            class="head-area d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="cont">
                                                <h5><a href="news-details.html">Leslie Alexander</a></h5>
                                                <span>February 10, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mt-30 mb-4">
                                            Neque porro est qui dolorem ipsum quia quaed inventor veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed sit amet finibus eros. Lorem
                                            Ipsum is <br> simply dummy
                                        </p>
                                    </div>
                                </div>
                                <div class="review-title mt-5 py-15 mb-30">
                                    <h4>Your Rating*</h4>
                                    <div class="rate-now d-flex align-items-center">
                                        <p>Your Rating*</p>
                                        <div class="star">
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                            <i class="fa-light fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="review-form">
                                    <form action="#" id="contact-form" method="POST">
                                        <div class="row g-4">
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <span>Your Name*</span>
                                                    <input type="text" name="name" id="name" placeholder="Your Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-clt">
                                                    <span>Your Email*</span>
                                                    <input type="text" name="email" id="email" placeholder="Your Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".8">
                                                <div class="form-clt">
                                                    <span>Message*</span>
                                                    <textarea name="message" id="message"
                                                        placeholder="Write Message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".9">
                                                <div class="form-check d-flex gap-2 from-customradio">
                                                    <input type="checkbox" class="form-check-input"
                                                        name="flexRadioDefault" id="flexRadioDefault12">
                                                    <label class="form-check-label" for="flexRadioDefault12">
                                                        i accept your terms & conditions
                                                    </label>
                                                </div>
                                                <button type="submit" class="theme-btn">
                                                    Submit now
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- Top Ratting Book Section Start -->
    <section class="top-ratting-book-section fix section-padding pt-0">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="mb-3 wow fadeInUp" data-wow-delay=".3s">Related Products</h2>
                <p class="wow fadeInUp" data-wow-delay=".5s">
                    Interdum et malesuada fames ac ante ipsum primis in faucibus. <br> Donec at nulla nulla. Duis
                    posuere ex lacus
                </p>
            </div>
            <div class="swiper book-slider">
                <div class="swiper-wrapper">
                    @foreach($produits as $produit)
                    @php
                        $imagePath = App\Models\Image::where('produit_id', $produit->id)->first()->image;

                    @endphp
                    <div class="swiper-slide">
                        <div class="shop-box-items style-2">
                            <div class="book-thumb center">
                                <a href="shop-details"><img src="{{ $imagePath }}" alt="img"></a>
                                <ul class="shop-icon d-grid justify-content-center align-items-center">
                                    <li>
                                        <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                    </li>
                                    <li>
                                        <a href="{{route('shop-details',$produit->id)}}"><i class="far fa-eye"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="shop-content">
                                <h5> {{$produit->designation}}</h5>
                                <h3><a href="shop-details.html">{{$produit->designation}}</a></h3>
                                <ul class="price-list">
                                    <li>{{$produit->prix_ht}}</li>
                                    <!-- <li>
                                        <del>{{$produit->prix_ht}}</del>
                                    </li> -->
                                </ul>
                                <ul class="author-post">
                                    <li class="authot-list">
                                        <span class="thumb">
                                            <!-- <img src="assets/img/testimonial/client-1.png" alt="img"> -->
                                        </span>
                                        <span class="content">{{$produit->auteur->nom}}</span>
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
                                <a href="shop-details.html" class="theme-btn"><i class="fa-solid fa-basket-shopping"></i>
                                    Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
