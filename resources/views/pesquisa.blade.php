@extends ('layouts.main')
@section('title','Pesquisa')
@section('content')

    <h1>Exibindo resultados de busca para:</h1>
    <h2>{{ $pesquisa}}</h2>

    @if($pesquisa=='')
        <p>Não foi encontrado nenhum produto!! 
            <a href="/product">Ver todos</a></p>
    @endif

@endsection