<?php 

require_once "conexion.php";



/**
* 
*/
class modelosFormularios 
{

	static public function mdlAreas_plaza ($tabla, $datos)
	{
		$stmt = conexion::conectar()->prepare("INSERT INTO $tabla(nombre, apellido, correo) VALUES(:Nombre,:Apellido,:Correo)");
		

		$stmt->bindParam(":Nombre",$datos["Nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":Apellido",$datos["Apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":Correo",$datos["Correo"], PDO::PARAM_STR);

	if($stmt->execute()){
			return "ok";
		}
		else {
			print_r(conexion::conectar()->errorInfo());
			// echo "test2";
		}

		$stmt -> close();
		$stmt=null;

	}

	static public function mdlSeleccionarRegistros($tabla, $item, $valor){

		if($item == null && $valor == null){
			$stmt = conexion::conectar()->prepare("SELECT * from $tabla");
			$stmt->execute();
			return $stmt -> fetchAll();

		} else {
			$stmt = conexion::conectar()->prepare("SELECT * from $tabla where $item = :$item");

			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();
			return $stmt -> fetch();

		}

		$stmt -> close();
		$stmt=null;

	}

	static public function mdlActualizarArea ($tabla, $datos)	{
echo "model";
		$stmt = conexion::conectar()->prepare("UPDATE $tabla SET Nombre	=:Nombre, Apellido=:Apellido, Correo=:Correo where id_usuario = :id_usuario");

		$stmt->bindParam(":Nombre",$datos["Nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":Apellido",$datos["Apellido"], PDO::PARAM_STR);
		$stmt->bindParam(":Correo",$datos["Correo"], PDO::PARAM_STR);
		$stmt->bindParam(":id_usuario",$datos["id_usuario"], PDO::PARAM_INT);

		// echo "test";

		if($stmt->execute()){

			return "ok";
		}
		else {
			print_r(conexion::conectar()->errorInfo());
		}

		$stmt -> close();
		$stmt=null;
	}


#Modelo eliminar area
	static public function mdlEliminarArea ($tabla, $valor)	{		
		$stmt = conexion::conectar()->prepare("DELETE FROM $tabla WHERE  id_usuario = :id");


		// echo "Test";
		$stmt->bindParam(":id",$valor["id_usuario"], PDO::PARAM_INT);



		if($stmt->execute()){
			// echo "Eliminado";
			return "ok";
		}
		else {
			print_r(conexion::conectar()->errorInfo());
		}

		$stmt -> close();
		$stmt=null;
	}

	static public function mdlSeleccionarRegistrosPuesto($tabla){
		$stmt = conexion::conectar()->prepare("SELECT * from $tabla");
		$stmt->execute();
		return $stmt -> fetchAll();
	}
}


	
	

	