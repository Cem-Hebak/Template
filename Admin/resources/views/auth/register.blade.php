<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SeKAD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans&display=swap" rel="stylesheet">

    <script>
        function previewProfileImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('profile-preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
</head>
<body>
    <div class="register-box">
        <h2>SeKAD</h2>
        <p>Create an account</p>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
@section('title')
    Login
@endsection

@section('content')

    <body class="account-body accountbg">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center">
                <div class="col-12 align-self-center">
                    <div class="row">
                        <div class="col-lg-5 mx-auto">
                            <div class="card">
                                <div class="card-body p-0 auth-header-box">
                                    <div class="text-center p-3">
                                        <a href="index" class="logo logo-admin">
                                            <img src="{{ URL::asset('assets/images/logo-sm-dark.png') }}" height="50"
                                                alt="logo" class="auth-logo">
                                        </a>
                                        <h4 class="mt-3 mb-1 fw-semibold text-white font-18">Lets Get Started SeKAD</h4>
                                        <p class="text-muted  mb-0">Sign in to continue to SeKAD.</p>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="nav-border nav nav-pills" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#LogIn_Tab"
                                                role="tab">Log In</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#Register_Tab"
                                                role="tab">Register</a>
                                        </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div class="tab-pane p-3" id="LogIn_Tab" role="tabpanel">
                                            @if (Session::has('success'))
                                                <div class="alert alert-success text-center">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif
                                            <form class="form-horizontal auth-form" method="POST"
                                                action="{{ route('login') }}">
                                                @csrf
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="username">Username</label>
                                                    <div class="input-group">
                                                        <input name="email" type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            value="{{ old('email', 'admin@mannatthemes.com') }}"
                                                            id="username" placeholder="Enter Email" autocomplete="email"
                                                            autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="userpassword">Password</label>
                                                    <div class="input-group">
                                                        <input type="password" name="password"
                                                            class="form-control  @error('password') is-invalid @enderror"
                                                            id="userpassword" value="123456" placeholder="Enter password"
                                                            aria-label="Password" aria-describedby="password-addon">
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row my-3">
                                                    <div class="col-sm-6">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input class="form-check-input" type="checkbox" id="remember"
                                                                {{ old('remember') ? 'checked' : '' }}>
                                                            <label class="form-check-label" for="remember"> Remember me
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-sm-6 text-end">
                                                        @if (Route::has('password.request'))
                                                            <a href="{{ route('password.request') }}"
                                                                class="text-muted">Forgot password?</a>
                                                        @endif
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end form-group-->

                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 waves-effect waves-light"
                                                            type="submit">Log In <i
                                                                class="fas fa-sign-in-alt ms-1"></i></button>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end form-group-->
                                            </form>
                                            <!--end form-->
                                            <div class="m-3 text-center text-muted">
                                                <p class="mb-0">Do not have an account ? <a href="{{ url('register') }}"
                                                        class="text-primary ms-2">Free Register</a></p>
                                            </div>
                                            <div class="account-social">
                                                <h6 class="mb-3">Or Login With</h6>
                                            </div>
                                            <div class="btn-group w-100">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">Facebook</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">Twitter</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">Google</button>
                                            </div>
                                        </div>
                                        <div class="tab-pane active px-3 pt-3" id="Register_Tab" role="tabpanel">

                                            @if (Session::has('success'))
                                                <div class="alert alert-success text-center">
                                                    {{ Session::get('success') }}
                                                </div>
                                            @endif

                                            <form class="form-horizontal auth-form" method="POST"
                                                action="{{ route('register') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="username">Username</label>
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control @error('name') is-invalid @enderror"
                                                            value="{{ old('name') }}" id="username" name="name"
                                                            placeholder="Enter username" autofocus>
                                                        @error('name')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="useremail">Email</label>
                                                    <div class="input-group">
                                                        <input type="email"
                                                            class="form-control @error('email') is-invalid @enderror"
                                                            id="useremail" value="{{ old('email') }}" name="email"
                                                            placeholder="Enter email" autofocus>
                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="userpassword">Password</label>
                                                    <div class="input-group">
                                                        <input type="password"
                                                            class="form-control @error('password') is-invalid @enderror"
                                                            id="userpassword" name="password"
                                                            placeholder="Enter password" autofocus>
                                                        @error('password')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="conf_password">Confirm Password</label>
                                                    <div class="input-group">
                                                        <input type="password"
                                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                                            id="confirmpassword" name="password_confirmation"
                                                            placeholder="Enter Confirm password" autofocus>
                                                        @error('password_confirmation')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="form-group mb-2">
                                                    <label class="form-label" for="mo_number">Mobile Number</label>
                                                    <div class="input-group">
                                                        <input type="text"
                                                            class="form-control @error('mobilenumber') is-invalid @enderror"
                                                            id="mo_number" name="mobilenumber"
                                                            placeholder="Enter Mobile Number" autofocus>
                                                        @error('mobilenumber')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>


                                                <div class="from-group mb-2">
                                                    <label class="form-label" for="avatar">Profile Picture</label>
                                                    <div class="input-group">
                                                        <input type="file"
                                                            class="form-control @error('avatar') is-invalid @enderror"
                                                            id="inputGroupFile02" name="avatar" autofocus>
                                                        <label class="input-group-text"
                                                            for="inputGroupFile02">Upload</label>
                                                        @error('avatar')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="form-group row my-3">
                                                    <div class="col-sm-12">
                                                        <div class="custom-control custom-switch switch-success">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customSwitchSuccess2">
                                                            <label class="form-label text-muted"
                                                                for="customSwitchSuccess2">You agree to the SeKAD <a
                                                                    href="#" class="text-primary">Terms of
                                                                    Use</a></label>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end form-group-->

                                                <div class="form-group mb-0 row">
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 waves-effect waves-light"
                                                            type="submit">Register <i
                                                                class="fas fa-sign-in-alt ms-1"></i></button>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end form-group-->
                                            </form>
                                            <!--end form-->
                                            <p class="my-3 text-muted">Already have an account ? <a
                                                    href="{{ url('login') }}" class="text-primary ms-2">Log in</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body bg-light-alt text-center">
                                    <span class="text-muted d-none d-sm-inline-block">Mannatthemes ©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- Profile Circle
        <div class="profile-circle" id="profile-circle">
            <img id="profile-preview" src="{{ asset('assets/images/default-profile.png') }}" alt="Profile Picture">
        </div>
        
        <input type="file" id="profile-upload" name="profile_picture" accept="image/*" onchange="previewProfileImage(event)"> -->

        <!-- Register Form -->
        <form action="{{ route('register.post') }}" method="POST" enctype="multipart/form-data" class="form-container">
            @csrf

            <!-- Profile Circle -->
            <div class="profile-circle" id="profile-circle">
                <img id="profile-preview" src="{{ asset('assets/images/default-profile.png') }}" alt="Profile Picture">
                <span class="placeholder-text">Profile Picture</span>
            </div>

            <!-- Profile Picture Upload -->
            <input type="file" id="profile-upload" name="profile_picture" accept="image/*" onchange="previewProfileImage(event)">

            <!-- Personal Information Section -->
            <h3>Personal Information</h3>
            <div class="form-column">
                <label for="name">Full Name</label>
                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>

                <label for="email">Email Address</label>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>

                <label for="ic_number">Identification Card Number</label>
                <input type="text" name="ic_number" placeholder="IC Number" value="{{ old('ic_number') }}" required>

                <label for="mobilenumber">Mobile Number</label>
                <input type="text" name="mobilenumber" placeholder="Mobile Number" value="{{ old('mobilenumber') }}" required>

                <label for="address">Address</label>
                <input type="text" name="address" placeholder="Address" value="{{ old('address') }}" class="full-width">

                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" required>

                <label for="gender">Gender</label>
                <select name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                </select>

                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" placeholder="Nationality" value="{{ old('nationality', 'Malaysian') }}" readonly>
            </div>

            <!-- Family Information Section -->
            <h3>Family Information</h3>
            <div class="form-column">
                <label for="fname">Father's Name</label>
                <input type="text" name="fname" placeholder="Father's Name" value="{{ old('fname') }}">

                <label for="fcontact">Father's Contact</label>
                <input type="text" name="fcontact" placeholder="Father's Contact" value="{{ old('fcontact') }}">

                <label for="foccupation">Father's Occupation</label>
                <input type="text" name="foccupation" placeholder="Father's Occupation" value="{{ old('foccupation') }}">

                <label for="mname">Mother's Name</label>
                <input type="text" name="mname" placeholder="Mother's Name" value="{{ old('mname') }}">

                <label for="mcontact">Mother's Contact</label>
                <input type="text" name="mcontact" placeholder="Mother's Contact" value="{{ old('mcontact') }}">

                <label for="moccupation">Mother's Occupation</label>
                <input type="text" name="moccupation" placeholder="Mother's Occupation" value="{{ old('moccupation') }}">

                <label for="gname">Guardian's Name</label>
                <input type="text" name="gname" placeholder="Guardian's Name" value="{{ old('gname', 'Not Applicable') }}">

                <label for="gcontact">Guardian's Contact</label>
                <input type="text" name="gcontact" placeholder="Guardian's Contact" value="{{ old('gcontact', 'Not Applicable') }}">

                <label for="goccupation">Guardian's Occupation</label>
                <input type="text" name="goccupation" placeholder="Guardian's Occupation" value="{{ old('goccupation', 'Not Applicable') }}">
            </div>

            <!-- Health Information Section -->
            <h3>Health Information</h3>
            <div class="form-column">
                <label for="blood_type">Blood Type</label>
                <input type="text" name="blood_type" placeholder="Blood Type" value="{{ old('blood_type') }}">

                <label for="allergies">Allergies</label>
                <input type="text" name="allergies" placeholder="Allergies" value="{{ old('allergies', 'None') }}">
            </div>

            <!-- Password Section -->
            <h3>Account Information</h3>
            <div class="form-column">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password" required>
                
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>

            <button type="submit" class="btn-register full-width">Register</button>
        </form>
    </div>
</body>
</html>
