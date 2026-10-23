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

        <link rel="stylesheet" href="/CSS/style.css" id="">
        <script src="/JS/scripts.js"></script>

    </head>
    <body >
<!--Diretiva pra a reutilizaçao de partes do codigo-->
<header>

<!--Aprender mais sobre o bootstrap-->
<!--Trabalho com o Bootstrap-->
    <nav class="navbar navbar-expand-lg navbar-light">
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
                <li class="nav-item">
                    <a href="/" class="nav-link">Entrar</a>
                </li>

            </ul>

        </div>

    </nav>

</header>
        @yield('content')

    <footer>
        <p>HDC Events &copy; 2026</p>
    </footer>
    <script nomodule src="https://unpkg.com/ionicons@8.0.13/dist/ionicons/ionicons.js"></script>
    </body>
</html>

