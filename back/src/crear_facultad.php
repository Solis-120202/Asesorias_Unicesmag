<?php
    include("../config/connectionDB.php");
    // Get data
    $faName = $_POST['fa_name'];

    $sql = "INSERT INTO FACULTADES (nombre_facultad) VALUES ('$faName') ";

    //$conn -> query($sql);

    if($conn -> query($sql) === TRUE){
        //echo " ::: FACULTY HAS BEEN CREATED SUCCESSFULLY ::: ";
        echo "<script> alert('::: FACULTAD REGISTRADA CON EXITO :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_facultad.html");
    } else{
        //echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
        echo "<script> alert('::: FACULTAD NO REGISTRADA :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_facultad.html");
    }
?>