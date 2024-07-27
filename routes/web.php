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
//     return view('welcome');
// });


// Route::get('/', function(){
//     return "Hola desde la pagina de inicio";
// });

// Route::get('contacto', function(){
//     return "Hola desde la pagina de contacto";
// });


// Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
//     return "Saludos " . $nombre;
// });

// la mejor forma de retornar html en laravel es retornando VISTAS


// 1 primera forma de enviar vistas
// Route::get('/', function(){
//     $nombre = 'Adonay';
//     return view('home')->with('nombre', $nombre);
// })->name('home');

// 2 segunda forma ideal si no usaremos tanta logica en nuestras paginas



// Route::view('/','home')->name('home');
// Route::view('/about','about')->name('about');
// Route::view('/contact','contact')->name('contact');
// Route::get('/portfolio',[\App\Http\Controllers\PortfolioController::class, 'index'])->name('portfolio');

Route::resource('projects','PortfolioController');