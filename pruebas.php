<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.encabezado.css">
    <link rel="stylesheet" href="./css/style.side.css">
    <link rel="stylesheet" href="./css/style.footer.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style.modal.css">
    <link rel="stylesheet" href="./css/style.modal.ubicacion.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        include "views/encabezado.php";
    ?>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <?php include "views/side.php"; ?>

            <!-- Contenido principal -->
            <div class="col-md-10">
                <h1 style="color:black">Como hacer una reservacion</h1>
                <p style="color:black">Para hacer una reservacion en nuestro hotel lo primero que tienes que hacer es entrar iniciar sesion
                    <br>si no tienes cuenta, no te preocupes, es muy sencillo crear una, solo dirigete a iniciar sesion y despues
                    selecciona crear una cuenta, <br>completa los campos solicitados y te redirigira a iniciar sesion, ingresa los
                    datos de la cuenta que acabas de crear para finalmente <br>darle clic a reservacion, llena el formulario
                    para tener una estancia maravillosa
                </p>
                <img src="img/feliz.jpg" alt="feliz">
            </div>
        </div>
    </div>
    <?php include "views/footer.php"; ?>
</body>
</html>