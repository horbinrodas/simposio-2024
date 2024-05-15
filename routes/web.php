<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpoController;
use App\Mail\Contacto;

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

//Route::resource('simposio',SimpoController::class);
route::get('inscribirse',[SimpoController::class,'index']);

route::post('/ingresar',[HomeController::class,'ingresar']);

Route::get('contactanos', function () {
    try {
        Mail::to('mjpvm71@gmail.com')->send(new Contacto());
        return "Mensaje enviado";
    } catch (\Exception $e) {
        return "Error: " . $e->getMessage();
    }
})->name('contactanos');

