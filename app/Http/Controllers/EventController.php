<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Obtendo os dados do model Event
use App\Models\Event;

class EventController extends Controller
{
    public function index() {
        //comando para a busca de eventos
        $search = request('search');
        if($search){

            $events = Event::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        }else{
            $events = Event::all();  //Metodo all() retorna todos os eventos do banco de dados
        }
        //Retorna todos os eventos do banco de dados
        //Comandos da ORM Eloquent 

        return view('welcome', ['events' =>$events,'search'=>$search]);
        
    }
    public function store(Request $request){//função usada para receber os dados e armaze-los na  DB
        
    $event = New Event;
    $event->title = $request->title;
    $event->date = $request->date;
    $event->city= $request-> city;
    $event->private = $request->private;
    $event->description = $request->description;
    $event->items = $request->items;
    


    //imagem upload, para ao salvar termos imagens co nomes diferente
    if($request->hasFile('image') && $request->file('image')->isValid()){
        $requestImage = $request->image;
        $extension= $requestImage->extension();

        $imageName= md5($requestImage->getClientOriginalName(). strtotime('now').".".$extension);
        
        $request->image->move(public_path('img/events'), $imageName);
        $event->image=$imageName;
    }

    $event->save();
    return redirect('/')->with('msg','Evento criado com sucesso! ');

    }

    public function create() {
        return view('events.create');
    }
    public function show($id){
        $event= Event::findOrFail($id);
        return view('events.show', ['event'=>$event]);
    }

}
