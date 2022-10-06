<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WikiLaravelController;

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

Route::controller(WikiLaravelController::class)->group(function () {
    Route::prefix('/')->group(function(){
        Route::get('indice', 'index');
        Route::get('contenido', 'content')->name('test');
        Route::get('contacto', 'contact')->name('contacto');
        Route::post('contacto', 'store')->name('formulario.contactar');
    });
});
