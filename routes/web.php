<?php

use Illuminate\Support\Facades\Auth;
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

// Usando controllers no Laravel
use App\Http\Controllers\EventController;

// Criando rotas para o controller
Route::get('/', [EventController::class, 'index']); // home do site
Route::get('/events/create', [EventController::class, 'create']); // formulário de criação
Route::get('/events/{id}', [EventController::class, 'show']); // detalhes do evento
Route::post('/events', [EventController::class, 'store']); // envio dos dados do formulário ('store' é convenção do Laravel)
Route::get('/home', [EventController::class, 'home']);//Os middleware são para, qdo o usuario tentar fazer alguma alteração no codigo,só irá prosseguir qdo estiver logado no sistema
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth');
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth');

// Aprendendo mais sobre as rotas paralelas/
// Rotas de login, registo e logout (laravel/ui)
Auth::routes();
Route::get('/contacto/{date?}', function ($date = null) {
    return view('contact', ['date' => $date]);
});


// Rotas de login, registo e logout (laravel/ui)

/*
--> Estudando Laravel: pegar os parâmetros da URL

// Usando o request para pegar o parâmetro da URL
Route::get('/product', function () {
    $busca = request('search');

    return view('product', [
        'busca' => $busca
    ]);
});

// Trabalhando com parâmetros opcionais
Route::get('/test/{id?}', function ($id = null) {
    return view('test', [
        'id' => $id
    ]);
});

Route::get('/pesquisa', function () {
    $pesquisa = request('search');

    return view('pesquisa', [
        'pesquisa' => $pesquisa
    ]);
});
*/