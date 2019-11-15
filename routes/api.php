<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function() {
    return view('api.inicial');
})->name('index');

Route::get('/alunos', function() {
    return view('api.alunos.index');
})->name('alunos.index');

Route::get('/estagios', function() {
    return view('api.estagios.index');
})->name('estagio.index');