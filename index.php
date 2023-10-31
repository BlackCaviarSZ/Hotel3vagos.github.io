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
            <div class="col-md-10 mt-2">
                
                <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="6000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="6000">
                            <img src="./img/cuarto 1.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <a href="pruebas.php"><h5><b>¿CÓMO HACER UNA RESEVACIÓN?</b></h5>
                                <p><b>Para poder realizar una reservación deberás de seguir estas instrucciones</b></p></a>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="6000">
                            <img src="./img/buffet.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Ofrecemos desayuno buffet todos los domingos</h5>
                                <p>El buffet comienza a las 6am y finaliza a las 12 pm con marimba en vivo</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="6000">
                            <img src="./img/Mascotas.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Trae a tus mascotas</h5>
                                <p>Estaremos encantados de servirles a ustedes y a sus mascotas</p>
                            </div>
                        </div>
                    </div>
                    
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>                

            </div>
        </div>
    </div>
    <?php include "views/footer.php"; ?>
</body>
</html>