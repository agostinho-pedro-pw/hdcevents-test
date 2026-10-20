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

Route::get('/', function () {
    $nome = "Agostinho";
    $idade =17;

    $array=[10,20,30,40,50];
    //Criando array nome
    $nomes=["Agostinho",
    "Maria",
    "Joana",
    "Meury"];

    return view('welcome',
    ["nome" => $nome,
    "idade"=>$idade, 
    "profissao"=>"Programador",
    "array"=>$array,
    "nomes"=>$nomes
    ]);

});

Route::get('/contacto', function () {
    return view('contact');
});
Route::get('/produto', function () {
    return view('product');
});
