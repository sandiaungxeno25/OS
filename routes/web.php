<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//      return view('dashboard');
//     // return 'Hello Laravel';
// });


// Badkend-------------------------------------------
Route::middleware('role:admin')->group(function(){
	
	
Route::get('dashboard', 'BackendController@dashboard')->name('dashboard');
Route::resource('items','ItemController');
//7 (get-4 / post -1 / put-1 /delete-1)
Route::resource('brands','BrandController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubcategoryController');
});
Route::resource('orders','OrderController');


// Frontend-----------------------------------

Route::get('/','FrontendController@home')->name('home');
Route::get('frontitem','FrontendController@frontitem')->name('frontitem');
Route::get('frontdetail/{id}','FrontendController@frontdetail')->name('frontdetail');
Route::get('frontabout','FrontendController@frontabout')->name('frontabout');
Route::get('frontcontact','FrontendController@frontcontact')->name('frontcontact');
Route::get('frontcheckout','FrontendController@frontcheckout')->name('frontcheckout');
Route::get('frontregister','FrontendController@frontregister')->name('frontregister');
Route::get('frontlogin','FrontendController@frontlogin')->name('frontlogin');
Route::get('frontprofile','FrontendController@frontprofile')->name('frontprofile');



// endbackend-------------------------------------------

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('getitems','FrontendController@getItems')->name('getitems');
