<?php
    include("../config/connectionDB.php");
    // Get data
    $pName = $_POST['p_name'];
    $id_facul = $_POST['id_facul'];

    $sql = "INSERT INTO PROGRAMAS (nombre_programa, id_facultad) VALUES ('$pName', '$id_facul') ";

    if($conn -> query($sql) === TRUE){
        //echo " ::: PROGRAM HAS BEEN CREATED SUCCESSFULLY ::: ";
        echo "<script> alert('::: PROGRAMA CREADO CON EXITO :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_programa.html");
    } else{
        //echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
        echo "<script> alert('::: PROGRAMA NO CREADO :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_programa.html");
    }
?>