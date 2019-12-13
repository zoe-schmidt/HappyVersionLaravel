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

Route::get("/cargarProducto","productoController@iraCargarProducto");

Route::get("/cargarProducto/{id}","productoController@mostrarProducto");

route::post("/cargarProducto","productoController@agregarProducto");

Route::get('/gastronomia', "HomeController@irAGastronomia");

Route::get('/viajes', "HomeController@irAViajes");

Route::get('/actividades', "HomeController@irAActividades");

Route::get('/carrito', "HomeController@irACarrito");




//Route::get('/auth/login', "HomeController@irALogin");

//Route::get('/register', "HomeController@irARegistrate");

//Route::post('/', "RegisterController@irARegistrate");

//Route::get('/login', "LoginController@cargarLogin");

/*
Route::get('/registrate', function () {
    return view('registrate');
});

Route::get('/login', function () {
    return view('login');
});
*/
/*ESTO HAY QUE BORRARLO
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
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
