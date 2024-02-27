<?php

/*use App\Http\Controllers\Student\StudentController;*/
use App\Http\Controllers\StudentController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/pagina1', function () {
    return view('pagina1');
});

Route::get('/documnets/{clave}', function ($clave) {
    return view('panel')->with('codigo', $clave);
});*/

/*---------------------*/

//Register
Route::get('/formulario', function () {
    return view('formulario');
})->name('formulario');
//Lista de estudiante
Route::resource('estudiantes', StudentController::class);
//Login
Route::get('login', function(){
    return view ('login');
})->name('login');
//Dashboard
Route::get('dashboard', function(){
    return view ('dashboard');
})->name('dashboard');

// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    // Ruta para la lista de estudiantes
    Route::resource('estudiantes', StudentController::class);
    // Ruta para el dashboard
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});