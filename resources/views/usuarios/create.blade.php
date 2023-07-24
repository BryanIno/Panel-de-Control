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
            <input class="shadow form-control" type="text" name="nombre" id="nombre" placeholder="Juan Perez" value="{{ old('nombre') }}">
            @error('nombre')
                <small>*{{$message}}</small>
            @enderror
        </label>
        
        <br>
        
        <label class="form-label " for="correo">
            Correo Electronico
            <input class="shadow form-control" type="email" name="correo" id="correo" placeholder="nombre@dominio.com" value="{{ old('correo') }}">
            @error('correo')
                <small>*{{$message}}</small>
            @enderror
        </label>
        <br>

        <label class="form-label" for="contraseña">
            Contraseña
            <input class="shadow form-control" type="password" name="contraseña" id="contraseña" placeholder="*************" value="{{ old('contraseña')}}">
            @error('contraseña')
                <small>*{{$message}}</small>
            @enderror
        </label>
        <br>

        <label class="form-label">
            <a href="#" class="shadow-lg btn btn-success">
                <button class="" type="submit">
                    Guardar
                </button>
            </a>
            
         </label>
        <a href="{{route('user.index')}}" class="shadow-lg btn btn-secondary">Cancelar</a>
    </form>
    
 
@endsection
