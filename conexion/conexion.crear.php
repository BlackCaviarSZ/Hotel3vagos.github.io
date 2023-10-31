<?php
    require("conexion.php");
    $user = $_POST['usuario'];
    $contra = $_POST['contraseña'];
    
    $consulta = "INSERT INTO usuariohotel(estado, usuario, contrasenia, idperfil) 
                 VALUES ('1', '$user', '$contra', 5)";
    
    if (mysqli_query($conection, $consulta)) {
        header("Location: ../IniciarSesion.php");
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conection);
    }
    
?>