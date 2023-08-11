@extends('guest_layout')

@section('content')
  <div class="row">
    <div class="col-4">
      <h1>Login</h1>
      <p>Enter your username and password to login.</p>
      <form class="pure-form pure-form-stacked" action="/login" method="post">
        @csrf
        <div class="mb-3 row">
          <div class="col">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" name="email" required class="form-control">
          </div>
        </div>
        <div class="mb-3 row">
          <div class="col">
            <label for="password" class="form-label">Password</label>
            <input type="password" minlength="8" name="password" required class="form-control">
          </div>
        </div>
        <div class="mb-3 text-end">
          <input class="btn btn-outline-primary" type="submit" value="Login">
        </div>
      </form>
      <p>Don't have an account yet? <a href="/register">Register here</a></p>
    </div>
  </div>
@endsection