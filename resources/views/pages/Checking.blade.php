<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('Assets/css/service.css') }}" />
    <title>Checking</title>
</head>
<body>
<div class="form-body">

<form method="POST" action="{{ route('checkout.store') }}">
    @csrf
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <h1>Checkout Form</h1>
    <p>Pick services within 1000 rupees. Fill out the form. We serve only in Ratnapura. Expect a response in 24 hours.</p>

    <label for="name">Full Name</label>
    <input type="text" name="name" id="name" placeholder="Enter your full name" required>

    <label for="phoneNumber1">Contact Number 1</label>
    <input type="number" name="phoneNumber1" id="phoneNumber1" placeholder="Enter your phone number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

    <label for="phoneNumber2">Contact Number 2</label>
    <input type="number" name="phoneNumber2" id="phoneNumber2" placeholder="Enter your phone number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">

    <label for="address">Address</label>
    <input type="text" name="address" id="address" placeholder="Enter your address" required>

    <label for="guestCount">Guest Count</label>
    <input type="number" name="guestCount" id="guestCount" placeholder="Enter the number of guests" required>

    <label for="weddingDate">Wedding Date</label>
    <input type="date" name="weddingDate" id="weddingDate" required>

    {{-- <div class="tearm">
        <input type="checkbox" id="agree" name="agree" value="1" required>
        <label for="agree"> Agree with our terms and conditions</label>
    </div> --}}

    <input type="submit" value="Submit">
</form>

</div>
</body>
</html>
