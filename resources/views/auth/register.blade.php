<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="vendor\bootstrap\css\bootstrap.min.css">
        <link href="\css\guest\login.css" rel="stylesheet">
        <script src="public\vendor\bootstrap\js\bootstrap.bundle.js"></script>
        <title>Tumtuna | Register</title>
    </head>
    <body>
        <div class="wrapper">
        <form action="{{ route('register')}}" method="POST" class="form-signin"> 
            @csrf      
              <h2 class="form-signin-heading">Please Register</h2>
              <input id="name" type="text"
                                    class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                    value="{{ old('name') }}" placeholder="Name" required autofocus >
                                    @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                    <br>
                                    
                                        <input id="email" type="email"
                                            class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                            value="{{ old('email') }}" placeholder="Email Address" required>
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif 
                                            <br>
                                            <input id="password" type="password"
                                            class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                            name="password" placeholder="Password" required>
                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                            <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" placeholder="Confirm Password" required>
                                            <button class="btn btn-lg btn-primary btn-block" type="submit"> {{ __('Register') }}</button>
                                    </div>
              
              
              
            </form>
          </div>
    </body>
</html>