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

route::post("/cargarProducto","productoController@agregarProducto");

route::get("/borrarProducto","productoController@irABorrarProducto");

route::post("/borrarProducto","productoController@borrarProducto");

route::post("/borrarProducto{id}","productoController@mostrarProducto");

route::get("/carrito","HomeController@agregarAlCarrito");

route::post("/carrito","ProductoController@agregarAlCarrito");

Route::get('/gastronomia', "HomeController@irAGastronomia");

Route::get('/viajes', "HomeController@irAViajes");

Route::get('/actividades', "HomeController@irAActividades");

Route::get('/carrito', "HomeController@irACarrito");

Route::get('/perfil', "HomeController@irAPerfil");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
