<?php 

class ControladorFormularios {

	static public function ctrAreas_trabajo(){

		if(isset($_POST["RegistroNombre"])){

			
			$tabla = "usuarios";
			$datos = array("Nombre" => $_POST["RegistroNombre"],"Apellido" => $_POST["RegistroApellido"],
				"Correo" => $_POST["RegistroCorreo"]);

			
			$respuesta = modelosFormularios::mdlAreas_plaza($tabla, $datos);


			return $respuesta;

		}

	}

 #Consultar registros

	static public function ctrSeleccionarRegistros(){

		$tabla = "usuarios";
		$respuesta = modelosFormularios::mdlSeleccionarRegistros($tabla, null,null);

		return $respuesta;
	}




 #Actualizar registros
	public function ctrActualizarRegistro() {
		//, isset($_POST["ApellidoActualizar"],isset($_POST["CorreoActualizar"]))

		if (isset($_POST["NombreActualizar"])) {

			if (isset($_POST["ApellidoActualizar"])) {

				if (isset($_POST["CorreoActualizar"])) {



					if (isset($_POST["id_usuario"])) {



						$tabla = "usuarios";
						$datos = array("Nombre" => $_POST["NombreActualizar"], "Apellido" => $_POST["ApellidoActualizar"], "Correo" => $_POST["CorreoActualizar"],"id_usuario" => $_POST["id_usuario"]);

						$respuesta = modelosFormularios::mdlActualizarArea($tabla, $datos);
						echo "test 5";


						if($respuesta == "ok"){
							echo "ok";

							echo '<script>

							if ( window.history.replaceState ) {

								window.history.replaceState( null, null, window.location.href );

							}

							window.location = "";

							</script>';

							echo '<div class="alert alert-success">El area ha sido actualizada</div>';
						}
					}
				}

			}

		}
	}


 #Eliminar registros

	public function ctrEliminarArea() {

		if(isset($_POST["id_Eliminar"])) {

			$tabla = "usuarios";
			$valor = array("id_usuario" => $_POST["id_Eliminar"]);
			//echo '<pre>';print_r($valor); echo '</pre>';
			$respuesta = modelosFormularios::mdlEliminarArea($tabla, $valor);


 return $respuesta;

			if($respuesta == "ok"){


				echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}
				window.location = "Vista/Paginas/CRUD.php";
				</script>';


			}

		}

	}


	#INGRESO (LOGIN)

	public function ctrIngreso(){

		if(isset($_POST["Loginusername"])){

			$tabla = "user";
			$item = "name";
			$valor = $_POST["Loginusername"];

			$respuesta = modelosFormularios::mdlSeleccionarRegistros($tabla, $item, $valor); 

			if (empty($_POST["Loginusername"] && $respuesta ["password"])) {
				echo '<div class="alert alert-success">Campos vacíos.<br>Por favor llenar los campos.</div>';
			}
			elseif($respuesta ["name"] == $_POST["Loginusername"] && $respuesta ["password"] == $_POST["Loginpassword"] ) {

				echo '<script>

				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}
				window.location = "Vista/Paginas/CRUD.php";
				</script>';

			}
			else {
				echo '<script>

				if ( window.history.replaceState ) {
					window.history.replaceState( null, null, window.location.href );
				}
				</script>';

				echo '<div class="alert alert-success">El usuario no esta registrado</div>';

			}
		}
	}
}
