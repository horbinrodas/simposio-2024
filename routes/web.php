<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpoController;
use App\Http\Controllers\ParticipanteController;
use App\Livewire\ShowPagos;
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

Route::get('/admin', ShowPagos::class);
//Route::resource('simposio',SimpoController::class);
route::get('inscribirse',[SimpoController::class,'index']);

//route::post('/ingresar',[SimpoController::class,'ingresar']);

Route::post('/ingresar', [ParticipanteController::class, 'store'])->name('registrar.participante');


