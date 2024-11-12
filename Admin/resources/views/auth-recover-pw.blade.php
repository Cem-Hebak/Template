@extends('layouts.master-without_nav')

@section('content')

    <body class="account-body accountbg">

        <!-- Recover Password Page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="{{ route('home') }}" class="logo logo-admin">
                                            <img src="{{ URL::asset('assets/images/logo-sm-dark.png') }}" height="50"
                                                alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Reset Password For Dastone</h4>
                                        <p class="text-muted mb-0">Enter your email, and instructions will be sent to you!
                                        </p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="form-horizontal auth-form" method="POST"
                                        action="{{ route('password.recovery') }}">
                                        @csrf
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="email">Email</label>
                                            <div class="input-group">
                                                <input type="email" name="email" class="form-control" id="email"
                                                    placeholder="Enter Email" required>
                                            </div>
                                        </div><!--end form-group-->

                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-primary w-100 waves-effect waves-light"
                                                    type="submit">Reset <i class="fas fa-sign-in-alt ms-1"></i></button>
                                            </div><!--end col-->
                                        </div> <!--end form-group-->
                                    </form><!--end form-->

                                    <!-- Success Message -->
                                    @if (session('status'))
                                        <div class="alert alert-success mt-3">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <!-- Error Messages -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger mt-3">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <p class="text-muted mb-0 mt-3">Remember It? <a href="{{ route('login') }}"
                                            class="text-primary ms-2">Sign in here</a></p>
                                </div>
                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Mannatthemes © <span
                                            id="current-year"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            document.getElementById("current-year").textContent = new Date().getFullYear();
        </script>

    @endsection
