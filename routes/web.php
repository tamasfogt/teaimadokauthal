<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('index');
});
            
Route::get('/home', function () {
    return view('index');
});
Route::get('/aszf', function () {
    return view('index');
});
Route::get('/products', function () {
    return view('index');
});
Route::get('/cart', function () {
    return view('index');
});
Route::get('/unsuccessful', function () {
    return view('index');
});

     
            
Route::get('/products/{product}', function () {
    return view('index');
});
      
            
Route::get('/errors/{error}', function () {
    return view('index');
});
      
Route::post('/api/buy', 'CartHandler\BuyProductController@buyProduct' );
            

Route::get('/login', 'LoginController@index');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

Route::get('/profile', function () {
    return view('index');
})->middleware('auth');;
Route::get('auth/logout', 'Auth\LoginController@logout');
Auth::routes();