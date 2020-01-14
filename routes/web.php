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

Route::get("/cargarProducto","productoController@iraCargarProducto")->middleware("admin");

route::post("/cargarProducto","productoController@agregarProducto")->middleware("admin");

route::get("/borrarProducto","productoController@irABorrarProducto")->middleware("admin");

route::post("/borrarProducto","productoController@borrarProducto")->middleware("admin");

route::post("/borrarProducto{id}","productoController@mostrarProducto")->middleware("admin");

route::post("/borrarCarrito","productoController@borrarCarrito");


route::post("/carrito","productoController@agregarAlCarrito");

Route::get('/gastronomia', "HomeController@irAGastronomia");

Route::get('/viajes', "HomeController@irAViajes");

Route::get('/actividades', "HomeController@irAActividades");

Route::get('/carrito', "productoController@mostrarCarrito");

Route::get('/perfil', "HomeController@irAPerfil");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('tu vieja');
