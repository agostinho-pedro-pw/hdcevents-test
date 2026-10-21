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
//Usandos controles no laravel
use App\Http\Controllers\EventController;

//Criando uma rota para o controller
Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

//Aprendendo mais sobre as rotas paralelas/alternativas;
Route::get('/contacto/{date?}', function ($date=null) {
    return view('contact',['date' => $date]);
});

//Usando o request para pegar o parametro da url
Route::get('/product', function () {

    $busca = request('search');

    return view('product',
    [
    "busca"=>$busca]);
});


//Trabalho com os parametros opcinal
Route::get('/test/{id?}', function($id=null) {

    return view('test',
    ["id"=>$id]);
});

Route::get('/pesquisa', function() {

    $pesquisa=request('search');

    return view('pesquisa',
    ["pesquisa"=>$pesquisa]);
});