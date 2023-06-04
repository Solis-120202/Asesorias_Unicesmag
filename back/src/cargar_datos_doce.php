<?php
    include("../config/connectionDB.php");

    $f_name = $_POST['nombres'];
    $l_name = $_POST['apellidos'];
    $ident = $_POST['cedula'];
    $mobile = $_POST['celular'];
    $email = $_POST['correo'];
    $userId=$_POST['uId'];

    $sql = "UPDATE USUARIOS SET
            nombres = '$f_name',
            apellidos = '$l_name',
            cedula = '$ident',
            celular = '$mobile',
            correo = '$email'
        WHERE
            id = '$userId'";
    
    if($conn->query($sql) === TRUE){
        echo "<script> alert('USUARIO CARGADO CORRECTAMENTE') </script>";
        header("refresh:0;url=http://127.0.0.1/Asesorias_Unicesmag/back/src/editar_datos_doce.php");
        // echo (error);
    }else{
        echo $conn -> error;
    }
       
?>