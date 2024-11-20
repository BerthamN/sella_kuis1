<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px; background-color: #f8f9fa;">
            <h3 class="text-center text-primary mb-4">Register</h3>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label text-primary">Name</label>
                    <input id="name" type="text" name="name" 
                           class="form-control border-primary" 
                           value="{{ old('name') }}" 
                           required autofocus autocomplete="name">
                    @if ($errors->has('name'))
                        <div class="text-danger small mt-1">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>

                <!-- Email Address -->
                <div class="mb-3">
                    <label for="email" class="form-label text-primary">Email</label>
                    <input id="email" type="email" name="email" 
                           class="form-control border-primary" 
                           value="{{ old('email') }}" 
                           required autocomplete="username">
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
                           required autocomplete="new-password">
                    @if ($errors->has('password'))
                        <div class="text-danger small mt-1">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label text-primary">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" 
                           class="form-control border-primary" 
                           required autocomplete="new-password">
                    @if ($errors->has('password_confirmation'))
                        <div class="text-danger small mt-1">
                            {{ $errors->first('password_confirmation') }}
                        </div>
                    @endif
                </div>

                <!-- Already Registered & Register Button -->
                <div class="d-flex justify-content-between align-items-center">
                    <a href="{{ route('login') }}" class="text-decoration-none text-primary">
                        Already registered?
                    </a>
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
