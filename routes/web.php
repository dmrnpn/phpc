<?php

use App\Http\Controllers\MessagesController;
use App\Http\Controllers\PortfolioController;
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
Route::view('/','home')->name('home');
Route::view('/quienes-somos','about')->name('about');
Route::view('/contact','contact')->name('contact');


Route::get('/portafolio',[\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');

Route::get('/portafolio/{id}',[\App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');
// usando php artisan make:controller name --api, --resource 
// Route::resource('projects', PortfolioController::class)->only(['index', 'show']);

//ruta para formulario con el metodo post

Route::post('contact',[MessagesController::class,'store']);