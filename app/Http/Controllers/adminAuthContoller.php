<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class adminAuthContoller extends Controller
{
    public function __construct(){
      $this->middleware('guest:admin', ['except'=>['logout']]);
    }
    public function index()
    {
      return view('admin.login');
    }
    public function check(Request $req){
      $this->validate(request(),[
        'email'=>'required|email',
        'password' => 'required'
    ]);
    if(Auth::guard('admin')->attempt(['email'=>$req->email, 'password' => $req->password], $req->remember))
  {
    //if successfull redirect to intended location
    return redirect()->route('admin.dashboard');
  }

    //if unsuccessfull return back
    return redirect()->back()->withInput($req->only('email', 'remember'));

    }
    public function logout()
    {
        Auth::guard('admin')->logout();

        //$request->session()->flush();

        //$request->session()->regenerate();

        return redirect('/admin/login');
    }
}
