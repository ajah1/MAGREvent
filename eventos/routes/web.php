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

Route::get('/', 'EventosController@index');
Route::get('/home', 'EventosController@index');

//Route::get('/home', 'EventosController@index');

Route::get('/404', function () {
    return view('404');
});

Route::get('/buscar', function () {
    return view('buscar');
});


// Mostrar toda la informacion
Route::get('usuarios', ["as" => "listarUsers", "uses" => "UsuariosController@listarUsuario"]);
Route::get('eventos', 'EventosController@index');
Route::get('reservas', 'ReservasController@index');
Route::get('entradas', 'EntradasController@index');
Route::get('tipos', 'TiposController@index');

Route::delete('/reserva/borrar/{id}/{id_evento}/{id_cliente}', ["as" => "borrar", "uses" => "ReservasController@borrar"]);
Route::post('/usuario/busqueda', ["as" => "buscarUsuario", "uses" => "UsuariosController@search"]);
Route::post('/tipo/busqueda', ["as" => "buscarTipo", "uses" => "TiposController@search"]);
Route::post('/reserva/busqueda', ["as" => "buscarReserva", "uses" => "ReservasController@search"]);
Route::post('/evento/busqueda', ["as" => "buscarEvento", "uses" => "EventosController@search"]);
Route::post('/entrada/busqueda', ["as" => "buscarEntrada", "uses" => "EntradasController@search"]);

// Crear nueva informacion
Route::resource('usuario', 'UsuariosController');
Route::resource('evento', 'EventosController');
Route::resource('entrada', 'EntradasController');
Route::resource('tipo', 'TiposController');
Route::resource('reserva', 'ReservasController');

// Registro Usuario
Route::post('registro', [
    "as" => "registrar",
    "uses" => "UsuariosController@store"
]);

// Nuevo Evento
Route::post('nuevoEvento', [
    "as" => "newEvent",
    "uses" => "EventosController@store"
]);

// Contactos
Route::get('contactos', [
    "as" => "contactanos",
    "uses" => "ContactosController@index"
]);

// Ver producto
Route::get('/productos/{id}', [
    "as" => "verProducto",
    "uses" => "ProductosController@index"
]);

// Comprar
Route::get('comprar', [
    "as" => "comprar",
    "uses" => "PagosController@index"
]);


Auth::routes();

Route::get('/home', 'HomeController@authenticated')->name('home');

Route::get('admin', [
    "as" => "admin",
    "uses" => "HomeController@admin"
]);

Route::get('crearEvento', [
    "as" => "crearEvento",
    "uses" => "EventosController@newEvento"
]);

Route::get('crearEntrada', [
    "as" => "crearEntrada",
    "uses" => "EntradasController@newEntrada"
]);

Route::post('correo', [
    "as" => "correo",
    "uses" => "ContactosController@correo"
]);

Route::post('comprarProducto', [
    "as" => "comprarProducto",
    "uses" => "PagosController@correo"
]);
