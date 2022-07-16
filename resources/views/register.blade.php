<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
</head>
<body class="body">

  <form class="form-signin" method="POST" action="{{ route('register') }}">
    <img src="{{ asset('asset/dist/img/logo.png') }}" width="150" height="150" alt="" class="mb-4">
    <h1 class="h3 mb-3 font-weight-normal">Register Account</h1>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input id="email" type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    <label for="inputPassword" class="sr-only">Username</label>
    <input id="password" type="text" placeholder="Username" class="form-control @error('username') is-invalid @enderror" name="username">
    <label for="inputPassword" class="sr-only">Password</label>
    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="pass" required autocomplete="current-password">
    @csrf
    @error('email')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    <div class="checkbox mb-3">
      <label>
        <input name="remember" {{ old('remember') ? 'checked' : '' }} type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    <p class="mt-2">Have accout ? <a href="{{ route('login')}}">Login here !</a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2020 EDII. All Rights Reserved</p>
  </form>

</body>
</html>
