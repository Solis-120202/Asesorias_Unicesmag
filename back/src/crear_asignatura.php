<?php
    include("../config/connectionDB.php");
    // Get data
    $aName = $_POST['a_name'];
    $id_prog = $_POST['id_prog'];

    $sql = "INSERT INTO ASIGNATURAS (nombre_asignatura, id_programa) VALUES ('$aName', '$id_prog') ";

    if($conn -> query($sql) === TRUE){
        //echo " ::: PROGRAM HAS BEEN CREATED SUCCESSFULLY ::: ";
        echo "<script> alert('::: ASIGNATURA CREADA CON EXITO :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_programa.html");
    } else{
        //echo " ::: ERROR :" . $conn -> error . "<br>" . $sql ;
        echo "<script> alert('::: ASIGNATURA NO CREADA :::')</script>";
        header("refresh:0; url=http://127.0.0.1/Asesorias_Unicesmag/front/src/crear_programa.html");
    }
?>