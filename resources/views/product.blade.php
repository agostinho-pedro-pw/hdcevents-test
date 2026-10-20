@extends('layouts.main')
@section('title','PRODUTO')
@section('content')
    <h1>Tela de Produto</h1> 
    @if($busca !='')
        <p>Exibindo resultados de busca para: {{ $busca }}</p>
    @endif
@endsection