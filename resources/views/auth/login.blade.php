<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.min.css">
        <link href="\css\guest\login.css" rel="stylesheet">
        <script src="public\vendor\bootstrap\js\bootstrap.bundle.js"></script>
        <title>Tumtuna | log in</title>
    </head>
    <body>
        <div class="wrapper">
        <form action="{{ route('login')}}" method="POST" class="form-signin"> 
            @csrf      
              <h2 class="form-signin-heading">Please login</h2>
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email address" required autofocus>
              @if ($errors->has('email'))
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Enter password" required>  
          @if ($errors->has('password'))
          <span class="invalid-feedback" role="alert">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif  
              <label class="checkbox">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
     Remember me
              </label>
              <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
              
              <div class="form-group">
                @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif
            </div>
            <p class="signup-acc-link">Not registered? <a href="/register">Create an account</a></p>
            </form>
          </div>
    </body>
</html>