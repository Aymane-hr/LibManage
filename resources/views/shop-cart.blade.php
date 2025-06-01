@extends('layouts.app')
@section('content')


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
                            <form id="checkout-form">
                                <button type="submit" class="theme-btn w-100">Procéder au paiement</button>
                            </form>
                            <script>
                                document.getElementById('checkout-form').addEventListener('submit', function(e) {
                                    e.preventDefault();

                                    // Collect cart data
                                    let items = [];
                                    document.querySelectorAll('input[name="qty"]').forEach((input, index) => {
                                        const row = input.closest('tr');
                                        const id = @json($cart)[index+1]?.id;
                                        const name = row.querySelector('.cart-title')?.textContent.trim();
                                        const price = parseFloat(input.dataset.price);
                                        const quantity = parseInt(input.value);
                                        items.push({ id, name, price, quantity });
                                    });

                                    fetch('{{ route("checkout.ajax") }}', {
                                        method: 'POST',
                                        headers: {
                                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                            'Content-Type': 'application/json'
                                        },
                                        body: JSON.stringify({ produits: items })
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.message) {
                                            Swal.fire('Succès', 'Votre commande a été passée !', 'success').then(() => {
                                                window.location.href = data.redirect || '/';
                                            });
                                        } else {
                                            Swal.fire('Erreur', data.message || 'Une erreur est survenue.', 'error');
                                        }
                                    })
                                    .catch(() => {
                                        Swal.fire('Erreur', 'Impossible de soumettre la commande.', 'error');
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
