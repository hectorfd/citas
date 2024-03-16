<?php

use App\Models\Specialty;
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
     return view('auth.login');
 });
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    
    //rutas especialidades
    Route::get('/especialidades', [App\Http\Controllers\Admin\SpecialtyController::class, 'index']);
    Route::get('/especialidades/create', [App\Http\Controllers\Admin\SpecialtyController::class, 'create']);
    Route::get('/especialidades/{specialty}/edit', [App\Http\Controllers\Admin\SpecialtyController::class, 'edit']);
    Route::post('/especialidades', [App\Http\Controllers\Admin\SpecialtyController::class, 'sendData']);

    Route::put('/especialidades/{specialty}', [App\Http\Controllers\Admin\SpecialtyController::class, 'update']);

    Route::delete('/especialidades/{specialty}', [App\Http\Controllers\Admin\SpecialtyController::class, 'destroy']);

    //rutas medicos
    Route::resource('medicos', 'App\Http\Controllers\Admin\DoctorController');

    //rutas pacientes
    Route::resource('pacientes', 'App\Http\Controllers\Admin\PatientController');
});

Route::middleware(['auth', 'doctor'])->group(function () {
    Route::get('/horario', [App\Http\Controllers\Doctor\HorarioController::class, 'edit']);
    Route::post('/horario', [App\Http\Controllers\Doctor\HorarioController::class, 'store']);

});