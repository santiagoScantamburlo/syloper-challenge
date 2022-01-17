@extends('layouts.plantilla')

@section('title', 'Create')

@section('content')
    <h1 class="text-center text-5xl font-semibold my-10">Página para crear posts</h1>

    <form action="{{ route('posts.store') }}" method="POST">

        @csrf

        <div class="grid grid-cols-1">
            <div class="my-3 grid grid-cols-3">
                <label class="col-span-3 text-2xl" for="titulo">Titulo</label>
                <input class="text-xl bg-gray-200 rounded col-span-1 p-1" type="text" name="titulo" id="titulo"
                    value="{{ old('titulo') }}">
                @error('titulo')
                    <p class="text-sm col-span-3 text-red-500">*{{ $message }}</p>
                @enderror
            </div>
            <div class="align-content-center mt-3 w-500 grid grid-cols-3 grid-rows-6 my-3">
                <label class="col-span-1 row-span-1 text-2xl" for="descripcion">Contenido</label>
                <textarea type="text" class="text-xl col-span-3 row-span-5 bg-gray-200 resize-none p-2 rounded"
                    name="descripcion" id="descripcion">{{ old('descripcion') }}</textarea>
                @error('descripcion')
                    <p class="text-sm text-red-500">*{{ $message }}</p>
                @enderror
            </div>
            <div class="grid grid-cols-3 my-3">
                <div class="col-start-2 grid grid-rows-2">
                    <button
                        class="w-full h-16 bg-sky-900 hover:bg-sky-700 text-xl font-semibold text-white rounded text-center border-2 border-gray-900"
                        type="submit">Cargar
                        post</button>
                </div>
            </div>
        </div>
    </form>
@endsection
