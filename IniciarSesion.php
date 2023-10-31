<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login sistema</title>
    <link rel="stylesheet" href="./css/style.iniciarsesion.css">
</head>
<body>
    <section id="container">
        <form action="conexion/login.php" method="POST">
            <h1>Iniciar Sesion</h1>
            <img src="./img/usuario.png" alt="Usuario" height="150px" width="150px"><br>
            <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            <br>
            <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            <br>
            <button type="submit">Iniciar Sesión</button>
            <br><br>
            <a href="CrearCuenta.php"><h3>¿No tienes cuenta? crea una aqui</h3></a>
        </form>
    </section>
</body>
</html>