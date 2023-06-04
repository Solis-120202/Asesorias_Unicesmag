<!doctype html>
<html lang="en">
  <head>
  	<title>USUARIOS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../../plantillas/table-07/css/style.css">

	</head>
	<body>
	<div class="bg order-1 order-md-2" style="background-image: url('../../front/images/front2.jpeg');">
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-6 text-center mb-5">
						<h2 class="heading-section">USUARIOS</h2>
					</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-wrap">
							<table class="table table-bordered table-dark table-hover">
							<thead>
								<tr>
								<th>ID</th>
								<th>TIPO USUARIO</th>
								<th>FACULTAD</th>
								<th>PROGRAMA</th>
								<th>NOMBRES</th>
								<th>APELLIDOS</th>
								<th>CORREO</th>
								<th>FECHA CREACIÓN</th>
								<th> ... </th>
								</tr>
							</thead>

							<?php
								include("../config/connectionDB.php");
								$sql = "SELECT usuarios.id AS id, tipos_usuario.nombre_tipou AS tipo_usu, facultades.nombre_facultad AS facultad, 
								programas.nombre_programa AS programa, usuarios.nombres AS nombres, usuarios.apellidos AS apellidos, usuarios.correo AS correo, 
								usuarios.create_at AS created FROM usuarios INNER JOIN tipos_usuario ON usuarios.id_tipo_usuario = tipos_usuario.id 
								INNER JOIN programas ON usuarios.id_programa = programas.id INNER JOIN facultades ON programas.id_facultad = facultades.id 
								ORDER BY tipos_usuario.nombre_tipou;";
								$result = $conn -> query($sql);
								if($result -> num_rows){
									while($row = $result -> fetch_assoc()){
										echo
											"<tbody>
												<tr>
													<th>".$row['id']."</th>
													<th>".$row['tipo_usu']."</th>
													<th>".$row['facultad']."</th>
													<th>".$row['programa']."</th>
													<th>".$row['nombres']."</th>
													<th>".$row['apellidos']."</th>
													<th>".$row['correo']."</th>
													<th>".$row['created']."</th>
													<th>
														<a href='http://127.0.0.1/Asesorias_Unicesmag/back/src/editar_usuario_coor.php?userId=".$row['id']."'>
															<img src ='../../front/icons/editar.png' width = '20'></a>&nbsp;&nbsp;
														<a href='http://127.0.0.1/Asesorias_Unicesmag/back/src/borrar_usuario.php?userId=".$row['id']."'>
															<img src ='../../front/icons/borrar.png' width = '20'></a>
													</th>
												</tr>
											</tbody>";
																																									
									}
								}else{
									echo "NO DATA FOUND";
								}
							?>
							</table>
							
						</div>
					</div>
				</div><br><br>
				<center>
				<button><a href="http://127.0.0.1/Asesorias_Unicesmag/front/src/home_coordinador.php">ATRAS</a>
						</button>
				</center>
			</div>
		</section><br><br><br><br><br><br><br>
	</div>

	<script src="../../plantillas/table-07/js/jquery.min.js"></script>
  <script src="../../plantillas/table-07/js/popper.js"></script>
  <script src="../../plantillas/table-07/js/bootstrap.min.js"></script>
  <script src="../../plantillas/table-07/js/main.js"></script>

	</body>
</html>

