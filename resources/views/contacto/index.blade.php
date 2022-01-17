@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    <h1 class="text-5xl text-center my-10 font-semibold">Datos de contacto</h1>

    <form action="{{ route('contacto.store') }}" method="POST">
        @csrf
        <div class="grid grid-cols-4 w-full">
            <div class="col-span-2 grid grid-cols-2 mx-3">
                <label for="nombre" class="col-span-1 col-start-2 text-2xl">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="col-span-1 col-start-2 text-xl bg-gray-200 rounded p-2"
                    value="{{ old('nombre') }}">
                @error('nombre')
                    <p class="text-sm col-span-2 col-start-2 text-red-500">*{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2 grid grid-cols-2 mx-3">
                <label for="apellido" class="col-span-2 text-2xl">Apellido</label>
                <input type="text" name="apellido" id="apellido" class="col-span-1 text-xl bg-gray-200 rounded p-2"
                    value="{{ old('apellido') }}">
                @error('apellido')
                    <p class="text-sm col-span-2 text-red-500">*{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2 grid grid-cols-2 mt-3 mx-3">
                <label for="edad" class="col-span-1 col-start-2 text-2xl">Edad</label>
                <input type="text" name="edad" id="edad" class="col-span-1 col-start-2 text-xl bg-gray-200 rounded p-2"
                    value="{{ old('edad') }}">
                @error('edad')
                    <p class="text-sm col-span-2 col-start-2 text-red-500">*{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2 grid grid-cols-2 mx-3">
                <label for="email" class="col-span-2 text-2xl mt-3">Email</label>
                <input type="text" name="email" id="email" class="col-span-1 text-xl bg-gray-200 rounded p-2"
                    value="{{ old('email') }}">
                @error('email')
                    <p class="text-sm col-span-2 text-red-500">*{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2 col-start-2 grid grid-cols-2 grid-rows-4 mt-3">
                <label for="mensaje" class="text-2xl row-span-1">Mensaje</label>
                <textarea name="mensaje" id="mensaje"
                    class="col-span-2 p-2 bg-gray-200 text-xl resize-none row-span-3 rounded">{{ old('mensaje') }}</textarea>
                @error('mensaje')
                    <p class="text-sm col-span-2 text-red-500">*{{ $message }}</p>
                @enderror
            </div>
            <div class="col-span-2 col-start-2 mt-10 grid grid-cols-4">
                <button
                    class="w-full h-16 bg-sky-900 hover:bg-sky-700 text-xl font-semibold text-white rounded text-center border-2 border-gray-900 col-span-2 col-start-2"
                    type="submit">Enviar</button>
            </div>
        </div>
    </form>

    <!-- En caso de que ya se haya enviado el formulario, muestra en pantalla la alerta de "Mensaje enviado" -->
    @if (session('message'))
        <script>
            alert("{{ session('message') }}");
        </script>
    @endif
@endsection
