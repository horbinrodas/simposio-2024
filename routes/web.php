<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpoController;
use App\Http\Controllers\ParticipanteController;
use App\Models\Participante;
use App\Models\Participacion;
use App\Http\Controllers\DiplomaController;
use App\Livewire\ShowPagos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
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

Route::get('/pago/{cod_participante}', function ($cod_participante) {
    $participante = Participante::where('codigo_participante', $cod_participante)->first();
    if ($participante) {
        $pago = $participante->pago;
        if ($pago && $pago->estado != 'pendiente') {
            return view('pago', ['message' => 'Este registro ya ha recibido un pago']);
        } else {
            return view('pago', ['cod_participante' => $cod_participante]);
        }
    } else {
        return view('pago', ['message' => 'No se encontró el participante con el código proporcionado.', 'cod_participante' => '']);
    }
});

Route::post('/submit-pago', [ParticipanteController::class, 'storePago'])->name('ingresar.pago');
route::get('inscribirse',[SimpoController::class,'index']);
route::get('/contacto',[SimpoController::class,'contacto']);
Route::post('/ingresar', [ParticipanteController::class, 'store'])->name('registrar.participante');
Route::get('/enviar-correo', [DiplomaController::class, 'mostrarFormularioCorreo'])->name('enviar-correo');
Route::post('/buscar-carnet', [DiplomaController::class, 'buscarCarnet'])->name('buscar-carnet');
Route::post('/generar-diploma', [DiplomaController::class, 'generarDiploma'])->name('generar-diploma');
Route::get('/participacion', [DiplomaController::class, 'buscarCarnet'])->name('participacion');
Route::view('login.php', 'login')->name('login');
Route::view('/eventos', 'eventos')->name('eventos');
Route::view('/instrucciones', 'instrucciones')->name('instrucciones');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', ShowPagos::class);
});
Route::post('/login.php', function(){
    $datos = request()->only('email', 'password');
    if(Auth::attempt($datos)){
        return Redirect::to('/admin');
    } 
    return 'Login Fallido';
});
Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/login.php');
});
Route::get('/qr/{cod_participante}', function ($cod_participante) {
    $participante = Participante::where('codigo_participante', $cod_participante)->first();
    if ($participante) {
        $string = '127.0.0.1:8000/participacion/'.$cod_participante;
        return QrCode::size(300)->generate($string);
    } else {
        return 'No se encontró el participante con el código proporcionado.';
    }
});

Route::middleware(['auth'])->group(function () {
    Route::get('/participacion/{cod_participante}', function ($cod_participante) {
        $participante = Participante::where('codigo_participante', $cod_participante)->first();
        if ($participante) {
            $participacion = $participante->participacion()->firstOrNew();
            $participacion->fecha_hora = now();
            $participacion->puntos = 5;
            $participacion->save();
            DiplomaController::buscarCarnet($participante->carnet);
            return view('enviar_correo', ['carnet' => $participante->carnet]);
        } else {
            return 'No se encontró el participante con el código proporcionado.';
        }
    });
});



