<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpoController;
use App\Http\Controllers\ParticipanteController;
use App\Http\Controllers\DiplomaController;
use App\Mail\ConfirmacionPago;
use App\Mail\DiplomaEmail;
use App\Models\Participante;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/eventos', function () {
    return view('eventos');
});

//Route::resource('simposio',SimpoController::class);
route::get('inscribirse',[SimpoController::class,'index']);

//route::post('/ingresar',[SimpoController::class,'ingresar']);

Route::post('/ingresar', [ParticipanteController::class, 'store'])->name('registrar.participante');
Route::get('/enviar-correo', [DiplomaController::class, 'mostrarFormularioCorreo'])->name('enviar-correo');
Route::post('/buscar-carnet', [DiplomaController::class, 'buscarCarnet'])->name('buscar-carnet');
Route::post('/generar-diploma', [DiplomaController::class, 'generarDiploma'])->name('generar-diploma');

Route::view('login.php', 'login')->name('login');
Route::view('control.php', 'control')->name('control');

Route::post('/login.php', function(){
    $datos = request()->only('email', 'password');
    if(Auth::attempt($datos)){
        return Redirect::to('/control.php');
    } 
    return 'Login Falldidos';
});

Route::view('eventos.php', 'eventos')->name('eventos');



