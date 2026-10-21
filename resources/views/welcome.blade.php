@extends('layouts.main')<!--usado para extender/puxar o ficheiro-->
@section('title', 'HDC Events')
@section('content')

<script src="/JS/scripts.js"></script>
<img class ="event-image" id="edit" src="/img/events.jpg" alt="">
<ul class="test">
        <li class="a agora">
                <a href="#" class="leg"></a>
        </li>
</ul>
<h1>Algum titulo: </h1>
<!--

        Ultilizando de condição
        @if ($nome=="Agostinho")
        <p>Nome: {{$nome}}</p>
        @endif

        @if ($profissao=="Programador")
        <p>Eng. {{$nome}}, o nosso {{$profissao}} </p>
        @endif-->

<!--Explorando o Blade-->
<!--Estruturas de repetição -->
<!--
        @for($i=0; $i < count($array);$i++)
        <p>{{$array[$i]}}-{{$i}}</p>
        @if ($i==2)
        <p>Sambaleta</p>
        @endif
        @endfor
        @php 
        $nome="Agostinho";
        echo $nome
        @endphp-->
<!--Comentário no Blade:-->
{{-- Esté o comentário do Blade--}}
<!--Coméntario nada haver-->
<!--@foreach($nomes as $nome)-->
<!--<p>{{ $loop->index}}</p>-->
<!--<p>{{ $nome}}</p>
<p>{{ $loop->index}}</p>
@endforeach-->
<h1><a href="\contacto">contactos</a></h1>
<h1><a href="\produto">Produtos</a></h1>
@endsection 