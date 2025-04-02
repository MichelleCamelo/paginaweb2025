<?php
// Es CRUCIAL usar la ruta correcta para config.php
require_once '../includes/config.php';

// Variable para indicar si esta página usa el carousel
$use_carousel = true;
include_once '../includes/head.php';
?>

<section class="inicio-video-container">
    <video autoplay loop muted playsinline controls alt="videoPrincipal">
        <source src="../images/videoprincipal.mp4" type="video/mp4">
    </video>
</section>
<!-- Contenedor del header -->
<header class="background-header">
    <!-- Logo -->
    <div class="logo-container">
        <img src="../images/fotos/Home/Botones/Starpark.png" alt="Logo StarPark">
    </div>
    <!-- Navegación -->
    <nav class="nav-container">
        <a href="parques.php"> <img src="../images/fotos/Home/Botones/parques.png" alt="Parques"> </a>
        <a class="button-center" href="../source/servicios.php"><img src="../images/fotos/Home/Botones/servicios.png"
                alt="Servicos"></a>
        <a href="contacto.php"><img src="../images/fotos/Home/Botones/contacto.png" alt="Contacto"></a>
    </nav>
</header>
<!-- Contenedor del main -->
<main class="carousel-container"> <!-- Contenedor principal del carrusel -->
    <div class="title-novedades">
        <img src="../images/fotos/Home/Botones/Novedades.png" alt="Novedades"> <!-- Titulo del carrusel -->
    </div>
    <div class="carousel"> <!-- Contenedor del carrusel -->
        <div class="carousel-items"> <!-- Contenedor de los items del carrusel -->
            <!-- <div class="carousel-item active">
                <iframe class="instagram-media" src="https://www.instagram.com/reel/DEQh-1jupwM/embed"></iframe>
            </div>
            <div class="carousel-item">
                <iframe class="instagram-media" src="https://www.instagram.com/reel/DD0MMSvSQtD/embed"></iframe>
            </div>
            <div class="carousel-item">
                <iframe class="instagram-media" src="https://www.instagram.com/p/DE0hisES2Lp/embed"></iframe>
            </div>
            <div class="carousel-item">
                <iframe class="instagram-media" src="https://www.instagram.com/reel/CxwKZFwszUB/embed"></iframe>
            </div>
            <div class="carousel-item">
                <iframe class="instagram-media" src="https://www.instagram.com/reel/DCc8U42xSkN/embed"></iframe>
            </div>
            <div class="carousel-item">
                <iframe class="instagram-media" src="https://www.instagram.com/reel/DCIc-ELNlGL/embed"></iframe>
            </div> -->
        </div>

        <div class="carousel-controls">
            <button class="carousel-prev" aria-label="Anterior">◀︎</button>
            <div class="carousel-indicators"></div>
            <button class="carousel-next" aria-label="Siguiente">▶︎</button>
        </div>
    </div>
</main>
<!-- Botones de whatsapp y dominick, lado derecho -->
<?php
// Incluye el aside
include_once '../includes/aside.php';
?>
<?php
// Incluye el footer
include_once '../includes/footer.php';
?>