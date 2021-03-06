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

Route::get('admin/home', 'AdminController@home')->name('admin_home');
Route::get('home', function(){
	//why aint you working .. /
	exit();
	return Redirect::url('admin/home');
});

Route::get('/logout', function(){
	Auth::logout();
	return redirect()->route('login');
});

Route::get('/', function () {
    //return view('welcome');
    return view('index');
});

Route::get('/team', function () {
    //return view('welcome');
    return view('team');
});

Route::get('/about_us', function () {
    //return view('welcome');
    return view('about');
});

Route::get('/info', function () {
    //return view('welcome');
    return view('info');
});

Route::get('/news', 'WebController@news');
Route::get('/news/{id}', 'WebController@newsItem');


Route::get('/services', function () {
    //return view('welcome');
    return view('services');
});

Route::get('/products', function () {
    //return view('welcome');
    return view('products');
});

Route::get('contact_us', function () {
    //return view('welcome');
    return view('contact');
});

Route::post('contact_us', 'AdminController@post_contactUs')->name('contactus');



Route::get('admin/add_news', 'AdminController@addNews');
Route::post('admin/add_news', 'AdminController@post_addNews')->name('postNews');
Route::get('admin/archive', 'AdminController@archive')->name('archive');
Route::get('admin/inbox', 'AdminController@inbox')->name('inbox');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
