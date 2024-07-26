<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h1>E-PEMUDA</h1>
            <p>Silakan Login Dengan Menggunakan Email E-PEMUDA</p>
            @if (session('error'))
                <div>{{ session('error') }}</div>
            @endif
            <form method="POST" action="{{ route('loginproses') }}">
                @csrf
                <div class="input-group">
                    <label for="email">
                        <img src="{{ asset('images/email.png') }}" width="10" height="10" alt="">
                    </label>
                    <input type="email" name="email" placeholder="Email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="password">
                        <img src="{{ asset('images/passkey.png') }}" width="10" height="10" alt="">
                    </label>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                </div>
                <button type="submit">Login</button>
            </form>
            <p class="link">Belum punya akun? <a href="{{ route('register')}}">Register</a></p>
        </div>
    </div>
</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="{{ route('loginproses') }}" method="POST">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
    <a href="{{ route('register') }}">Register</a>
</body>
</html> --}}
