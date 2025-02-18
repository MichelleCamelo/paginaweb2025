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
    <meta name="theme-color" content="#314c9c">
    <script src="carousel.js"></script>
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
    <main class="novedades">
        <h2>Novedades</h2>
        <div class="carousel-container">
            <article class="carousel">
                <div class="reel-container">
                    <!-- Aquí pegas los códigos de inserción de Instagram -->
                    <iframe class="instagram-media" src="https://www.instagram.com/reel/DEQh-1jupwM/embed"></iframe>
                    <iframe class="instagram-media" src="https://www.instagram.com/reel/DD0MMSvSQtD/embed"></iframe>
                    <iframe class="instagram-media" src="https://www.instagram.com/p/DE0hisES2Lp/embed"></iframe>
                    <iframe class="instagram-media" src="https://www.instagram.com/reel/CxwKZFwszUB/embed"></iframe>
                    <iframe class="instagram-media" src="https://www.instagram.com/reel/DCc8U42xSkN/embed"></iframe>
                    <iframe class="instagram-media" src="https://www.instagram.com/reel/DCIc-ELNlGL/embed"></iframe>
                </div>
            </article>
        </div>
        <button class="button-next"><img src="images/fotos/Home/Botones/derecha.png" alt="flechaDerecha">
        </button>
        <button class="button-prev"><img src="images/fotos/Home/Botones/izquierda.png" alt="flechaIzquierda">
        </button>
    </main>
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