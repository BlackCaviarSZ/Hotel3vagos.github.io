<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cear cuenta</title>
    <link rel="stylesheet" href="./css/style.reserva.css">
</head>
<body>
    <section id="container">
        <form action="conexion/conexion.reserva.php" method="POST">
            <h1>Haz tu reservacion aqui</h1>
            <br>
            <label for="usuario">Ingrese su nombre de Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            <br>
            <label for="dias">Ingrese cuantos dias planea quedarse:</label>
                <input type="text" id="dias" name="dias" required>
            <br>
            <label for="noches">Ingrese cuantas noches planea quedarse:</label>
                <input type="text" id="noches" name="noches" required>
            <br>
            <button type="submit">Hacer reservacion</button>
        </form>
    </section>
</body>
</html>