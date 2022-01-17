@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <div class="container mt-5 text-lg">
        <h1 class="text-5xl mb-10 font-semibold text-center">Bienvenido a la página principal del challenge</h1>
        <p class="mt-5 mb-3">En este challenge hice una página de Posts utilizando Laravel 8. Las funcionalidades
            implementadas son:</p>
        <ul class="list-disc pl-10">
            <li>Creación de posts</li>
            <li>Búsqueda de posts</li>
            <li>Muestra de todos los posts en la BD</li>
            <li>Formulario de contacto</li>
            <li>Migración de registros a la BD</li>
            <li>Seeding de BD</li>
            <li>Implementación de rutas</li>
            <li>Implementación de controladores para cada sección</li>
            <li>Validación de formularios</li>
        </ul>
        <p class="mt-5 mb-3">Para el aprendizaje e implementación se utilizó la documentación de <a
                class="underline text-green-900 font-semibold hover:text-green-500" target="_blank"
                href="https://laravel.com/">Laravel</a>, y
            también me guié para algunas implementaciones y mejoras con un curso de YouTube: <a
                class="underline text-green-900 font-semibold hover:text-green-500" target="_blank"
                href="https://www.youtube.com/playlist?list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF">Curso Laravel 8</a>
        </p>
        <p class="mt-5 mb-3">Para el frontend quise incursionar en un framework CSS nuevo, por eso elegí <a
                class="underline text-green-900 font-semibold hover:text-green-500" target="_blank"
                href="https://tailwindcss.com/">TailwindCSS</a></p>
        <p class="mt-5 mb-3">Por último, las herramientas utilizadas para desarrollar y testear el funcionamiento de la aplicación fueron:</p>
        <ul class="list-disc pl-10">
            <li>Visual Studio Code</li>
            <li>PHP MyAdmin</li>
            <li>XAMPP</li>
        </ul>
    </div>
@endsection
