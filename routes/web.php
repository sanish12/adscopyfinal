<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//admin
Route::prefix('admin')->group(function() {
Route::get('/login','adminAuthContoller@index')->name('admin.login');
Route::post('/login','adminAuthContoller@check');
Route::get('/logout','adminAuthContoller@logout');
Route::get('/dashboard', 'adminController@dashboard')->name('admin.dashboard');
Route::get('/mngcategory','adminController@show');
Route::get('/mngcategory/{id}', 'adminController@category');

});
//seller authentication
Route::prefix('seller')->group(function() {
Route::get('/register', 'sellersauthController@register');
Route::post('/register', 'sellersauthController@store');
Route::post('/login', 'sellersauthController@lstore');
Route::get('/login', 'sellersauthController@login')->name('seller.login');
Route::get('/logout', 'sellersauthController@logout')->name('seller.logout');
Route::get('/dashboard','sellersController@show')->name('seller.dashboard');
Route::get('/profile','sellersController@showProfile')->name('seller.profile');
Route::get('/eprofile', 'sellersController@editProfile')->name('seller.makeProfile');
Route::post('/eprofile','sellersController@storeProfile');
Route::get('/cancel', 'sellersController@cancel');
});
//seller routing

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user/logout','Auth\LoginController@userlogout');
