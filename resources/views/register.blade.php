<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            max-width: 400px;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .register-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-3">
                <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                @error('name')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input class="form-control" type="email" name="email" placeholder="Email Address" required>
                @error('email')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" name="password" placeholder="Password" required>
                @error('password')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
            {{-- <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" name="terms" required>
                <label class="form-check-label">
                    I Accept Your Terms & Conditions
                </label>
            </div> --}}
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
        <div class="text-center mt-3">
            Already have an account? <a href="{{ route('login') }}">Log in</a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
