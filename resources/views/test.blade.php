@extends('layouts.main')<!--usado para extender/puxar o ficheiro-->
@section('title', 'Testando')
@section('content')
@if ($id!=null)
    <p>Exibindo um produto com o id: {{ $id  }} </p>
@endif
@endsection
