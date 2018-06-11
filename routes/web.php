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
Route::get('/quem-somos', function () {    
    return View::make('quem-somos');
});

Route::get('/areas-de-atuacao', function () {    
    return View::make('areas-de-atuacao');
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
Route::get('/fernando-mocelin-moraes', function () {    
    return View::make('equipe.mocelin');
});

Route::get('/rodrigo-correa-nunes', function () {    
    return View::make('equipe.correa');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
