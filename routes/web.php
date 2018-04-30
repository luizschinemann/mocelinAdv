<?php

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
    return view('index');
});
Route::get('/sobre-nos', function () {    
    return View::make('sobre-nos');
});

Route::get('/solucoes', function () {    
    return View::make('solucoes');
});

Route::get('/equipe', function () {    
    return View::make('equipe');
});

Route::get('/publicacoes', function () {    
    return View::make('publicacoes');
});

Route::get('/noticias', function () {    
    return View::make('noticias');
});

Route::get('/eventos', function () {    
    return View::make('eventos');
});

Route::get('/carreiras', function () {    
    return View::make('carreiras');
});

Route::get('/contato', function () {    
    return View::make('contato');
});





