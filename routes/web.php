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



Route::get('/', "HomeController@irAHome");

Route::get('/contacto',"HomeController@irAContacto");

Route::get("/faq","HomeController@irAFaq");

Route::post('/irAGastronomia', "HomeController@irAGastronomia");

/*
Route::get('/registrate', function () {
    return view('registrate');
});

Route::get('/login', function () {
    return view('login');
});
*/

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/gastronomia', function () {
    return view('gastronomia');
});

Route::get('/viajes', function () {
    return view('viajes');
});

Route::get('/actividades', function () {
    return view('actividades');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
?>