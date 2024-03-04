<!DOCTYPE html>
<html>
<head>
    <title>Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Assets/css/service.css') }}" />

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
    <ul class="navbar-nav">
        <li class="nav-item">
            <h2 class="head">Dream Day</h2>
        </li>
        <li class="nav-item">
            <a class="nav-links"  href="{{ url('/home') }}">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-links" href="#">About</a>
        </li>
    </ul>
    <a class="btn btn-outline-light" href="{{ route('shopping.cart') }}">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
    </a>

    {{-- @if(auth()->check())

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        @method('DELETE')
        @if(isset($logout_btn))
        <button type="submit">Log Out</button>
        @endif
    </form>

@else

    <form action="{{ route('login') }}" method="POST">
        @csrf
        @method('GET')
        @if(isset($login_btn))
        <button type="submit">{{ $login_btn }}</button>
        @endif
    </form>

@endif --}}

  </div>
</nav>
<div class="container mt-4">
    <div class="login_user">
        <h1> Welcome, {{ Auth::user()->name }}</h1>
    </div>

    <div class="service-info">
        <p>These are the all services we will provide for our customers. You can chooes what you want and we will give those services in suitable price. after selecting your service you can get breif idea of your budeget in your cart section</p>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>

    @endif

    {{-- @if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ session('success') }}',
            confirmButtonText: 'OK'
        });
    </script>
@endif --}}



    @yield('content')
</div>

@include('components.footer-section')
@yield('scripts')
@include('libraries.script')
</body>
</html>
