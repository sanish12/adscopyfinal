@extends('seller.layout')
@section('main')
  <div>
    <img src='/uploads/avatars/{{ Auth::user()->avatar }}' style='width150px; height:150px; float:left; border-radius:50%; margin-right:25px;'>
    <p>Name: {{ Auth::user()->name }}</p>
    <hr>
    @if(((Auth::user()->Availability)!='NULL') && ((Auth::user()->Availability)!='null') )
      <p>Availability : {{ Auth::user()->Availability}}</p>
    @endif
    @if(((Auth::user()->skill)!='NULL') && ((Auth::user()->skill)!='null') )
    <p> Skill : {{ Auth::user()->skill }}</p>
    @endif
    @if(((Auth::user()->description)!='NULL') && ((Auth::user()->description)!='null') )
    <p> Description : {{ Auth::user()->description}}</p>
    @endif
    <a href='/seller/eprofile'><button type="button" name='cancel' class="btn btn-primary" style='float:right; width:10em;'>Edit</button></a>
  </div>
@stop
