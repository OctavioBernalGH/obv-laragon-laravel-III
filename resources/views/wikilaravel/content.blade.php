@extends('layouts.mainlayout')

@section('title', 'Wiki Laravel')

@section('css')
li a:hover {
    color: white;
}
@endsection

@section('content')
<!-- Cuerpo de la página -->
<h1>Wiki Laravel</h1>
<hr>

<p class="text-justify">
    Para poder trabajar con Laravel cómodamente se deberán instalar varios programas, los mas importantes son: un editor de código, un webserver para poder trabajar en local, composer, un framework de diseño para dar estilos y sobre todo PHP. La configuración utilizada en este caso es la siguiente:
</p>
<br>
<ul>
    <li>Laragon:  <a href="https://laragon.org/">https://laragon.org/</a></li>
    <li>Composer: <a href="https://getcomposer.org/">https://getcomposer.org/</a></li>
    <li>Tailwind: <a href="https://tailwindcss.com/">https://tailwindcss.com/</a></li>
    <li>Blade como motor de plantillas</li>
</ul>
@endsection