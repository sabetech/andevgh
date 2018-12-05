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

Route::get('/news', function () {
    //return view('welcome');
    return view('news');
});


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


Route::get('admin/home', 'AdminController@home');
Route::get('admin/add_news', 'AdminController@addNews');
Route::post('admin/add_news', 'AdminController@post_addNews')->name('postNews');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
