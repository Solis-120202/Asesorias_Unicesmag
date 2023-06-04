<?php
    include("../config/connectionDB.php");
    $id = $_GET['userId'];
    $sql = "DELETE FROM asesorias WHERE id = '$id'";
    if($conn -> query($sql)===TRUE){
        if($conn -> affected_rows > 0){
            echo "<script>alert('ASESORIA ELIMINADA CORRECTAMENTE')</script>";
            header('refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/back/src/listar_asesorias_doce.php');
        }else{
            echo "<script>alert('ASESORIA NO HA SIDO ENCONTRADO')</script>";
            header('refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/back/src/listar_asesorias_doce.php');
        }
    }else{
        echo "Error: " . $conn -> error;
    }
?>