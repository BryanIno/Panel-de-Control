
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message=Session::get('crear'))
     <script>
       Swal.fire({
         position: 'center',
         icon: 'success',
         title: '¡Excelente!',
         text: "El usuario se ha creado correctamente",
         showConfirmButton: false,
         timer: 3000
         })  
     </script>
@endif
@if ($message=Session::get('guardar'))
     <script>
       Swal.fire({
         position: 'center',
         icon: 'success',
         title: '¡Excelente!',
         text: "El usuario se ha actualizado correctamente",
         showConfirmButton: false,
         timer: 3000
         })  
     </script>
@endif