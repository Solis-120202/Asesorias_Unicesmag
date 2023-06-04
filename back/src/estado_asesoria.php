<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTAR</title>
</head>
<body background="../../front/images/front2.jpeg">
    <br><br><br><br><br><br><br><br><br><br><br>
    <font color="#ffffff" size="5">
    <table border="1" align="center">
        <tr>
            <th colspan="9">
                 LISTADO ASESORIAS
            </th>
        </tr>
        <tr>
            <th>TIPO DE ASESORIA</th>
            <th>ESTUDIANTE</th>
            <th>DOCENTE</th>
            <th>ASIGNATURA</th>
            <th>FECHA</th>
            <th>HORA</th>
            <th>DURACIÓN</th>
            <th>ESTADO</th>
            <th>...</th>
        </tr>
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
                            <td>".$row['tipo_asesoria']."</td>
                            <td>".$row['estudiante']."</td>
                            <td>".$row['docente']."</td>
                            <td>".$row['asignatura']."</td>
                            <td>".$row['fecha']."</td>
                            <td>".$row['hora']."</td>
                            <td>".$row['duracion']."</td>
                            <td>".$row['estado']."</td>
                            <td>
                                <a href='http://127.0.0.1/PETS/back/src/edit_user.php?userId=".$row['id']."'>
                                    <img src ='../../front/icons/visto.png' width = '40'></a>&nbsp;&nbsp;
                                <a href='http://127.0.0.1/PETS/back/src/delete_user.php?userId=".$row['id']."'>
                                    <img src ='../../front/icons/cerca.png' width = '30'></a>
                            </td>
                           </tr>";

                }
            }else{
                echo "NO DATA FOUND";
            }
        ?>
    </table>
    </font>
</body>
</html>