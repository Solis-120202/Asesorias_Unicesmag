<?php
    include("../config/connectionDB.php");
    $id = $_GET['userId'];
    $sql = "DELETE FROM USUARIOS WHERE id = '$id'";
    if($conn -> query($sql)===TRUE){
        if($conn -> affected_rows > 0){
            echo "<script>alert('USUARIO ELIMINADO CORRECTAMENTE')</script>";
            header('refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/back/src/listar_usuarios.php');
        }else{
            echo "<script>alert('USUARIO NO HA SIDO ENCONTRADO')</script>";
            header('refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/back/src/listar_usuarios.php');
        }
    }else{
        echo "Error: " . $conn -> error;
    }
?>