<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-5.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.encabezado.log.css">
    <link rel="stylesheet" href="./css/style.modal.ubicacion.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-custom-nav">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item nav-custom1">
                    <img src="img/estrellablanca.png" alt="Logo del Hotel" height="50">
                </li>
                <li class="nav-item nav-custom1">
                    <a class="nav-link" aria-current="page" href="index.log.php">HOTEL TRES VAGOS</a>
                </li>
                <li class="nav-item nav-custom1">
                <div class="boton-modal-u">
                        <label for="btn-ubicacion">
                            Ubicacion
                        </label>
                    </div>
                    <input type="checkbox" id="btn-ubicacion">
                    <div class="container-modal">
                        <div class="content-modal">
                            <h2>Estamos ubicados en:</h2>
                            <p>123 Calle Principal, Ciudad Imaginaria, Estado Ficticio, Código Postal: 12345, País de Ensueño</p>
                            <img src="img/hotel.jpg" alt="Hotel">
                            <img src="img/hotel 2.jpg" alt="Hotel">
                            <img src="img/hotel 3.jpg" alt="Hotel">
                            <img src="img/hotel 4.jpeg" alt="Hotel">
                            <div class="btn-cerrar">
                                <label for="btn-ubicacion" class="cerrar-modal">cerrar</label>
                            </div>                        
                        </div>                    
                    </div>
                </li>
                <li class="nav-item nav-custom1">
                    <a class="nav-link" href="reservacion.php">Reservación</a>
                </li>
                <li class="nav-item nav-custom2">
                    <a class="nav-link" href="index.php">Cerrar Sesión</a>
                </li>
                <li class="nav-item nav-custom3">
                    <img src="img/usuario.png" alt="Usuario" height="50">
                </li>
            </ul>
        </div>
    </nav>    
</body>
</html>
