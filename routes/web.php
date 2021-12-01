<?php

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
Route::group(['middleware' => 'web'], function(){

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
    
    Auth::routes();
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');  

    Route::get('/cadastro/cadastrar', [App\Http\Controllers\covid19Controller::class, 'cadastrar'])->name('cadastro.cadastrar')->middleware('auth');

    Route::get('/cadastro/buscar', [App\Http\Controllers\covid19Controller::class, 'buscar'])->name('cadastro.buscar')->middleware('auth');

    Route::get('/cadastro/result', [App\Http\Controllers\covid19Controller::class, 'result'])->name('cadastro.result')->middleware('auth');
    
    Route::get('/cadastro/edit/{id}', [App\Http\Controllers\covid19Controller::class, 'edit'])->where('id', '[0-9]+')->name('cadastro.edit')->middleware('auth');

    Route::put('/{id}', [App\Http\Controllers\covid19Controller::class, 'update'])->where('id', '[0-9]+')->name('cadastro.update')->middleware('auth');
    
    Route::post('/cadastro', [App\Http\Controllers\covid19Controller::class, 'store'])->name('cadastro.store')->middleware('auth');

    
});

