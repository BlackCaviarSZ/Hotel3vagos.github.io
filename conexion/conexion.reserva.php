<?php
    require("conexion.php");
    $user = $_POST['usuario'];
    $dia = $_POST['dias'];
    $noche = $_POST['noches'];
    
    $consulta = "INSERT INTO reservaciones(usuario, dias_de_estancia, noches_de_estancia) 
                 VALUES ('$user', '$dia', '$noche')";
    
    if (mysqli_query($conection, $consulta)) {
        header("Location: ../index.log.php");
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conection);
    }
?>
