<!DOCTYPE html>
<html lang="en">
<!-- Mediante los diferentes yeld proporcionamos escalabilidad para
poder añadir código des de las páginas hijas utilizando herencia -->

<head>
    <!-- Se define sección head -->
    @yield('head')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Se define una sección title -->
    @vite('resources/css/app.css')
    <!-- Se define título -->
    <title>@yield('title')</title>
    <!-- Estilos generales -->
    <style>
        /* Se define sección css */
        @yield('css')
        a {
            padding: 0.25rem;
            border-radius: 4px;
        }
        a:hover {
            background-color: green;
        }
        h1 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }
        hr {
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="font-sans text-lg select-none">

    <!-- Barra de navegación -->
    <div>
        <nav class="w-full fixed top-0 bg-teal-500 px-4 py-3 text-center z-50 text-stone-50 font-bold space-x-2 md:space-x-12">
            <a href="{{ url('indice') }}" class="hover:underline hover:underline-offset-8 hover:decoration-4 focus:ring">Inicio</a>
            <a href="{{ route('test') }}" class="hover:underline hover:underline-offset-8 hover:decoration-4 focus:ring">Contenido Formativo</a>
            <a href="{{ route('contacto') }}" class="hover:underline hover:underline-offset-8 hover:decoration-4 focus:ring">Contacto</a>
        </nav>
    </div>

    <!-- Contenido principal -->
    <div class="main-content w-100 text-center sm:text-justify md:w-90 pt-20 sm:p-20">
        <!-- Se define una sección body -->
        @yield('content')
    </div>


    <!-- Footer -->
    <nav class="w-full fixed bottom-0 bg-teal-500 py-3 text-stone-50 font-bold">
        <p class="text-center">Página de uso formativo - 2022</p>
    </nav>

</body>



</html>