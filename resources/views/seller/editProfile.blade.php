@extends('seller.layout')
@section('main')
<?php $user=Auth::user()->id; ?>
<form class="form-inline" method='POST' action='/seller/eprofile' enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="form-group">
  <label for="availability">Availability</label>
  <select name='availability'>
    @if(((Auth::user()->Availability)!='NULL') && ((Auth::user()->Availability)!='null') )
  <option style='color:red;' value='{{ Auth::user()->Availability }}' selected='selected'> {{ Auth::user()->Availability }}</option>
@endif
  <option value='NULL' >NULL</option>
  <option value="Full Time">Full Time</option>
  <option value="Part Time">Part Time</option>
  <option value="Per Demand">Per Demand</option>
  </select>
  </div>
  <hr>
  <div class="form-group">
  <label for="skill">Skill</label>
  <select name='skill'>
    @if(((Auth::user()->skill)!='NULL') && ((Auth::user()->skill)!='null') )
    <option style='color:red;' value='{{ Auth::user()->skill }}' selected='selected'> {{ Auth::user()->skill }}</option>
@endif
<option value='NULL' >NULL</option>
  <option value="PHP">PHP</option>
  <option value="Design">Design</option>
  <option value="Databases">Database</option>
  </select>
  </div>
  <hr>
  <div class="form-group">
  <label for='Description'>Description</label>
  @if(((Auth::user()->description)!='NULL') && ((Auth::user()->description)!='null') )
  <textarea name='Description'>{{ Auth::user()->description }}</textarea>
  @else
  <textarea name='Description'></textarea>
  @endif
  </div>
  <hr>
  <label for='file'>Profile Image (ONLY CHOSE A FILE IF YOU WANT TO CHANGE PICTURE!)</label>
  <img src='/uploads/avatars/{{ Auth::user()->avatar }}' style='width150px; height:150px; float:left; border-radius:50%; margin-right:25px;'>
<input type="file" name="avatar" id="fileToUpload">
  <hr>
  <a href='/seller/cancel'><button type="button" name='cancel' class="btn btn-primary" style='float:left; width:10em;'>Cancel</button></a>
  <input type='submit' class='btn btn-primary' name='submit' value='Save and Update' style='float:right;'>
</form>

@stop
