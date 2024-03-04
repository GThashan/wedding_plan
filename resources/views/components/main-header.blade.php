<div class="container_heading">
    @if(isset($videoSrc))
    <video controls autoplay loop muted plays-inline class="back_video">
        <source src="{{ $videoSrc }}" type="video/mp4">
    </video>
@endif

  <div class="navbar">
    <div class="nav_items">
      <h1>Dream Day</h1>
      <div>
        <ul>
            <li>Home</li>
            <li><a href="#about">About</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#testimonial">Testimonial</a></li>
            <li><a href="#contactUs">Contact Us</a></li>

            {{-- @if(auth()->check())

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if(isset($logout_btn))
                        <button type="submit">Log Out</button>
                        @endif
                    </form>

            @else



            @endif --}}
            <form action="{{ route('login') }}" method="POST">
                @csrf
                @method('GET')
                @if(isset($login_btn))
                <button type="submit" class="log_btn">{{ $login_btn }}</button>
                @endif
            </form>


        </ul>


      </div>
    </div>
</div>
<div class="overlay">
    @if(isset($header))
  <h1 data-aos="fade-down">{{ $header }}</h1>
   @endif

   @if(isset($content))
  <p data-aos="fade-down">
   {{ $content }}
  </p>
  @endif

  @if(isset($headerbtn))
  <button>{{ $headerbtn }}</button>
  @endif
</div>
</div>
