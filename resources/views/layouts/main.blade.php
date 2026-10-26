<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
<!--Fonte do Google-->
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
<!--CSS Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<!--CSS da aplicação-->

<link rel="stylesheet" href="/CSS/style.css">
<script src="/JS/scripts.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </head>
    <body >
<!--Diretiva pra a reutilizaçao de partes do codigo-->
<header>

<!--Aprender mais sobre o bootstrap-->
<!--Trabalho com o Bootstrap-->
    <nav class="navbar navbar-expand-lg navbar-light">

        <!--Botão do menu para ecrãs pequenos-->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">

            <a href="/" class="navbar-brand">
                <img src="/img/9gag.png" alt="logo_hdcevents">
            </a>
    
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a href="/" class="nav-link">Eventos</a>
                </li>
                <li class="nav-item">
                    <a href="/events/create" class="nav-link">Criar Eventos</a>
                </li>
                @auth<!--Directiva para qdo já estou logado no site-->
                <li class="nav-item">
                    <a href="/home" class="nav-link"><ion-icon name="calendar-outline"></ion-icon> Meus Eventos</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link" onclick="event.preventDefault();
                        this.closest('form').submit();">
                                <ion-icon name="log-out-outline"></ion-icon> Sair
                        </a>
                    </form>
                </li>
                @endauth
                @guest<!--Directiva para qdo não já estou logado na«o site-->
                <li class="nav-item">
                    <a href="/login" class="nav-link">Entrar</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Registrar</a>
                </li>
                @endguest
            </ul>

        </div>

    </nav>

</header>
    <main class="container-fluid">
        <!--Enviando a mensagem nao usuário-->
        <div class="row">
            @if(session('msg'))
            <p class="msg">{{ session('msg')}}</p>
            @endif
            @yield('content')
        </div>
    </main>

        <br><br><br><br>
    <footer>
        <p>HDC Events &copy; 2026</p>
    </footer>
    <!--JS do Bootstrap (necessário para o menu em ecrãs pequenos)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>