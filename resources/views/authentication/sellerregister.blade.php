@extends('layouts.master')
@section('main')
<div class='col-md-8'>
  <h1> Seller Register  </h1>
  <h2>Already A member? <a href='/seller/login'>Login</a> ?</h2>

  <form method='POST' action='/seller/register'>
          {{ csrf_field() }}

          <div class='form-group'>
              <label for='name'> Username: </label>
              <input type='text' class='form-control' id='name' name='name' required>
          </div>
          <div class='form-group'>
              <label for='email'> Email: </label>
              <input type='email' class='form-control' id='name' name='email' required>
          </div>
          <div class='form-group'>
              <label for='password'> password: </label>
              <input type='password' class='form-control' id='password' name='password' required>
          </div>
          <div class='form-group'>
              <label for='password_confirmation'> Retype password: </label>
              <input type='password' class='form-control' id='password_confirmation' name='password_confirmation' required>
          </div>
          <div class='form-group'>
              <button type='submit' class='btn btn-primary'>Register</button>
          </div>
            @include('layouts.errors')
</div>
</div>
@stop
