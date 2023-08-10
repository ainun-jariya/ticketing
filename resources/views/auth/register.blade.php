@extends('application')

@section('content')
  <h1>Register</h1>
  <p>Create an account in our demo app.</p>
  <form class="pure-form pure-form-stacked" action="/register" method="post" enctype="multipart/form-data">
    @csrf
    <label for="name">Full Name</label>
    <input type="text" name="name" required>

    <label for="email">Email Address</label>
    <input type="email" name="email" required>

    <label for="phone">Phone Number</label>
    <input type="text" name="phone" required>

    <label for="password">Password</label>
    <input type="password" minlength="8" name="password" required>

    <label for="c_password">Confirm Password</label>
    <input type="password" minlength="8" name="c_password" required>

    <label for="photo">Photo</label>
    <input type="file" name="photo">

    <input class="pure-button pure-button-primary" type="submit" value="Register">
  </form>
  <p>Already have an account? <a href="/">Login here</a></p>
@endsection