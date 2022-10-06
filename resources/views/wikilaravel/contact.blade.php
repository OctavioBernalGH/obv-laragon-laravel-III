<!-- Herencia de los estils y componentes de la plantilla principal -->
@extends('layouts.mainlayout')

<!-- Se substituye el título de la plantilla -->
@section('title', 'Contacto')

@section('css')
input, textarea {
    width: 300px;
    margin: 0.6rem;
    border: 1px solid black;
}
@endsection

<!-- Contenido principal -->
@section('content')

<h1>Formulario de contacto</h1>
<hr>

<form action="{{ route('formulario.contactar') }}" method="POST" class="bg-teal-100 text-center pt-5 pb-5">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    <div>
        <input type="text" name="nombre" id="" placeholder="Nombre" required class="hover:ring placeholder:italic">
    </div>
    <div>
        <input type="text" name="apellidos" id="" placeholder="Apellidos" required class="hover:ring placeholder:italic">
    </div>
    <div>
        <input type="email" name="email" id="" placeholder="example@example.com" required class="invalid:text-pink-500 hover:ring placeholder:italic">
    </div>
    <div>
        <textarea name="comentario" id="" cols="30" rows="10" placeholder="Introducir mensaje" required class="hover:ring placeholder:italic"></textarea>
    </div>
    <div>
        <button type="submit" class="bg-teal-700 py-2 px-4 rounded text-zinc-50 font-bold hover:bg-teal-400 focus:ring">Enviar</button>
    </div>
</form>

@endsection