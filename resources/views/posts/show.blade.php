@extends('layouts.plantilla')

@section('title', $post->titulo)

@section('content')
    <h1 class="text-6xl text-center mt-5">{{ $post->titulo }}</h1>

    <div class="mt-10">
        <p class="text-xs">Última modificación: {{ substr($post->updated_at, 0, 10) }}</p>
        <p class="text-lg text-left mt-3">{{ $post->descripcion }}</p>
        <a class="underline text-sky-900 hover:text-sky-700 font-semibold" href="{{ route('posts.index') }}">Volver a ver
            posts</a>
    </div>
@endsection
