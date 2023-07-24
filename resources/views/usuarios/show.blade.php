@extends('layouts.layouts')
@section('titulo','Ver Usuario')

@section('contenido')
    <h1 class="text-center">
        Bienvenido {{$user->name}}
    </h1>
    <div class="text-center">
        <p class="h6">
            Nombre de Usuario: {{$user->name}}
        </p>
        <p class="h6">
            Correo Electronico: {{$user->email}}
        </p>
        
        <a href="{{route('user.edit',$user)}}" class="btn btn-primary">Editar</a>
        <a href="{{route('user.index')}}" class="btn btn-secondary">Regresar a la pagina anterior</a>
    </div>
    
    
@endsection