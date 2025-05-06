<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .layout {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            height: 100vh;
        }

        .layout__main {
            padding: 2rem;
            flex: 1;
        }
    </style>

    <!--
    La directiva @yield('title') define una sección de contenido llamada 'title'.
    Esta sección puede ser reemplazada o sobrescrita en las vistas que extienden esta plantilla base.
    
    Ejemplo:
    En una vista específica, puedes definir el título con:
    @section('title', 'Mi página de inicio')
    
    El valor definido en 'title' será insertado en la etiqueta <title> de esa vista.
    -->
    <title>@yield('title')</title>
</head>

<body class="layout">
    @include('components.header') <!-- Incluir el header -->

    <main class="layout__main">
        @yield('content') <!-- Contenido dinámico -->
    </main>

    @include('components.footer') <!-- Incluir el footer -->
</body>

</html>