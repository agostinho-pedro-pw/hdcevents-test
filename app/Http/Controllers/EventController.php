<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Obtendo os dados do model Event
use App\Models\Event;
use App\User;

class EventController extends Controller
{
    public function index()
    {
        //comando para a busca de eventos
        $search = request('search');

        if ($search) {
            $events = Event::where([
                ['title', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $events = Event::all();  //Metodo all() retorna todos os eventos do banco de dados
        }

        //Retorna todos os eventos do banco de dados
        //Comandos da ORM Eloquent

        return view('welcome', ['events' => $events, 'search' => $search]);
    }

    public function store(Request $request) //função usada para receber os dados e armaze-los na DB
    {
        $event = new Event;
        $event->title = $request->title;
        $event->date = $request->date;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;

        //imagem upload, para ao salvar termos imagens co nomes diferente
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now') . '.' . $extension);

            $request->image->move(public_path('img/events'), $imageName);
            $event->image = $imageName;
        }

        $user = auth()->user();

        if (!$user) {
            return redirect('/')->with('msg', 'Inicie sessão para criar um evento.');
        }

        $event->user_id = $user->id;
        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso! ');
    }

    public function create()
    {
        return view('events.create');
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }
    public function home()
{
    $user = auth()->user();

    $events = Event::where('user_id', $user->id)->get();

    return view('home', ['events' => $events]);
}

    public function destroy($id)
    {
        Event::findOrFail($id)->delete();

        return redirect('/home')->with('msg', 'Evento excluído com successo!');
    }
    public function edit($id){
        $edit= Event::findOrFail($id);

        return view('events.edit', ['event'=> $edit]);
    }
    public function update (Request $request, $id){
    $dados = $request->only([
    'title', 'date', 'city', 'private', 'description', 'items'
    
    ]);
    return redirect('/home')->with('msg', 'Evento Editado com successo!');
    $data = $request->all();
    //imagem upload, para ao salvar termos imagens co nomes diferente
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now') . '.' . $extension);

            $request->image->move(public_path('img/events'), $imageName);
            $date['image']= $imageName;
        }
    Event::findOrFail($id)->update($dados);
    }
    
}