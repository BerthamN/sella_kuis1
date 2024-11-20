<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel - Fun Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=poppins:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(45deg, #FF6F61, #FFD54F);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #ffffff;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            animation: popIn 1s ease;
        }
        .buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        .buttons a {
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border-radius: 25px;
            font-size: 1.2rem;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .buttons a:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }
        @keyframes popIn {
            0% {
                opacity: 0;
                transform: scale(0.5);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome!</h1>
        @if (Route::has('login'))
            <div class="buttons">
                @auth
                    <a href="{{ url('/dashboard') }}">Go to Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</body>
</html>
