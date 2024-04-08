<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin panel</title>

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

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

 @if(session('success'))
 <script>

     Swal.fire({
         icon: 'success',
         title: 'Success!',
         text: '{{ session('success') }}',
         showConfirmButton: false,
         timer: 3000
     });
 </script>
@endif
@include('components.Add')




</body>
</html>
