<?php
    include("../config/connectionDB.php");
    // Get data
    $idUsuario = $_POST['id_usuario'];
    $idProgram = $_POST['id_programa'];
    $fName = $_POST['f_name'];
    $lName = $_POST['l_name'];
    $DniNum = $_POST['dni_num'];
    $celPhone = $_POST['celphone'];    
    $email = $_POST['email'];
    $pass = md5($_POST['passwd']);

    $sql = "INSERT INTO USUARIOS (id_tipo_usuario, id_programa, nombres, apellidos, cedula, celular, correo, contrasena) 
    VALUES ('$idUsuario', '$idProgram', '$fName', '$lName', '$DniNum', '$celPhone', '$email', '$pass') ";

    if($conn -> query($sql) === TRUE){
        echo "<script> alert('::: USUARIO CREADO SATISFACTORIAMENTE :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/home_coordinador.php");
    }else{
        echo "<script> alert('::: USUARIO NO CREADO SATISFACTORIAMENTE :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_estu_doce.html");
    }
?>