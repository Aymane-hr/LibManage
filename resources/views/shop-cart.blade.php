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
                            <input class="inputField" type="text" name="name" id="name" placeholder="User Name">
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
                <h1>Cart</h1>
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
                            Cart
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Shop Cart Section Start -->
    <div class="cart-section section-padding">
        <div class="container">
            <div class="main-cart-wrapper">
                <div class="row g-5">
                    <div class="col-xl-9">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
@if(empty($cart))
    <tr>
        <td colspan="4" class="text-center">
            <p class="h4">Le panier est vide</p>
        </td>
    </tr>
@endif
                                    @foreach ($cart as $cartItem)
                                        <tr>
                                            <td>
                                                <span class="d-flex gap-5 align-items-center">
                                                    {{-- <a href="shop-cart.html" class="remove-icon">
                                                    <img src="assets/img/icon/icon-9.svg" alt="img">
                                                </a> --}}
                                                    <span class="cart">

                                                        <img src="  {{ $cartItem['image'] ?? '' }}" width="70"
                                                            alt="img">
                                                    </span>
                                                    <span class="cart-title">

                                                        {{ $cartItem['name'] }}

                                                    </span>
                                                </span>
                                            </td>
                                            <td>
                                                <span class="cart-price">{{ $cartItem['price'] }}</span>
                                            </td>
                                            <td>
                                                <span class="quantity-basket">
                                                    <span class="qty">
                                                        {{-- <button class="qtyminus"   aria-hidden="true">−</button> --}}
                                                        <input type="number" onchange="subtotal({{ $loop->index }})"
                                                            name="qty" id="qty{{ $loop->index }}" min="1"
                                                             step="1"
                                                            value="{{ $cartItem['quantity'] }}"
                                                            data-price="{{ $cartItem['price'] }}">
                                                        {{-- <button class="qtyplus"  aria-hidden="true">+</button> --}}
                                                    </span>
                                                </span>
                                            </td>
                                            <td>
                                                <span class="subtotal-price" id="subtotal-{{ $loop->index }}">
                                                    {{ $cartItem['price'] * $cartItem['quantity'] }}
                                                </span>
                                                <script>
                                                    window.subtotal = (index) => {
                                                        e = document.querySelector('#qty' + index);
                                                        const price = parseFloat(e.dataset.price);
                                                        const quantity = parseInt(e.value);
                                                        console.log(price, quantity);
                                                        const subtotalElement = document.getElementById(`subtotal-${index}`);
                                                        subtotalElement.textContent = (price * quantity).toFixed(2);
                                                        calculateTotal();
                                                    }

                                                    window.onload = () => {
                                                        subtotal({{ $loop->index }});
                                                    }

                                                    // document.querySelectorAll('input[name="qty"]').forEach((input, index) => {
                                                    //     input.addEventListener('change', () => subtotal(index));
                                                    // });

                                                    window.calculateTotal = () => {
                                                        let total = 0;
                                                        document.querySelectorAll('.subtotal-price').forEach(subtotalElement => {
                                                            total += parseFloat(subtotalElement.textContent) || 0;
                                                        });
                                                        document.querySelector('.sub-price-total').textContent = total.toFixed(2);
                                                    };

                                                    document.querySelectorAll('input[name="qty"]').forEach((input, index) => {
                                                        input.addEventListener('change', () => {
                                                            subtotal(index);
                                                            calculateTotal();
                                                        });
                                                    });

                                                    // Calculate total on page load
                                                    window.onload = () => {
                                                        document.querySelectorAll('input[name="qty"]').forEach((input, index) => {
                                                            subtotal(index);
                                                        });
                                                        calculateTotal();
                                                    };
                                                </script>
                                            </td>
                                            <td>
                                                <a href="javascript:void(0)" class="remove-icon"
                                                    onclick="removeItem({{ $cartItem['id'] }})">
                                                    <i class="fa-solid fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <script>
                                        window.removeItem = (id) => {
                                            Swal.fire({
                                                title: 'Are you sure?',
                                                text: "You won't be able to revert this!",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Yes, delete it!'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
                                                    // Make an AJAX request to remove the item from the cart
                                                    fetch(`/remove-from-cart/${id}`, {
                                                        method: 'DELETE',
                                                        headers: {
                                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                            'Content-Type': 'application/json'
                                                        }
                                                    })
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        console.log(data);
                                                        if (data.message) {
                                                            // Show success message
                                                            Swal.fire({
                                                                title: 'Deleted!',
                                                                text: 'Item has been removed from cart.',
                                                                icon: 'success',
                                                                timer: 1500,
                                                                showConfirmButton: false
                                                            }).then(() => {
                                                                // Refresh the page after showing success message
                                                                location.reload();
                                                            });
                                                        } else {
                                                            Swal.fire({
                                                                title: 'Error!',
                                                                text: 'Failed to remove item from cart.',
                                                                icon: 'error'
                                                            });
                                                        }
                                                    })
                                                    .catch(error => {
                                                        console.error('Error:', error);
                                                        Swal.fire({
                                                            title: 'Error!',
                                                            text: 'An error occurred while removing the item.',
                                                            icon: 'error'
                                                        });
                                                    });
                                                }
                                            });
                                        };
                                    </script>


                                </tbody>
                            </table>
                        </div>
                        <div class="cart-wrapper-footer">
                            {{-- <form action="shop-cart.html">
                                <div class="input-area">
                                    <input type="text" name="Coupon Code" id="CouponCode" placeholder="Coupon Code">
                                    <button type="submit" class="theme-btn">
                                        Apply
                                    </button>
                                </div>
                            </form> --}}
                            {{-- <a href="shop-cart.html" class="theme-btn">
                                Update Cart
                            </a> --}}
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="table-responsive cart-total">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Cart Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center justify-content-between">
                                                <span class="sub-title">Subtotal:</span>
                                                <span class="sub-price">$84.00</span>
                                            </span>
                                        </td>
                                    </tr> --}}
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center  justify-content-between">
                                                <span class="sub-title">Total: </span>
                                                <span class="sub-price sub-price-total">{{ $total }}</span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="checkout.html" class="theme-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
