<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Node\Expr\FuncCall;

class UsuarioFormulario extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nombre' => 'required|regex:/^[\p{L}\s]+$/u|max:50|min:3', 
            'correo' => 'required|max:60|email|unique:users,email,',
            'contraseña' => 'required|min:8|max:20',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required'=>'Ingresar el :attribute es obligatorio',
            'nombre.regex'=>'Ingresar solo alfabéticos (letras) y espacios en el campo :attribute',
            'nombre.max'=>'El nombre debe contener un máximo de 30 caracteres',
            'nombre.min'=>'El nombre debe contener un minimo de 3 caracteres',
            'correo.required'=>'Ingresar el :attribute es obligatorio',
            'correo.max'=>'El correo electronico no puede exceder 60 caracteres',
            'correo.unique'=>'El correo ingresado ya se encuentra registrado',
            'contraseña.required'=>'Ingresar la :attribute es obligatorio',
            'contraseña.min'=>'La contraseña debe contener al menos 8 caracteres',
            'contraseña.max'=>'La contraseña debe contener un máximo de 20 caracteres'
            
        ];
    }
}
