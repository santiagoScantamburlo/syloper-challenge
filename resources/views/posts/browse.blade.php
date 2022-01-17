@extends('layouts.plantilla')

@section('title', 'Busqueda')

@section('content')

    @if (count($posts) > 0)
        <h1 class="my-20 text-5xl text-center">Posts que coinciden con la búsqueda</h1>
        <div class="grid grid-cols-5 gap-5">
            @foreach ($posts as $objPost)
                <div class="mx-3 my-3 border-sky-500 border-2 max-h-600 objPost-container">
                    <img src="https://th.bing.com/th/id/OIP.ASYaeXJ3xP-zdWFU4N_3ZwAAAA?pid=ImgDet&w=320&h=320&rs=1"
                        class="w-80 h-80 px-1 py-1">
                    <h1 class="text-xl px-1 font-bold text-center">{{ $objPost->titulo }}</h1>
                    <p class="px-1 description">{{ $objPost->descripcion }}</p>
                    <div class="grid grid-cols-2">
                        <div class="col-start-2">
                            <a target="_blank"
                                class="relative inset-y-0 right-0 border-2 border-black my-2 px-1 rounded-full bg-sky-500"
                                href="{{ route('posts.show', $objPost->slug) }}"><button>Read More...</button></a>
                        </div>
                    </div>
                    <p class="px-1 text-sm inline-block align-text-bottom">Fecha de creación:
                        {{ substr($objPost->created_at, 0, 10) }}</p>
                </div>
            @endforeach
        </div>
    @else
        <h1 class="my-20 text-5xl text-center">No hay posts que coinciden con la búsqueda</h1>
    @endif
@endsection
