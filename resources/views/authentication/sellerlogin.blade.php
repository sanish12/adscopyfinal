@extends('layouts.master')
@section('main')
<div class='col-md-8'>
  <h1> Seller Login In </h1>
  <h2>New here? Want to <a href='/seller/register'>register</a> ?</h2>

  <form method='POST' action='/seller/login'>
          {{ csrf_field() }}

          <div class='form-group'>
              <label for='email'> Email: </label>
              <input type='email' class='form-control' id='name' name='email' required>
          </div>
          <div class='form-group'>
              <label for='password'> password: </label>
              <input type='password' class='form-control' id='password' name='password' required>
          </div>

          <div class='form-group'>
              <button type='submit' class='btn btn-primary'>LOGIN</button>
          </div>
            @include('layouts.errors')
</div>
</div>
@stop
