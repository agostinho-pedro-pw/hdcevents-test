@extends('layouts.main')<!--usado para extender/puxar o ficheiro-->
@section('title', 'Editando: '.$event->title)
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>
    <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
        @csrf<!--Diretiva para enviar dados do banco, para evitar ataques aos formulário-->
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image"  name="image" class="from-control-file">
            <img src="/img/events/{{ $event->image}}" alt="{{ $event->title}}" class="img-preview">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do seu evento.." value="{{ $event->title}}">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento :</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d')}}">
        </div>
        <div class="form-group">
            <label for="">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento " value="{{ $event->city }}">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option><!--operador termnario <con> ? "":""-->
                <option value="1" {{ $event->private == 1 ? 'selected' : '' }}>Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que ira acontecer no seu evento..">{{ $event->description}}</textarea>
        </div>
        <label for="title">Adicione itens de infraestrutura:</label>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="cadeiras"> Cadeiras
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Palco"> Palco
        </div>
        <div class="form-group">
            <input type="checkbox" name="items[]" value="Coffe break"> Coffe break
        </div>
        <input type="submit" class="btn btn-primary" value="Editar Eventos">
    </form>
</div>

<br><br><br>
@endsection
