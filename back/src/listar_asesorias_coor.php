<!doctype html>
<html lang="en">
  <head>
  	<title>ASESORIAS</title>
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
                        <h2 class="heading-section">ASESORIAS</h2>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-wrap">
                            <table class="table table-bordered table-dark table-hover">
                            <thead>
                                <tr>
                                <th>ID</th>
                                <th>TIPO ASESORIA</th>
                                <th>ESTUDIANTE</th>
                                <th>DOCENTE</th>
                                <th>ASIGNATURA</th>
                                <th>FECHA</th>
                                <th> HORA</th>
                                <th> DURACIÓN</th>
                                <th> ESTADO</th>
                                <th> ... </th>
                                </tr>
                            </thead>

                            <?php
                include("../config/connectionDB.php");
                $sql = "SELECT
                            a.id,
                            a.tipo_asesoria,
                            ue.nombres as estudiante,
                            ud.nombres as docente,
                            asig.nombre_asignatura as asignatura,
                            a.fecha,
                            a.hora,
                            a.duracion,
                            a.estado
                        FROM 
                            asesorias a INNER JOIN
                                asignaturas_docente ad INNER JOIN
                                    asignaturas asig
                                ON asig.id = ad.id_asignatura INNER JOIN
                                    usuarios ud
                                ON ud.id = ad.id_usuario
                            ON ad.id = a.id_docente_asignatura INNER JOIN
                                usuarios ue
                            ON ue.id = a.id_estudiante
                        GROUP BY 
                            estudiante,
                            docente,
                            asignatura
                ";
                $result = $conn -> query($sql);
                if($result -> num_rows){
                    while($row = $result -> fetch_assoc()){
                        echo  "<tr>
                                <td>".$row['id']."</td>
                                <td>".$row['tipo_asesoria']."</td>
                                <td>".$row['estudiante']."</td>
                                <td>".$row['docente']."</td>
                                <td>".$row['asignatura']."</td>
                                <td>".$row['fecha']."</td>
                                <td>".$row['hora']."</td>
                                <td>".$row['duracion']."</td>
                                <td>".$row['estado']."</td>
                                <td>
                                    <a href='http://127.0.0.1/Asesorias_Unicesmag/back/src/editar_usuario_coor.php?userId=".$row['id']."'>
                                        <img src ='../../front/icons/visto.png' width = '40'></a>&nbsp;&nbsp;
                                    <a href='http://127.0.0.1/Asesorias_Unicesmag/back/src/borrar_asesoria_coor.php?userId=".$row['id']."'>
                                        <img src ='../../front/icons/cerca.png' width = '30'></a>
                                </td>
                            </tr>";

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
        </section><br><br><br><br><br><br><br><br><br><br>
	</div>

	<script src="../../plantillas/table-07/js/jquery.min.js"></script>
  <script src="../../plantillas/table-07/js/popper.js"></script>
  <script src="../../plantillas/table-07/js/bootstrap.min.js"></script>
  <script src="../../plantillas/table-07/js/main.js"></script>

	</body>
</html>

