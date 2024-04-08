<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('Assets/css/styles.css') }}" />
  <title>Service</title>
</head>

<body>
  <div class="navbar">
    <div class="nav_items">
      <h1>Dream Day</h1>
      <div>
        <ul>
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/ser') }}">Services</a>
            <button><a href="{{ url('/login') }}">Login</a></button>

            {{-- <form action="{{ route('login') }}" method="POST">
                @csrf
                @method('GET')
                @if(isset($login_btn))
                <button type="submit" class="log_btn">{{ $login_btn }}</button>
                @endif
            </form> --}}

        </ul>

      </div>
    </div>

  <div class="search-bar">
    <input type="text" name="" id="find" placeholder="search here...." onkeyup="search()">
  </div>
  <div class="services_section">
    <h1>Our Services</h1>
    <div class="container_s">

      <div class="card" data-aos="fade-down-right">
        <div class="card-header">
          <img
            src="https://images.unsplash.com/photo-1625244724120-1fd1d34d00f6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aG90ZWxzfGVufDB8fDB8fHww"
            alt="rover" />
        </div>
        <div class="card-body">

          <h2>
            Venue
          </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti iste architecto illum nesciunt,
            officiis
            quam!</p>
          <div class="user">

            <button class="service_btn">See more</button>
          </div>
        </div>


      </div>
      <div class="card" data-aos="zoom-out">
        <div class="card-header">
          <img
            src="https://images.unsplash.com/photo-1565004569929-4f400c11e9ef?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzZ8fFBob3RvZ3JhcGh5fGVufDB8fDB8fHww"
            alt="ballons" />
        </div>
        <div class="card-body">

          <h2>
            Photography
          </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti iste architecto illum nesciunt,
            officiis
            quam!</p>
          <div class="user">

            <button class="service_btn">See more</button>
          </div>
        </div>

      </div>
      <div class="card" data-aos="fade-down-left">
        <div class="card-header">
          <img
            src="https://media.istockphoto.com/id/1481653069/photo/bridal-dresses-in-the-bridal-shop.webp?b=1&s=170667a&w=0&k=20&c=Px7JXoEd4W7dk1CIMQvbYhebOz1KswDCwEh22xCapmY="
            alt="ballons" />
        </div>
        <div class="card-body">

          <h2>
            Dress and Attire
          </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti iste architecto illum nesciunt,
            officiis
            quam!</p>
          <div class="user">

            <button class="service_btn">See more</button>
          </div>
        </div>

      </div>

      <div class="card">
        <div class="card-header">
          <img
            src="https://images.unsplash.com/photo-1470225620780-dba8ba36b745?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8TXVzaWMlMjBhbmQlMjBFbnRlcnRhaW5tZW50JTIwb2YlMjB3ZWRkaW5nfGVufDB8fDB8fHww"
            alt="city" />
        </div>
        <div class="card-body">

          <h2>
            Music and Entertainment
          </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti iste architecto illum nesciunt,
            officiis
            quam!</p>
          <div class="user">

            <button class="service_btn">See more</button>
          </div>
        </div>

      </div>
      <div class="card">
        <div class="card-header">
          <img
            src="https://media.istockphoto.com/id/650655146/photo/catering-food-wedding-event-table.webp?b=1&s=170667a&w=0&k=20&c=W3Gk6qixaUqF_lfIVEAOyL7O9zL99IKcxiO4f5nxQ0c="
            alt="city" />
        </div>
        <div class="card-body">

          <h2>
            Catering
          </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti iste architecto illum nesciunt,
            officiis
            quam!</p>
          <div class="user">

            <button class="service_btn">See more</button>
          </div>
        </div>

      </div>
      <div class="card">
        <div class="card-header">
          <img
            src="https://images.unsplash.com/photo-1520095729726-7fc38987e4a4?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDJ8fEludml0YXRpb25zJTIwYW5kJTIwU3RhdGlvbmVyeSUyMG9mJTIwd2VkZGluZ3xlbnwwfHwwfHx8MA%3D%3D"
            alt="city" />
        </div>
        <div class="card-body">

          <h2>
            Invitations and Stationery
          </h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti iste architecto illum nesciunt,
            officiis
            quam!</p>
          <div class="user">

            <button class="service_btn">See more</button>

          </div>
        </div>


      </div>
      <footer class="footer" style="margin-top: 30px;">

        <ul class="social-icon">
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-facebook"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-twitter"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a></li>
          <li class="social-icon__item"><a class="social-icon__link" href="#">
              <ion-icon name="logo-instagram"></ion-icon>
            </a></li>
        </ul>
        <ul class="menu">
          <li class="menu__item"><a class="menu__link" href="#">Home</a></li>
          <li class="menu__item"><a class="menu__link" href="#">About</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Services</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Testimonial</a></li>
          <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>

        </ul>
        <p>&copy;Dream day | All Rights</p>
      </footer>


    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    {{-- <script src="script/main.js"></script> --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        duration: 1000, // Set the duration to 1000 milliseconds (1 second), adjust as needed
    });
});
</script>

    <!-- javascript -->
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


    <!--<script>-->
</body>

</html>
