<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
    
    //atributos
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
        
    }
    public function create() {
        return view('events.create');
    }

}
