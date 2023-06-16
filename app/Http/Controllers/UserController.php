<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use App\Http\Requests\UsuarioFormulario;
use App\Models\User;
use App\Exports\UsersExport;
use App\Http\Requests\UsuarioUpdate;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios=User::paginate(5);
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UsuarioFormulario $request)//llamamos al request usuarioformulario para validar ahí
    {
        $usuario=new User();
        $usuario->name=$request->nombre;
        $usuario->email=$request->correo;
        $usuario->password=Hash::make($request->contraseña);
        $usuario->save();
        return redirect()->route('user.index')->with('crear','cliente actualizado');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('usuarios.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {   
        return view('usuarios.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UsuarioUpdate $request, User $user)
    {
        $user->name=$request->nombre;
        $user->email=$request->correo;
        $user->password=Hash::make($request->contraseña);
        $user->save();
        return redirect()->route('user.index')->with('guardar','cliente guardado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('mensaje','OK');
    }

    public function export(){
        return Excel::download(new UserExport, 'usuarios.xlsx');
    }

    public function grafico(){
        $chart_options = [
            'chart_title' => 'Usuarios creados por Mes',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'month', //Por mes
            'chart_type' => 'bar',
            'chart_color' => '254, 95, 61'
            
        ];
        $chart = new LaravelChart($chart_options);
        
        $chart_options = [
            'chart_title' => 'Usuarios creados por dia',
            'report_type' => 'group_by_date',
            'model' => 'App\Models\User',
            'group_by_field' => 'created_at',
            'group_by_period' => 'day', //Por dias
            'chart_type' => 'bar',
            'chart_color' => '32, 167, 234',
        ];
        $chart2= new LaravelChart($chart_options);

        return view('usuarios.grafico', compact('chart','chart2'));
    }
}
