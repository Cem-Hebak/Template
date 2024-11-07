<!-- resources/views/auth/register.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - SeKAD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <div class="register-box">
        <h2>SeKAD</h2>
        <p>Register</p>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Register Form -->
        <form action="{{ route('register.post') }}" method="POST">
            @csrf

            <!-- Name, Email, IC Number -->
            <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required>
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
            <input type="text" name="ic_number" placeholder="IC Number" value="{{ old('ic_number') }}" required>
            <input type="text" name="mobilenumber" placeholder="Mobile Number" value="{{ old('mobilenumber') }}" required>

            <!-- Date of Birth, Gender -->
            <input type="date" name="date_of_birth" value="{{ old('date_of_birth') }}">
            <select name="gender">
                <option value="">Select Gender</option>
                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
            </select>

            <!-- Address, Role, Nationality -->
            <input type="text" name="address" placeholder="Address" value="{{ old('address') }}">
            <input type="text" name="nationality" placeholder="Nationality" value="{{ old('nationality', 'Malaysian') }}" readonly>

            <!-- Parent/Guardian Information -->
            <input type="text" name="fname" placeholder="Father's Name" value="{{ old('fname') }}">
            <input type="text" name="fcontact" placeholder="Father's Contact" value="{{ old('fcontact') }}">
            <input type="text" name="foccupation" placeholder="Father's Occupation" value="{{ old('foccupation') }}">

            <input type="text" name="mname" placeholder="Mother's Name" value="{{ old('mname') }}">
            <input type="text" name="mcontact" placeholder="Mother's Contact" value="{{ old('mcontact') }}">
            <input type="text" name="moccupation" placeholder="Mother's Occupation" value="{{ old('moccupation') }}">

            <input type="text" name="gname" placeholder="Guardian's Name" value="{{ old('gname', 'Not Applicable') }}">
            <input type="text" name="gcontact" placeholder="Guardian's Contact" value="{{ old('gcontact', 'Not Applicable') }}">
            <input type="text" name="goccupation" placeholder="Guardian's Occupation" value="{{ old('goccupation', 'Not Applicable') }}">

            <!-- Blood Type, Allergies -->
            <input type="text" name="blood_type" placeholder="Blood Type" value="{{ old('blood_type') }}">
            <input type="text" name="allergies" placeholder="Allergies" value="{{ old('allergies', 'None') }}">

            <!-- Password and Confirm Password -->
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="password_confirmation" placeholder="Confirm Password" required>

            <button type="submit" class="btn-register">Register</button>
        </form>
    </div>
</body>
</html>
