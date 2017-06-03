<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\seller;
use App\SellerProfile;
use Image;
class sellersController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth:seller');
  }
public function show()
{
  return view('seller.dashboard');
}
public function showProfile()
{
  return view('seller.Profile');
}
public function editProfile()
{
  return view('seller.editProfile');
}
public function storeProfile(Request $req){
  if($req->hasFile('avatar')){
    $avatar= $req->file('avatar');
    $filename=time().'.'.$avatar->getClientOriginalExtension();
    Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));
    $user= Auth::user();
      $user->Availability= $req->input('availability');
      $user->skill= $req->input('skill');
      $user->description = $req->input('Description');
      $user->avatar = $filename;
      $user->save();

    return view('seller.Profile');
  }
    else{
      $user= Auth::user();
        $user->Availability= $req->input('availability');
        $user->skill= $req->input('skill');
        $user->description = $req->input('Description');
        $user->save();
      return view('seller.Profile');
    }

  }
  public function cancel()
  {
    return redirect(route('seller.profile'));
  }

}
