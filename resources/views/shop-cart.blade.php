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
                                    J'accepte vos termes & conditions
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
                                    J'accepte vos termes & conditions
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

    <!-- Section Fil d'Ariane -->
    <div class="breadcrumb-wrapper">
        <div class="book1">
            <img src="assets/img/hero/book1.png" alt="livre">
        </div>
        <div class="book2">
            <img src="assets/img/hero/book2.png" alt="livre">
        </div>
        <div class="container">
            <div class="page-heading">
                <h1>Panier</h1>
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
                            Panier
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Panier -->
    <div class="cart-section section-padding">
        <div class="container">
            <div class="main-cart-wrapper">
                <div class="row g-5">
                    <div class="col-xl-9">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Prix</th>
                                        <th>Quantité</th>
                                        <th>Sous-total</th>
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
                                                        <input type="number" onchange="subtotal({{ $loop->index }})"
                                                            name="qty" id="qty{{ $loop->index }}" min="1"
                                                             step="1"
                                                            value="{{ $cartItem['quantity'] }}"
                                                            data-price="{{ $cartItem['price'] }}">
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
                                                title: 'Êtes-vous sûr ?',
                                                text: "Vous ne pourrez pas revenir en arrière !",
                                                icon: 'warning',
                                                showCancelButton: true,
                                                confirmButtonColor: '#3085d6',
                                                cancelButtonColor: '#d33',
                                                confirmButtonText: 'Oui, supprimer !'
                                            }).then((result) => {
                                                if (result.isConfirmed) {
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
                                                            Swal.fire({
                                                                title: 'Supprimé !',
                                                                text: 'L\'article a été retiré du panier.',
                                                                icon: 'success',
                                                                timer: 1500,
                                                                showConfirmButton: false
                                                            }).then(() => {
                                                                location.reload();
                                                            });
                                                        } else {
                                                            Swal.fire({
                                                                title: 'Erreur !',
                                                                text: 'Échec de la suppression de l\'article du panier.',
                                                                icon: 'error'
                                                            });
                                                        }
                                                    })
                                                    .catch(error => {
                                                        console.error('Erreur:', error);
                                                        Swal.fire({
                                                            title: 'Erreur !',
                                                            text: 'Une erreur est survenue lors de la suppression de l\'article.',
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
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="table-responsive cart-total">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Total du panier</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <span class="d-flex gap-5 align-items-center  justify-content-between">
                                                <span class="sub-title">Total : </span>
                                                <span class="sub-price sub-price-total">{{ $total }}</span>
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="checkout.html" class="theme-btn">Procéder au paiement</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
