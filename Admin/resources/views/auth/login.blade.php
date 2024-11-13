<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SeKAD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans&display=swap" rel="stylesheet">

</head>
<body>
    <div class="login-box">
    <a href="index" class="logo logo-admin">
        <img src="{{ URL::asset('assets/images/logo-sm-dark.png') }}" height="50"
            alt="logo" class="auth-logo">
    </a>
    <h2>SeKAD</h2>
        <p>Log In</p>
        <!-- Error message -->
        @if ($errors->has('login_error'))
            <div class="alert alert-danger">
                {{ $errors->first('login_error') }}
            </div>
        @endif
        <!-- Login -->
        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <input type="text" name="ic_number" placeholder="IC number" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn-login">Log In</button>
        </form>

        <a href="password/reset">Forgot your password? </a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        

    </div>
    
</body>

</html>
