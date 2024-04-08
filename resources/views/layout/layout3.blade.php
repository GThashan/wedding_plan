<!DOCTYPE html>
<html>
<head>
    <title>Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('Assets/css/service.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">

     <h2 class="head">Dream Day</h2>

    <ul class="navbar-nav">
    <a class="nav-links home"  href="{{ url('/') }}">Home</a>
    <a class="btn btn-outline-light" href="{{ route('shopping.cart') }}">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Budget  <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
    </a>
</ul>


  </div>
</nav>
<div class="container mt-4">
    <div class="login_user">
        <h1> Welcome, {{ Auth::user()->name }}</h1>
    </div>
    <div class="search-bar">
        <input type="text" name="" id="find" placeholder="search here...." onkeyup="search()">
      </div>



    <script>

        @if(session('success'))

            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: '{{ session('success') }}',
                showConfirmButton: false,
                timer: 3000
            });
        @endif
    </script>

    @yield('content')
</div>


@extends('components.footer-section')
@yield('scripts')
@include('libraries.script')


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
AOS.init({
    duration: 1000,
});
});
</script>


<script type="text/javascript">
  function search() {
    let filter = document.getElementById('find').value.toUpperCase();
    let item = document.querySelectorAll('.card');
    let l = document.getElementsByTagName('h2');
    for (var i = 0; i <= l.length; i++) {
      let a = item[i].getElementsByTagName('h2')[0];
      let value = a.innerHTML || a.innerText || a.textContent;
      if (value.toUpperCase().indexOf(filter) > -1) {
        item[i].style.display = "";
      }
      else {
        item[i].style.display = "none";
      }
    }
  }
</script>
<script>
    let previewContainer = document.querySelector('.products-preview');
let previewBox = previewContainer.querySelectorAll('.preview');

document.querySelectorAll('.container_s .card').forEach(card => {
    card.onclick = () => {
        previewContainer.style.display = 'flex';
        let name = card.getAttribute('data-name');
        previewBox.forEach(preview => {
            let target = preview.getAttribute('data-target');
            if (name == target) {
                preview.classList.add('active');
            }
        });
    };
});

previewBox.forEach(close => {
    close.querySelector('.fa-times').onclick = () => {
        close.classList.remove('active');
        previewContainer.style.display = 'none';
    };
});

</script>

</body>
</html>
