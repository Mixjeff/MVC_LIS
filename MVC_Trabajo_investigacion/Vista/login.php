<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<!--=====================================
	PLUGINS DE CSS
	======================================-->	

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<!--=====================================
	PLUGINS DE JS
	======================================-->	

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- Latest compiled Fontawesome-->
	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>


<?php 



$registro = ControladorFormularios::ctrAreas_trabajo();
$ingreso = new ControladorFormularios();
$ingreso -> ctrIngreso();


?>
	<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Iniciar sesion</h3>
				<?php 
	//$registro = new ControladorFormularios();
		//$registro -> ctrAreas_trabajo();
				?>
				
			</div>
			<div class="card-body">
				<form class="" method="post">
					<div class="input-group form-group">



					<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="Loginusername">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="Loginpassword">
					</div>
					
					<div class="form-group">
										
		<button type="text" class="btn-float-right login_btn">Inicio</a></button>		
			</div>
				</form>
			</div>
			<div class="card-footer">
				
				<div class="d-flex justify-content-center">
						
				</div>
			</div>
		</div>
	</div>
</div>	
</body>
</html>