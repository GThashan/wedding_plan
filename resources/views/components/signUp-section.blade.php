<section>


    <div class="signin">
      <div class="content">
        <i class="fa fa-user user_profile"></i>
        <h2>Sign Up</h2>

        <div class="form">
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif

        {{-- @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif --}}
        @if(Session::has('success'))
        <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ Session::get('success') }}',
        });
    </script>
     @endif
            <form action="{{ route('signUp') }}" method="POST">
                @csrf
          <div class="inputBox">
            <input type="text" required name="name" /> <i>Username</i>
          </div>

          <div class="inputBox">
            <input type="email" required  name="email"/> <i>Email</i>
          </div>
          <div class="inputBox">
            <input type="password" required name="password"/> <i>Password</i>
          </div>

          <div class="links">
            <p>Already have an account</p>  <a href={{ route('login') }}>Login</a>
          </div>

          <div class="inputBox">
            <input type="submit" value="SignUp" />
          </div>
        </form>
        </div>
      </div>
    </div>
  </section>
