<!-- Herencia de los estils y componentes de la plantilla principal -->
@extends('layouts.mainlayout')

<!-- Se substituye el título de la plantilla -->
@section('title', 'Índice Wiki Laravel')

@section('css')

@endsection

<!-- Contenido principal -->
@section('content')

<!-- Cuerpo de la página -->
<h1 class="text-center sm:text-justify ">Índice de aprendizaje</h1>
<hr>
<ul class="list-decimal ml-10 mt-5">
    <li>Instalando requerimientos necesarios para trabajar en local.</li>
    <li>Configurando entorno de desarrollo.</li>
    <li>Rutas, uso y gestión</li>
    <li>Controladores, creación y desarrollo.</li>
    <li>Uso de gestor de plantillas Blade</li>
    <li>Implementación de estilos con Tailwind</li>
</ul>

@endsection
