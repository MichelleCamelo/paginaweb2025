<?php
require_once 'includes/config.php';
// require_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/servicios.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/styles.css?v=<?php echo time(); ?>">
    <!-- <link rel="stylesheet" href="./css/barranavParques.css?v=<?php echo time(); ?>"> -->
    <script defer src="hamburgMenu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title><?php echo SITE_NAME; ?></title>
</head>

<body>
    <!-- Pagina de servicios -->
    <main class="servicios-space-background">
        <!-- Barra de navegacion para los parques -->
        <nav class="navigation-container">
            <a href="index.php" class="logo-link">
                <img src="images/fotos/Parques/botones/starpark.png" alt="LogoStarPark">
            </a>
            <div class="hamburger-menu">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </div>
        </nav>
        <section class="sidebar-menu">
            <div class="close-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="parques.php">Parques</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </section>
        <div class="overlay"></div>
        <article class="servicios-content">
            <!-- Título principal -->
            <div class="title-servicios">
                <img src="images/fotos/servicios/imagenes/servicios.png" alt="Nuestros Servicios">
            </div>

            <!-- Grid de servicios -->
            <section class="servicios-grid">
                <a href="https://wa.me/573118090610" class="servicio-card">
                    <div class="card-content">
                        <img src="images/fotos/servicios/imagenes/CelebraCumple.png" alt="Celebra tu Cumpleaños">
                        <!-- <h3>CELEBRA TU<br>CUMPLEAÑOS</h3>
                        <p>¡FESTEJA TU CUMPLEAÑOS<br>HOY Y VÍVELO CON DIVERSIÓN!</p> -->
                    </div>
                </a>

                <a href="https://wa.me/573118090610" class="servicio-card">
                    <div class="card-content">
                        <img src="images/fotos/servicios/imagenes/FiestasColegios.png" alt="Fiestas Colegios">
                        <!-- <h3>FIESTAS<br>COLEGIOS</h3>
                        <p>¡EL MEJOR CIERRE DE AÑO<br>PARA TU INSTITUCIÓN!</p> -->
                    </div>
                </a>

                <a href="https://wa.me/573118090610" class="servicio-card">
                    <div class="card-content">
                        <img src="images/fotos/servicios/imagenes/SuperDiversion.png" alt="Super Diversión">
                        <!-- <h3>SUPER<br>DIVERSIÓN</h3>
                        <p>¡MOMENTOS DE DIVERSIÓN<br>PERFECTOS EN STAR PARK!</p> -->
                    </div>
                </a>

                <a href="https://wa.me/573118090610" class="servicio-card">
                    <div class="card-content">
                        <img src="images/fotos/servicios/imagenes/EventosEmpresariales.png" alt="Eventos Empresariales">
                        <!-- <h3>EVENTOS<br>EMPRESARIALES</h3>
                        <p>¡CELEBRA TUS EVENTOS<br>EMPRESARIALES CON NOSOTROS!</p> -->
                    </div>
                </a>

                <a href="https://wa.me/573118090610" class="servicio-card">
                    <div class="card-content">
                        <img src="images/fotos/servicios/imagenes/FiestasInfantiles.png" alt="Fiestas Infantiles">
                        <!-- <h3>FIESTAS<br>INFANTILES</h3>
                        <p>¡CELEBRA TU EVENTO<br>INFANTIL CON NOSOTROS!</p> -->
                    </div>
                </a>
            </section>

            <!-- Llamado a la acción -->
            <div class="cta-section">
                <h2>DIVIÉRTETE CON NOSOTROS</h2>
                <div class="cta-button">
                    <a href="cotizar.php">¡Y COTIZA TU FIESTA YA!</a>
                </div>
            </div>
        </article>
    </main>
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