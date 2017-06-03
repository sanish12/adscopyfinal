<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\seller;
class sellersauthController extends Controller
{
//
public function __construct()
  {
      $this->middleware('guest:seller', ['except'=>['logout']]);
  }

  public function register()
  {
    return view('authentication.sellerregister');
  }
  public function store(Request $req)
  {
    $this->validate(request(),[
      'name'=>'required',
      'email'=>'required|email|unique:sellers',
      'password' => 'required|confirmed'
  ]);
  //create the user
        $user= new seller([
          'name'=>$req->input('name'),
          'email'=>$req->input('email'),
          'password' => bcrypt($req->input('password'))
        ]);
        $user->save();

        //redirectsession
        session()->flash('message','Thank you for Signing Up Go to Seller to start off');
        return redirect('/');
  }
  public function login()
  {
    return view('authentication.sellerlogin');
  }
  public function lstore(Request $req)
  {
    $this->validate(request(),[
      'email'=>'required|email',
      'password' => 'required'
  ]);
  if(Auth::guard('seller')->attempt(['email'=>$req->email, 'password' => $req->password], $req->remember))
{
  //if successfull redirect to intended location
  return redirect()->intended(route('seller.dashboard'));
}

  //if unsuccessfull return back
  return redirect()->back()->withInput($req->only('email', 'remember'));
  }
  public function logout()
  {
      Auth::guard('seller')->logout();

      //$request->session()->flush();

      //$request->session()->regenerate();

      return redirect('/');
  }
}
