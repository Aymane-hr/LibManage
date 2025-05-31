@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100 bg-light">
    <div class="card shadow border-0 p-4" style="max-width: 400px; width: 100%;">

        <div class="text-center mb-4">
            <p class="text-muted mb-0">Connectez-vous à votre compte</p>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" placeholder="Adresse e-mail" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Mot de passe" required>
                @error('password')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="saveForNext" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="saveForNext">Se souvenir de moi</label>
                </div>
                {{-- @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="small">Mot de passe oublié ?</a>
                @endif --}}
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            </div>
        </form>
        <div class="text-center text-muted my-3">Ou</div>
        <div class="d-flex flex-column align-items-center mt-4">
            <a href="{{ route('register') }}" class="btn btn-success w-100">Créer un compte</a>
        </div>
    </div>
</div>
@endsection
