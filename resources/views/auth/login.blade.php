<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px; background-color: #f8f9fa;">
            <h3 class="text-center text-primary mb-4">Login</h3>

            <!-- Session Status -->
            @if (session('status'))
                <div class="alert alert-success text-center">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label text-primary">Email</label>
                    <input id="email" type="email" name="email" 
                           class="form-control border-primary" 
                           value="{{ old('email') }}" 
                           required autofocus>
                    @if ($errors->has('email'))
                        <div class="text-danger small mt-1">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label text-primary">Password</label>
                    <input id="password" type="password" name="password" 
                           class="form-control border-primary" 
                           required>
                    @if ($errors->has('password'))
                        <div class="text-danger small mt-1">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-3">
                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                    <label for="remember_me" class="form-check-label text-secondary">
                        Remember me
                    </label>
                </div>

                <!-- Forgot Password & Login Button -->
                <div class="d-flex justify-content-between align-items-center">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">
                            Forgot your password?
                        </a>
                    @endif
                    <button type="submit" class="btn btn-primary">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
