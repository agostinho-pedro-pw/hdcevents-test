<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1Çrem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body > 

        <h1>Algum titulo: </h1>

        @if ($nome=="Agostinho")
        <p>Nome: {{$nome}}</p>
        @endif

        @if ($profissao=="Programador")
        <p>Eng. {{$nome}}, o nosso {{$profissao}} </p>
        @endif

<!--Explorando o Blade-->
<!--Estruturas de repetição -->
        @for($i=0; $i < count($array);$i++)
            <p>{{$array[$i]}}-{{$i}}</p>
            @if ($i==2)
            <p>Sambaleta</p>
            @endif
        @endfor

        @php
        $nome="Agostinho";
        echo $nome
        @endphp
<!--Comentário no Blade:-->
        {{-- Esté o comentário do Blade--}}
<!--Coméntario nada haver-->
    @foreach($nomes as $nome)
        <!--<p>{{ $loop->index}}</p>-->
        <p>{{ $nome}}</p><br> <p>{{ $loop->index}}</p>
    @endforeach
        <h1><a href="\contacto">contactos</a></h1>
        <h1><a href="\produto">Produtos</a></h1>
    </body>
</html>

