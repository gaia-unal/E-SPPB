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

// Route::get('/', function () {
//     return view('');
// });



Route::get('/','MainDash@initial');
Route::get('main','MainDash@initial')->name('main');
Route::get('EquipoDeTrabajo','MainDash@team')->name('team');
Route::get('PublicacionesYDifusion','MainDash@publica')->name('publi');
// Route::post('main','MainDash@initial');
// Route::get('medical','MainDash@initial');
// Route::resource('try','TryControl');
// Auth::routes();


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('logout1', 'Auth\LoginController@logout')->name('logout1');

Route::post('register', 'RegistroController@store')->name('register');
// Route::get('register', 'RegistroController@store')->name('register');




Route::get('consulta/personalizada', 'Consultas@ConsultaP')->name('conP');
Route::get('consulta/limitada', 'Consultas@ConsultaL')->name('conL');
Route::get('consulta', 'Consultas@store')->name('consultaPer');

Route::get('HistoriaClinica', 'Paciente@initial')->name('hisC');
// Route::post('HistoriaClinica', 'Paciente@initial')->name('hisC2');



Route::get('HistoriaClinica/consultar', 'Paciente@store')->name('cedula');
// Route::post('HistoriaClinica/consultar', 'Paciente@store')->name('cedula2');

Route::get('usuario/agregar', 'Usuario@agregar')->name('usuarioAgregar');
// Route::get('usuario/editar', 'Usuario@editar')->name('usuarioEditar');
// Route::get('usuario/eliminar', 'Usuario@eliminar')->name('usuarioEliminar');
Route::get('usuario/listar', 'Usuario@listar')->name('usuarioListar');
Route::get('usuario/solicitud', 'Usuario@solicitud')->name('usuarioSolicitud');

Route::get('centroMedico', 'Center@listar')->name('cenMedi');
Route::get('centroMedico/{id}', 'Center@actualizar')->name('actualizarCen');



Route::get('usuario/listar/ver/{id}', 'Usuario@veredit')->name('veredit');

Route::post('usuario/listar/editar', 'Usuario@editar')->name('editar');
Route::get('usuario/listar/eliminar/{id}', 'Usuario@eliminar')->name('eliminar');

Route::post('usuario/add', 'Usuario@add')->name('formAdd');
Route::get('usuario/solicitud/{id}', 'Usuario@ver')->name('ver');
Route::get('usuario/solicitud/aceptar/{id}', 'Usuario@aceptar')->name('aceptar');
Route::get('usuario/solicitud/rechazar/{id}', 'Usuario@rechazar')->name('rechazar');


Route::get('map/grafico/Investigador', 'Grafico@initial')->name('grafico');
Route::get('map/grafico/Especialista', 'GraficoTwo@initial')->name('graficoTwo');
Route::get('map', 'Mapa@initial')->name('map');


// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/aspDemo', 'DemograficoController@index')->name('aspDemo');

// Auth::routes();

