<?php

    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'hoteltresbagos';

    $conection = @mysqli_connect($host, $user, $password, $db);

        if(!$conection){
            echo "error en la conexion";
            
        }else{
            header("Location: pruebas.php");
        } 

?>