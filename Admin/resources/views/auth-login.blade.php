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

        <a href="#">Forgot your password? </a>
    </div>
</body>
</html>
