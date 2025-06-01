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
                <h1>Favoris</h1>
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
                            Favoris
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Panier -->
    <div class="cart-section section-padding">
        <div class="container-fluid">
            <div class="main-cart-wrapper">
                <div class="row g-5">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Produit</th>
                                        <th>Prix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (empty($produits))
                                        <tr>
                                            <td colspan="4" class="text-center">
                                                <p class="h4">La liste des favoris est vide</p>
                                            </td>
                                        </tr>
                                    @endif
                                    @foreach ($produits as $produit)
                                        <tr>
                                            <td>
                                                <span class="d-flex gap-5 align-items-center">
                                                    <span class="cart">
                                                        <img src="  {{ $produit->images->first()->image ?? '' }}"
                                                            width="70" alt="img">
                                                    </span>
                                                    <span class="cart-title">
                                                        {{ $produit->designation }}
                                                    </span>
                                                </span>
                                            </td>
                                            <td>
                                                <span class="cart-price">{{ $produit->prix_ht }}</span>
                                            </td>

                                            <td>
                                                <a href="javascript:void(0)" class="remove-icon"
                                                    onclick="removeItem({{ $produit->id }})">
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
                                                    fetch(`/favoris/${id}`, {
                                                            method: 'DELETE',
                                                            headers: {
                                                                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                                                'Content-Type': 'application/json'
                                                            }
                                                        })
                                                        .then(response => response.json())
                                                        .then(data => {
                                                            console.log(data);
                                                            if (data.success) {
                                                                Swal.fire({
                                                                    title: 'Supprimé !',
                                                                    text: 'L\'article a été retiré du favoris.',
                                                                    icon: 'success',
                                                                    timer: 1500,
                                                                    showConfirmButton: false
                                                                }).then(() => {
                                                                    location.reload();
                                                                });
                                                            } else {
                                                                Swal.fire({
                                                                    title: 'Erreur !',
                                                                    text: 'Échec de la suppression de l\'article du favoris.',
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
                </div>
            </div>
        </div>
    </div>
@endsection
