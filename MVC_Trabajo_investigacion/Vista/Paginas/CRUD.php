<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crud</title>
	  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Our Custom CSS -->


  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>



</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#AgregarRegistro">Agregar</a></button>
    </li>
   
  </ul>

</nav>


<?php 
require_once"../../Controlador/formulario.controlador.php";
require_once"../../Modelo/formulario.modelo.php";

$registro = ControladorFormularios::ctrAreas_trabajo();
//$registro = new ControladorFormularios();
//$registro -> ctrAreas_trabajo();
if($registro == "ok"){
  
  echo '<script>

  if ( window.history.replaceState ) {

    window.history.replaceState( null, null, window.location.href );

  }

</script>';

echo '<div class="alert alert-success">El usuario ha sido registrado</div>';

}

?>



<!-- modal para agregar datos -->
	<div class="modal fade" id="AgregarRegistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="p-5 bg-light" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          <h4 class="modal-title" id="myModalLabel">Area de trabajo</h4>
        </div>
        <div class="modal-body">
        	
          <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Agregar Registro" name="RegistroNombre">
          </div>
           <div class="form-group">
            <label for="formGroupExampleInput">Apellido</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Agregar Registro" name="RegistroApellido">
          </div>
           <div class="form-group">
            <label for="formGroupExampleInput">Correo</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Agregar Registro" name="RegistroCorreo">
          </div>


        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary">Agregar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </form>
    </div>
  </div>
</div>

	<!-- MODEL DE ACTUALIZAR DATOS -->

<?php 

$actualizar = new  ControladorFormularios();
$actualizar -> ctrActualizarRegistro();
//echo '<pre>';print_r($actualizar); echo '</pre>';


?>


<div class="modal fade" id="ModificarArea" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="p-5 bg-light" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          <h4 class="modal-title" id="myModalLabel">Actualizar</h4>
        </div>
        <div class="modal-body">

        

        <input type="text" name="id_usuario" id="id_usuario" class="d-none">
          <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" id="Nombre" placeholder="Ingrese actualizacion" name="NombreActualizar">
          </div>
          
          <div class="form-group">
            <label for="formGroupExampleInput">Apellido</label>
            <input type="text" class="form-control" id="Apellido" placeholder="Ingrese actualizacion" name="ApellidoActualizar">
          </div>
           <div class="form-group">
            <label for="formGroupExampleInput">Correo</label>
            <input type="text" class="form-control" id="Correo" placeholder="Ingrese actualizacion" name="CorreoActualizar">
          </div>

          
          


        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary">Actualizar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </form>
    </div>
  </div>
</div>

<!-- MODEL DE ELIMINAR DATOS -->

<div class="modal fade" id="EliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form class="p-5 bg-light" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

          <h4 class="modal-title" id="myModalLabel">Eliminar</h4>
        </div>
        <div class="modal-body">

        

        <input type="text" name="id_Eliminar" id="id_usuario2" class="d-none">
          <div class="form-group">
            <label for="formGroupExampleInput">Nombre</label>
            <input type="text" class="form-control" id="Nombre2" placeholder="Ingrese actualizacion" name="NombreEliminar">
          </div>
          
          <div class="form-group">
            <label for="formGroupExampleInput">Apellido</label>
            <input type="text" class="form-control" id="Apellido2" placeholder="Ingrese actualizacion" name="ApellidoEliminar">
          </div>
           <div class="form-group">
            <label for="formGroupExampleInput">Correo</label>
            <input type="text" class="form-control" id="Correo2" placeholder="Ingrese actualizacion" name="CorreoEliminar">
          </div>

          
          


        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary">Eliminar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </form>
    </div>
  </div>
</div>



<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Correo</th>
      <th colspan="2">Acciones</th>

    </tr>
  </thead>




  <?php 
   $AreasTrabajo = ControladorFormularios::ctrSeleccionarRegistros();
   
      //echo '<pre>';print_r($AreasTrabajo); echo '</pre>';

    ?>


    <?php 
      $eliminar = new ControladorFormularios();
      $eliminar -> ctrEliminarArea();

    ?>


	<?php foreach ($AreasTrabajo as $key => $value): ?>
  

  <tbody>
    <tr>
      <td scope="row"><?php echo $value["Nombre"];?></td>
      <td scope="row"><?php echo $value["Apellido"];?></td>
      <td scope="row"><?php echo $value["Correo"];?></td>
             <div class="btn-group">
          <td colspan="4"><button type="submit" class="btn btn-warning"
           onclick="abrirActualizar('<?php echo $value["id_usuario"];?>', 
           '<?php echo $value["Nombre"];?>','<?php echo $value["Apellido"];?>','<?php echo $value["Correo"];?>')">
           <i class="fas fa-pencil-alt"></i>Editar</a></button></td>

           <td colspan="4"><button type="submit" class="btn btn-danger" 
           onclick="abrirEliminar('<?php echo $value["id_usuario"];?>',
           '<?php echo $value["Nombre"];?>','<?php echo $value["Apellido"];?>','<?php echo $value["Correo"];?>')">
           <i class="fas fa-trash-alt"></i>Eliminar</a></button></td>
        
      </div>
    </tr>
</form>

<?php endforeach ?>
  </tbody>


</table>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>




<script type="text/javascript">
  $(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
      $('#sidebar').toggleClass('active');
    });
  });



  function abrirActualizar(id, Nombre, Apellido, Correo) {
    $('#id_usuario').val(id);
    $('#Nombre').val(Nombre);
     $('#Apellido').val(Apellido);
      $('#Correo').val(Correo);
    $('#ModificarArea').modal('show');
  }
    function abrirEliminar(id, Nombre, Apellido, Correo) {
    $('#id_usuario2').val(id);
    $('#Nombre2').val(Nombre);
     $('#Apellido2').val(Apellido);
      $('#Correo2').val(Correo);
    $('#EliminarUsuario').modal('show');
  }


</script>


</body>
</html>