<?php
    include("../config/connectionDB.php");
    // Get data
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    //Create Query
    $sql = "SELECT * FROM USUARIOS WHERE correo = '$email' AND contrasena = '$password'";
    $result = $conn -> query ($sql);
    $id=['id'];

    if( $result -> num_rows > 0) {
        header("Location:http://127.0.0.1/Asesorias_Unicesmag/front/src/home");
    } else{
        //echo " ::: THE USER DOEN'T EXIST OR INVALID DATA :::" ;
        echo "<script>alert('::: THE USER DOES NOT EXIST OR INVALID DATA :::') </script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/index.html");
    }
?>