<?php
    session_start();
    //echo $_SESSION['id_usuario'];
    
    if(!isset($_SESSION["id_usuario"])){
		  header("Location: ../../index.php");
	}

    include("../config/connectionDB.php");
    // Get data
    $tAseso = $_POST['t_aseso'];
    $idEstu = $_SESSION['id_usuario'];
    $idAsig = $_POST['asig'];
    $Fecha = $_POST['fecha'];
    $Hora = $_POST['hora'];
    $Duraci = $_POST['duraci'];

    $sql = "INSERT INTO asesorias (tipo_asesoria, id_estudiante, id_docente_asignatura, fecha, hora, duracion) 
    VALUES ('$tAseso', '$idEstu', '$idAsig', '$Fecha', '$Hora', '$Duraci') ";

    if($conn -> query($sql) === TRUE){
        echo "<script> alert('::: USER HAS BEEN CREATED SUCCESSFULLY :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/home_estudiante.php");
    } else{
        echo "<script> alert('::: FACULTY WASN'T CREATED SUCCESSFULLY :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_asesoria.html");
    }
?>  