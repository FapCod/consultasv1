<?php

use App\Http\Controllers\dniController;
use App\Http\Controllers\dolarController;
use App\Http\Controllers\rucController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('consulta/dni', [dniController::class,'consultadni']
)->name('dni');

Route::get('consulta/ruc', [rucController::class,'consultaruc']
)->name('ruc');

Route::get('consulta/dolar', [dolarController::class,'consultadolar']
)->name('dolar');

Route::get('consulta/dni/{dni}', [dniController::class,'obtenerdatosdni']
)->name('consultar.dni');

Route::get('consulta/ruc/{ruc}', [rucController::class,'obtenerdatosruc']
)->name('consultar.ruc');

Route::get('consulta/dolar/{dolar}', [dolarController::class,'obtenerdatosdolar']
)->name('consultar.dolar');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
