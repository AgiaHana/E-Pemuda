@extends('layout.app')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="auth-container">
    <form>
        <div class="register-container">
        <div class="register-box">
            <h1>E-PEMUDA</h1>
            <p>Silakan Register Terlebih Dahulu</p>
            <form method="POST" action="{{ route('registerproses') }}">
                @csrf
                <div class="input-group">
                    <label for="name">
                        <img src="images/people.png"  width="10" height="10" alt="username icon">
                    </label>
                    <input type="text" name="name" placeholder="username" id="name" required>
                </div>
                <div class="input-group">
                    <label for="email">
                        <img src="images/email.png" width="10" height="10"v alt="email icon">
                    </label>
                    <input type="email" name="email" placeholder="Email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="password">
                        <img src="images/passkey.png"  width="10" height="10" alt="password icon">
                    </label>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>
                <div class="input-group">
                    <label for="password_confirmation">
                        <img src="images/passkey.png"  width="10" height="10" alt="confirm password icon">
                    </label>
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                </div>
                <button type="submit">Sign in</button>
            </form>
        </div>
    </div>
    </form>
</div>
@endsection

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form method="POST" action="{{ route('registerproses') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
    <a href="{{ route('login') }}">Login</a>
</body>
</html> --}}
