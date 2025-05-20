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
                                    <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext">
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
                            <input class="inputField" type="password" name="password" placeholder="Enter Confirm Password">
                            <div class="input-check remember-me">
                                <div class="checkbox-wrapper">
                                    <input type="checkbox" class="form-check-input" name="save-for-next" id="rememberMe">
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
                <h1>Blog Details</h1>
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
                            Blog Details
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- News Details Section Start -->
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
                                        <li>
                                            <i class="fa-light fa-user"></i>
                                            By Admin
                                        </li>
                                        <li>
                                            <i class="fa-sharp fa-regular fa-comments"></i>
                                            2 Comments
                                        </li>
                                        <li>
                                            <i class="fa-light fa-tag"></i>
                                            Book Store
                                        </li>
                                    </ul>
                                    <h3>Eu parturient Dictumst Frames quam Temper </h3>
                                    <p class="mb-3">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur et
                                        ipsum ut volutpat. Morbi a mollis felis. Nam consectetur lectus vel lorem
                                        facilisis, quis viverra purus pharetra. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Fusce dui lacus, tempor a metus vel, varius rhoncus nunc.
                                        Suspendisse luctus feugiat dictum. Curabitur ipsum velit, viverra in pretium
                                        eget, molestie maximus magna. Aliquam elementum vel turpis non bibendum. Cras in
                                        consequat neque.
                                    </p>
                                    <p class="mb-3">
                                        Nunc tincidunt cursus lectus ac semper. Aenean ullamcorper quis arcu molestie
                                        consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut nec
                                        lobortis elit, eu ultrices justo. Fusce auctor erat est, non fringilla nibh
                                        tempus quis. Aenean dignissim turpis ut interdum interdum. Nam molestie sed ex
                                        non tempus. Donec sodales aliquam orci non imperdiet. Quisque tempus dolor id
                                        nisi blandit tempor ut id lacus. Aliquam mattis tempor posuere. Sed ut
                                        sollicitudin velit,
                                    </p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur et
                                        ipsum ut volutpat. Morbi a mollis felis. Nam consectetur lectus vel lorem
                                        facilisis, quis viverra purus pharetra. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Fusce dui lacus, tempor a metus vel, varius rhoncus nunc.
                                        Suspendisse luctus feugiat dictum. Curabitur ipsum velit, viverra in pretium
                                        eget, molestie maximus magna. Aliquam elementum vel turpis non bibendum. Cras in
                                        consequat neque.
                                    </p>
                                    <div class="row g-4 mt-4">
                                        <div class="col-lg-6">
                                            <div class="details-image">
                                                <img src="assets/img/news/post-5.jpg" alt="img">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="details-image">
                                                <img src="assets/img/news/post-6.jpg" alt="img">
                                            </div>
                                        </div>
                                    </div>

                                    <p class="pt-5 mb-5">
                                        Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                        dolore of magna aliqua. Ut enim ad minim veniam, made of owl the quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea dolor commodo consequat. Duis
                                        aute irure and dolor in reprehenderit.Consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore of magna aliqua. Ut enim ad minim
                                        veniam, made of owl the quis nostrud exercitation ullamco laboris nisi ut
                                        aliquip ex ea dolor commodo consequat. Duis aute irure and dolor in
                                        reprehenderit.
                                    </p>

                                    <div class="hilight-text mt-4 mb-5">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris efficitur et
                                            ipsum ut volutpat. Morbi a mollis felis. Nam consectetur lectus vel lorem
                                            facilisis, quis viverra purus pharetra. Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Fusce dui lacus, tempor a metus vel, varius
                                            rhoncus nunc. Suspendisse luctus feugiat dictum. Curabitur ipsum velit,
                                            viverra in pretium eget, molestie maximus magna. Aliquam elementum vel
                                            turpis non bibendum.
                                        </p>
                                        <svg width="36" height="36" viewBox="0 0 36 36" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M7.71428 20.0711H0.5V5.64258H14.9286V20.4531L9.97665 30.3568H3.38041L8.16149 20.7947L8.5233 20.0711H7.71428Z"
                                                stroke="#543EE8" />
                                            <path
                                                d="M28.2846 20.0711H21.0703V5.64258H35.4989V20.4531L30.547 30.3568H23.9507L28.7318 20.7947L29.0936 20.0711H28.2846Z"
                                                stroke="#543EE8" />
                                        </svg>
                                    </div>

                                    <p class="mt-4 mb-5">
                                        Nunc tincidunt cursus lectus ac semper. Aenean ullamcorper quis arcu molestie
                                        consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut nec
                                        lobortis elit, eu ultrices justo. Fusce auctor erat est, non fringilla nibh
                                        tempus quis. Aenean dignissim turpis ut interdum interdum. Nam molestie sed ex
                                        non tempus. Donec sodales aliquam orci non imperdiet. Quisque tempus dolor id
                                        nisi blandit tempor ut id lacus. Aliquam mattis tempor posuere.
                                    </p>
                                </div>
                            </div>
                            <div class="row tag-share-wrap mt-4 mb-5">
                                <div class="col-lg-8 col-12">
                                    <div class="tagcloud">
                                        <span class="me-3">Tags:</span>
                                        <a href="news-details.html">Adventure</a>
                                        <a href="news-details.html">Education</a>
                                        <a href="news-details.html">Store</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mt-3 mt-lg-0 text-lg-end">
                                    <div class="social-share">
                                        <span class="me-3">Share:</span>
                                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                        <a href="https://x.com/"><i class="fab fa-twitter"></i></a>
                                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-area">
                                <div class="comments-heading">
                                    <h3>02 Comments</h3>
                                </div>
                                <div class="blog-single-comment d-flex gap-4 pt-4 pb-5">
                                    <div class="image">
                                        <img src="assets/img/news/comment.png" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="con">
                                                <h5><a href="news-details.html">Leslie Alexander</a></h5>
                                                <span>March 20, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mt-30 mb-4">Neque porro est qui dolorem ipsum quia quaed inventor
                                            veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed
                                            sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                        <a href="news-details.html" class="reply">Reply</a>
                                    </div>
                                </div>
                                <div class="blog-single-comment d-flex gap-4 pt-5 pb-5">
                                    <div class="image">
                                        <img src="assets/img/news/comment-2.png" alt="image">
                                    </div>
                                    <div class="content">
                                        <div class="head d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                            <div class="con">
                                                <h5><a href="news-details.html">Alex Flores</a></h5>
                                                <span>March 20, 2024 at 2:37 pm</span>
                                            </div>
                                            <div class="star">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-regular fa-star"></i>
                                            </div>
                                        </div>
                                        <p class="mt-30 mb-4">Neque porro est qui dolorem ipsum quia quaed inventor
                                            veritatis et quasi
                                            architecto var sed efficitur turpis gilla sed
                                            sit amet finibus eros. Lorem Ipsum is simply dummy</p>
                                        <a href="news-details.html" class="reply">Reply</a>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-form-wrap pt-5">
                                <h3>Leave a comments</h3>
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
                                                <input type="text" name="email" id="email2" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-clt">
                                                <span>Message*</span>
                                                <textarea name="message" id="message"
                                                    placeholder="Write Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <button type="submit" class="theme-btn ">
                                                post comment<i class="fa-solid fa-arrow-right-long"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <div class="main-sidebar">
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Search</h3>
                                </div>
                                <div class="search-widget">
                                    <form action="#">
                                        <input type="text" placeholder="Search here">
                                        <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="news-widget-categories">
                                    <ul>
                                        <li><a href="news-details.html">Adventure</a> <span>(5)</span></li>
                                        <li><a href="news-details.html">Education</a> <span>(3)</span></li>
                                        <li class="active"><a href="news-details.html">Romance</a><span>(6)</span></li>
                                        <li><a href="news-details.html">Modern Fiction</a> <span>(2)</span></li>
                                        <li><a href="news-details.html">Contemporary</a> <span>(4)</span></li>
                                        <li><a href="news-details.html">Art & Literature</a> <span>(7)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-sidebar-widget">
                                <div class="wid-title">
                                    <h3>Recent Post</h3>
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
                                                    18 Dec, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    Top 10 Tarot Decks For The
                                                    Tarot World Summit
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
                                                    Mar 20, 2024
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
                                                    Mar 10, 2024
                                                </li>
                                            </ul>
                                            <h6>
                                                <a href="news-details.html">
                                                    Students Intelligence in education in Building..
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
                                        <a href="news-details.html">Books</a>
                                        <a href="news-details.html">Tips & Tricks</a>
                                        <a href="news-details.html">Adventure</a>
                                        <a href="news-details.html">Education</a>
                                        <a href="news-details.html">Store</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection