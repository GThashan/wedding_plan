


<section>


    <div class="signin">
      <div class="content">
        <i class="fa fa-user user_profile"></i>
        <h2>Sign In</h2>

        <div class="form">
            @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error') }}
            </div>
        @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
          <div class="inputBox">
            <input type="text" required name="name" /> <i>Username</i>
          </div>

          <div class="inputBox">
            <input type="password" required name="password"/> <i>Password</i>
          </div>

          <div class="links">
            Don't have an account <a href="{{ route("signUp") }}">Signup</a>
          </div>

          <div class="inputBox">
            <input type="submit" value="Login" />
          </div>
        </form>
        </div>
      </div>
    </div>
  </section>
