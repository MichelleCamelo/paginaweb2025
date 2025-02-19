<?php

// config.php - Configuraciones generales
define('SITE_NAME', 'Star Park');
define('SITE_URL', 'https://starpark.com.co');

// header.php
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- En el head del HTML -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="./css/styles.css?v=<?php echo time(); ?>">
    <script defer src="carousel.js"></script>
    <meta name="theme-color" content="#314c9c">
</head>

<body>
    <section class="video-container">
        <video autoplay loop muted playsinline controls alt="videoPrincipal">
            <source src="images/videoprincipal.mp4" type="video/mp4">
        </video>
    </section>
    <!-- Contenedor del header -->
    <header class="background-header">
        <!-- Logo -->
        <div class="logo-container">
            <img src="images/fotos/Home/Botones/Starpark.png" alt="Star Park">
        </div>
        <!-- Navegación -->
        <nav class="nav-container">
            <a href="parques.php"> <img src="images/fotos/Home/Botones/parques.png" alt="Parques"> </a>
            <a class="button-center" href="servicios.php"><img src="images/fotos/Home/Botones/servicios.png"
                    alt="Servicos"></a>
            <a href="contacto.php"><img src="images/fotos/Home/Botones/contacto.png" alt="Contacto"></a>
        </nav>
    </header>
    <!-- Contenedor del main -->
    <div class="novedades">
        <h2>Novedades</h2>
        <main class="imagen-fondo"> <!-- id = Carousel-slider-->
            <article class="container-carousel"> <!-- No tenia ninguna clase-->    
                <div class="carruseles" id="slider"> <!-- class = Carousel-slider-->
                    <!-- POST DE INSTAGRAM -->
                    <section class="slider-section">
                        <iframe class="instagram-media" src="https://www.instagram.com/reel/DEQh-1jupwM/embed"></iframe>
                    </section>
                    <section class="slider-section">
                        <iframe class="instagram-media" src="https://www.instagram.com/reel/DD0MMSvSQtD/embed"></iframe>
                    </section>
                    <section class="slider-section">
                        <iframe class="instagram-media" src="https://www.instagram.com/p/DE0hisES2Lp/embed"></iframe>
                    </section>
                    <section class="slider-section">
                        <iframe class="instagram-media" src="https://www.instagram.com/reel/CxwKZFwszUB/embed"></iframe>
                    </section>
                    <section class="slider-section">
                        <iframe class="instagram-media" src="https://www.instagram.com/reel/DCc8U42xSkN/embed"></iframe>
                    </section>
                    <section class="slider-section">
                        <iframe class="instagram-media" src="https://www.instagram.com/reel/DCIc-ELNlGL/embed"></iframe>
                    </section>
                </div>
            </article>
            <!-- BOTONES -->
        </main>
        <button class="button-next">
            <img src="images/fotos/Home/Botones/derecha.png" alt="flechaDerecha" />
        </button>
        <button class="button-prev">
            <img src="images/fotos/Home/Botones/izquierda.png" alt="flechaIzquierda" />
        </button>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/micro-slider@1.0.9/dist/micro-slider.min.js"></script>
    </div>
    <!-- Script de Instagram (agrégalo al final de tu página) -->
    <script async src="//www.instagram.com/embed.js"></script>
    <!-- Botones de whatsapp y dominick, lado derecho -->
    <aside class="enlaces-derecha">
        <a href="https://wa.me/573118090610" class="whatsapp" target="_blank">
            <img src="images/fotos/Home/Botones/whatsapp.png" alt="WhatsApp">
        </a>
        <a href="#" class="dominik-icon" target="_blank">
            <img src="images/fotos/Home/Botones/dominik.png" alt="Dominick">
        </a>
    </aside>
    <!-- Contenedor del footer -->
    <footer class="de-interes">
        <section class="enlaces">
            <img src="images/fotos/Home/Botones/de_interes.png" alt="De interés">
            <ul>
                <li><a href="preguntasfrecuentes.php">Preguntas frecuentes</a></li>
                <li><a href="nuestraempresa.php">Nuestra Empresa</a></li>
                <li><a href="servicio.php">Servicio al cliente</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </section>

        <section class="redes">
            <img src="images/fotos/Home/Botones/redes_sociales.png" alt="Redes sociales">
            <div class="redes-sociales">
                <a href="#"><img src="images/fotos/Home/Botones/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="images/fotos/Home/Botones/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="images/fotos/Home/Botones/tiktok.png" alt="TikTok"></a>
            </div>
        </section>

        <section class="normatividad">
            <img src="images/fotos/Home/Botones/normatividad.png" alt="Normatividad">
            <ul>
                <li><a href="politica.php">Política tratamiento de datos</a></li>
            </ul>
        </section>
    </footer>
</body>

</html>