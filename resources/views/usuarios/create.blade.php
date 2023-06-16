@extends('layouts.layouts')
@section('titulo','Crear Usuario')

@section('contenido')
    <h1 class="text-center">
        Registrar
    </h1>
   
    <form action="{{route('user.store')}}" method="post" class="text-center crear">
        @csrf
        <label class="form-label" for="nombre">
            Nombre de Usuario
            <input class="form-control shadow" type="text" name="nombre" id="nombre" placeholder="Juan Perez" value="{{ old('nombre') }}">
            @error('nombre')
                <small>*{{$message}}</small>
            @enderror
        </label>
        
        <br>
        
        <label class="form-label " for="correo">
            Correo Electronico
            <input class="form-control shadow" type="email" name="correo" id="correo" placeholder="nombre@dominio.com" value="{{ old('correo') }}">
            @error('correo')
                <small>*{{$message}}</small>
            @enderror
        </label>
        <br>

        <label class="form-label" for="contraseña">
            Contraseña
            <input class="form-control shadow" type="password" name="contraseña" id="contraseña" placeholder="*************" value="{{ old('contraseña')}}">
            @error('contraseña')
                <small>*{{$message}}</small>
            @enderror
        </label>
        <br>

        <label class="form-label">
            <button class="btn btn-success shadow-lg" type="submit">
                Guardar
            </button>
         </label>
        <a href="{{route('user.index')}}" class="btn btn-secondary shadow-lg">Cancelar</a>
    </form>
    
 
@endsection
