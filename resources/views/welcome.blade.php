@extends('layouts.main')<!--usado para extender/puxar o ficheiro-->
@section('title', 'HDC Events')
@section('content')
<!--Usado para precorrer todos os eventos-->
<!--Aprender depois Bootstrap-->
<div id="search-container" class="col-md-12">
        <form action="/" method="GET"> 
                <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
</div>
<div id="events-container" class="col-md-12">
        @if($search)
                <h2>Buscando por: {{ $search }}</h2>
        @else        
                <h2>Próximos Eventos</h2>
                <p class="subtitle">Veja os eventos dos próximos dias</p><br><br><br>
        @endif
        <div id="cards-container" class="row">
        @forelse($events as $event)
                <div class="card">
                        <img src="/img/events/{{ $event->image}}" >
                        <div class="card-body">
                                <p class="card-date">{{date('d/m/Y', strtotime($event->date))}}</p>
                                <h5 class="card-title">{{$event->title}}</h5>
                                <p class="card-participants">X participantes</p>
                                <a href="/events/{{$event->id}}" class="btn btn-primary">Saber mais</a>
                        </div>
                </div>
        @empty
                @if($search)
                                <p>Não há nenhum evento com o nome "{{ $search }}". voltar a <a href="/">voltar a home</a></p>
                @else
                        <p>Ainda não há eventos.</p>
                @endif
        @endforelse     
        </div>  
</div>
@endsection 