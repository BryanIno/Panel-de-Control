@extends('layouts.layouts')
@section('titulo','Usuarios')
@section('Principal','Registro de usuarios')
@section('contenido')
    
    <a href="{{route('user.create')}}" class="mb-3 shadow-lg btn btn-primary">Nuevo Usuario</a>
    <a href="{{route('user.export')}}" class="mb-3 shadow-lg btn btn-secondary exportar"> Exportar Excel</a>
    <table class="table shadow-lg table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>
                    Nombre
                </th>
                <th>
                    Correo Electronico
                </th>
                <th>
                    Opciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>
                        <a href="{{route('user.show',$usuario)}}">{{$usuario->name}}</a>
                        
                    </td>
                    <td>
                        {{$usuario->email}}
                    </td>
                    <td>
                        <form action="{{route('user.destroy',$usuario)}}" class="eliminar-usuario" method="POST">
                            @csrf
                            @method('Delete')
                            <a href="{{route('user.edit',$usuario)}}" class="btn btn-success">Editar</a>
                            
                            <div class="btn btn-danger" >
                                <button type="submit"> Eliminar </button>
                            </div>
                            
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
        <!-- Para paginar vista -->
    <div class="d-flex justify-content-center">
        {{ $usuarios->links() }}
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('mensaje')=='OK')
        <script>
            Swal.fire(
                    '¡Borrado!',
                    'El usuario se ha eliminado.',
                    'success'
                    )
        </script>
    @endif

    <script>
        $('.eliminar-usuario').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Eliminar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
             })
        });

        $('.exportar').click(function(e){
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'La tabla usuarios se ha descargado correctamente',
                showConfirmButton: false,
                timer: 3000
            })
        });
        
    </script>  
@endsection