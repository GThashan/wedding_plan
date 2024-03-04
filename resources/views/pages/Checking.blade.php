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
    <form action="">


        <h1>Contact Form</h1>
        <p>You are selecting some services. According to that 1000 is the budget for those services. If you only agree with that, please fill out this form to continue.
            We provide services only in Ratnapura district. After checking your details, we will give our response within 24 hours. After that, we can talk with you and plan things accordingly.
        </p>

        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your full name">

        <label for="number1">Contact Number 1</label>
        <input type="tel" name="phoneNumber1" id="phoneNumber1" placeholder="Enter your phone number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">


        <label for="number2">Contact Number 2</label>
        <input type="tel" name="phoneNumber2" id="phoneNumber2" placeholder="Enter your phone number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">


        <label for="address">Address</label>
        <input type="text" name="address" id="address" placeholder="Enter your address">

        <label for="guestCount">Guest Count</label>
        <input type="number" name="guestCount" id="guestCount" placeholder="Enter the number of guests">


        <label for="weddingDate">Wedding Date</label>
        <input type="date" name="weddingDate" id="weddingDate">


        <div class="tearm">
        <input type="checkbox" id="agree">
        <label for="agree"> Agree with our terms and conditions</label>
        </div>


        <input type="submit">
    </form>
</div>
</body>
</html>
