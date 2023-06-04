<?php
	require('back/config/connectionDB.php');
	
	session_start();
	
	if(isset($_SESSION["id_usuario"])){
		//header("Location: front/src/home_estudiante.php");
	}
	
	if(!empty($_POST))
	{
		$usuario = $_POST['email'];
		$password = md5($_POST['password']);
		
		$sql = "SELECT * FROM usuarios WHERE correo = '$usuario' AND contrasena = '$password'";
		$result=$conn->query($sql);
		$rows = $result->num_rows;
		
		if($rows > 0) {
			$row = $result->fetch_assoc();
			$_SESSION['id_usuario'] = $row['id'];
			$_SESSION['tipo_usuario'] = $row['id_tipo_usuario'];
			//echo $_SESSION['id_usuario'];
			if($row['id_tipo_usuario'] == 1)
				header("Location: front/src/home_estudiante.php");
			else
				if($row['id_tipo_usuario'] == 2)
					header("Location: front/src/home_docente.php");
				else
					header("Location: front/src/home_coordinador.php");	
		} else {
			$error = "El nombre o contraseña son incorrectos";
			echo "<script>alert('NO EXISTE EL USUARIO')</script>";
		}
	}
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>ASESORIAS UNICESMAG</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="plantillas/login-form-20/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(front/images/front2.jpeg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">ASESORIAS UNICESMAG</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">¿Ya tienes una cuenta?</h3>
		      	<form  name="Login Form" action="<?php $_SERVER['PHP_SELF']; ?>" class="signin-form" method="POST">
                    <br>
		      		<div class="form-group">
		      			<input type="email" class="form-control" placeholder="CORREO" name="email" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="CONTRASEÑA" name="password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Acceder</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Recordar Correo
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff"><a href="http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_usuarios.html">Registrarse</a></a>
								</div>
	            </div>
	          </form>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="plantillas/login-form-20/js/jquery.min.js"></script>
  <script src="plantillas/login-form-20/js/popper.js"></script>
  <script src="plantillas/login-form-20/js/bootstrap.min.js"></script>
  <script src="plantillas/login-form-20/js/main.js"></script>

	</body>
</html>

