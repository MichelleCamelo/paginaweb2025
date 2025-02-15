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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
        
        <header class="tech-header">
            <!-- Patrón de fondo -->
            <div class="tech-pattern"></div>
            
            <!-- Logo -->
            <div class="logo-container">
                <img src="images/logohori.png" alt="Star Park">
            </div>
            
            
                <section class="hero">
                    <div class="video-container">
                        <video autoplay loop muted playsinline controls>
                            <source src="images/videoprincipal.mp4" type="video/mp4">
                            Tu navegador no soporta el elemento video.
                        </video>
                    </div>
                </section>
            
            <!-- Navegación -->
            <nav class="nav-container">
                <a href="parques.php"> <img src="images/fotos/Home/Botones/parques.png" alt="Parques"> </a>
                <a class="button-center" href="servicios.php"><img src="images/fotos/Home/Botones/servicios.png" alt="Servicos"></a>
                <a href="contacto.php"><img src="images/fotos/Home/Botones/contacto.png" alt="Contacto"></a>
            </nav>
        </header>
       <main>
        
       </main>
    
        <section class="novedades">
          <h2>Novedades</h2>
             <!-- <div class="instagram-feed"> -->
                <!-- Aquí pegas los códigos de inserción de Instagram -->
                <!-- <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DEQh-1jupwM/?igsh=eGdra2JmcDhnMGpn"></blockquote>
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DD0MMSvSQtD/?igsh=cTBqbzRtN3A0dTdz"></blockquote>
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/DE0hisES2Lp/?igsh=YjUxNnB1Zzlza2ts"></blockquote>
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/CxwKZFwszUB/?igsh=b3IxZXlmZnh3NXBj"></blockquote>
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DCc8U42xSkN/?igsh=ZmVkbXBhbDI0anpt"></blockquote>
                <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/reel/DCIc-ELNlGL/?igsh=MXdhNnA5Z3k0MG1qNQ=="></blockquote>
            </div> -->
        </section>

    <!-- Script de Instagram (agrégalo al final de tu página) -->
    <script async src="//www.instagram.com/embed.js"></script>

    <section class="de-interes">
    <h2>De Interés</h2>
    <ul>
        <li>
            <a href="preguntasfrecuentes.php">Preguntas Frecuentes</a>
        </li>
        <li>
            <a href="nuestraempresa.php">Nuestra Empresa</a>
        </li>
        <li>
            <a href="servicio.php">Servicio al Cliente</a>
        </li>
        <li>
            <a href="blog.php">Blog</a>
        </li>
        <li>
            <a href="politica.php">Política  de tratamiento de datos</a>
        </li>
    </ul>
    </section>

        <a href="https://wa.me/573118090610" class="whatsapp" target="_blank">
            <img src="images/whatsapp-icon.png" alt="WhatsApp">
        </a>
</body>
</html>