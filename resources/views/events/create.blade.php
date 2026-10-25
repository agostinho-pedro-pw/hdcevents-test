@extends('layouts.main')<!--usado para extender/puxar o ficheiro-->
@section('title', 'Criar Eventos')
@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf<!--Diretiva para enviar dados do banco, para evitar ataques aos formulário-->
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image"  name="image" class="from-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do seu evento..">
        </div>
        <div class="form-group">
            <label for="date">Data do Evento :</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome do seu evento..">
        </div>
        <div class="form-group">
            <label for="title">O evento é privado:</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="O que ira acontecer no seu evento.."></textarea>
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
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>

<br><br><br>
@endsection
