<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Customer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-rVfaJWpqIstkRcdjZwHJ8I4/P5s8xlIgp/+HkTn2U9KQqoA43w+tDZNpE+3CKBe0" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('Assets/css/admin.css') }}" />



</head>

<body>


    <div class="navbar">
        <div class="nav_items">
            <h1>Admin Page</h1>
            <div>

                <ul>

                    <a href="{{ route('admin') }}">Add Service</a>
                    <a href="{{ route('view') }}">View Customer</a>
                </ul>

            </div>
        </div>


    </div>
   @include("components.View")



</body>
