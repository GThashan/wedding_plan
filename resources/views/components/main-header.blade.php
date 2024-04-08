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
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/ser') }}">Services</a>
            <a href="{{ url('/ser') }}">Testimonial</a>
            <a href="{{ url('/ser') }}">Contact Us</a>


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
