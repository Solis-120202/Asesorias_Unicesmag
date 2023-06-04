<?php
    // Developer: Andres 
    // MySQL engine Credentials
    $host="127.0.0.1";
    $username="root";
    $password="";
    $dbname="asesoria";
    $port="3306";

    // Create connection
    $conn = new mysqli ($host,$username,$password,$dbname,$port);

    // Check connection
    if($conn->connect_error){
        echo "Connection Failed: ".$conn->connect_error;
    } else{
        echo "";
    }
?>