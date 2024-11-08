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
