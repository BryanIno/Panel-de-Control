<table >
    <thead>
        <tr>
            <th>
                Id
            </th>
            <th>
                Nombre
            </th>
            <th>
                Correo Electronico
            </th>
        </tr>
    </thead>
   
    <tbody> 
        @foreach ($usuarios as $usuario)
            <tr>
                <th>
                    {{$usuario->id}}
                </th>
                <td>
                    {{$usuario->name}}
                </td>
                <td>
                    {{$usuario->email}}
                </td>
            </tr>
        @endforeach
    </tbody>
   
   
</table>