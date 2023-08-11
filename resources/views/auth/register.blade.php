@extends('guest_layout')

@section('content')
<div class="row">
    <div class="col-6">
  <h1>Register</h1>
  <p>Create an account in to be a member.</p>
  <form class="pure-form pure-form-stacked" action="/register" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 row">
          <div class="col">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" name="name" required class="form-control">
    </div>
        </div>
        <div class="mb-3 row">
          <div class="col">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" name="email" required class="form-control">
    </div>
        </div>
        <div class="mb-3 row">
          <div class="col">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" name="phone" required class="form-control">
    </div>
        </div>
        <div class="mb-3 row">
          <div class="col">
    <label for="password" class="form-label">Password</label>
    <input type="password" minlength="8" name="password" required class="form-control">
    </div>
        </div>
        <div class="mb-3 row">
          <div class="col">
    <label for="c_password" class="form-label">Confirm Password</label>
    <input type="password" minlength="8" name="c_password" required class="form-control">
    </div>
        </div>
        <div class="mb-3 row">
          <div class="col">
    <label for="photo" class="form-label">Photo</label>
    <input type="file" name="photo" class="form-control">
    </div>
        </div>
        <div class="mb-3 text-end">
    <input class="btn btn-outline-primary" type="submit" value="Register">
        </div>
  </form>
  <p>Already have an account? <a href="/">Login here</a></p>
  </div>
  </div>
@endsection