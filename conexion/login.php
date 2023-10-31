<?php
    require("conexion.php");
    $user = $_POST['usuario'];
    $contra = $_POST['contraseña'];


    $consulta = mysqli_query($conection,"SELECT * FROM usuariohotel WHERE usuario ='".$user."' AND contrasenia ='".$contra."'");
    $nr = mysqli_num_rows($consulta);

    if($nr==1){
    header("Location: ../index.log.php");
    }
    else{
    header("Location: ../IniciarSesion.php");
    }
?>