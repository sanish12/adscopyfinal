<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
class adminController extends Controller
{
  public function __construct(){
    $this->middleware('auth:admin');
  }
  public function dashboard(){
      return view('admin.dashboard');
  }
  public function show(){
    $categories = category::all();

    return view('admin.category', compact('categories'));
  }
  public function category($id){
    $category= category::find($id);

    return view('admin.subcategory', compact('category'));
  }
}
