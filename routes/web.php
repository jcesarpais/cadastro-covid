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

    Route::get('/cadastro/cadastrar', [App\Http\Controllers\covid19Controller::class, 'cadastrar'])->name('CadastroPacientes');

    Route::get('/cadastro/buscar', [App\Http\Controllers\covid19Controller::class, 'buscar'])->name('BuscaPacientes');

    Route::get('/cadastro/result', [App\Http\Controllers\covid19Controller::class, 'result'])->name('Resultado');
    
    Route::get('/buscar/{id}', function ($id){
        return view('pesquisa', ['id' => $id]);
    });
});

