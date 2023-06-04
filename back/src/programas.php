<?php
    include("../config/connectionDB.php");
    $sql = "SELECT id, nombre_programa FROM programas";
    $result = $conn->query($sql);
    
    // Generar las opciones para el combo box
    $options = "";
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $nombre = $row['nombre_programa'];
        $options .= "<option value='$id'>$nombre</option>";
    }
    echo $options;
?>