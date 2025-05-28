<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .another-option img {
            width: 20px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Connexion</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <input class="form-control" type="email" name="email" placeholder="Adresse e-mail" required>
                @error('email')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" name="password" placeholder="Mot de passe" required>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div>
                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                    <label for="remember">Se souvenir de moi</label>
                </div>
                {{-- <a href="{{ route('password.request') }}">Mot de passe oublié ?</a> --}}
            </div>
            <button type="submit" class="btn btn-primary w-100">Se connecter</button>
        </form>
        <div class="text-center my-3">Ou</div>
        {{-- <div class="d-grid gap-2">
            <a class="btn btn-outline-secondary another-option" href="{{ url('/auth/google') }}">
                <img src="{{ asset('assets/img/google.png') }}" alt="google"> Continuer avec Google
            </a>
            <a class="btn btn-outline-secondary another-option" href="{{ url('/auth/facebook') }}">
                <img src="{{ asset('assets/img/facebook.png') }}" alt="facebook"> Continuer avec Facebook
            </a>
        </div> --}}
        <div class="form-check mt-3">
            <input class="form-check-input" type="radio" name="terms" required>
            <label class="form-check-label">
                J'accepte vos termes et conditions
            </label>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
