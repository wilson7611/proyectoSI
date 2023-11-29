<?php

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EspecialidadController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\HomeController;
use App\Models\Afiliado;
use App\Models\Especialidad;
use App\Models\Principal;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Language Translation
// Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

// Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

// // //Update User Details
// // Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
// // Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->where('any', '.*')->name('index');



Route::resource('admin', AdminController::class);
Route::resource('plantilla', PrincipalController::class);
Route::resource('afiliado', AfiliadoController::class);
Route::resource('especialidades', EspecialidadController::class);
Route::resource('principal', PrincipalController::class);
