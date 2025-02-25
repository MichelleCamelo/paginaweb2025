<?php
require_once 'includes/config.php';
// require_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/nuestraEmpresa.css?v=<?php echo time(); ?>">
    <script defer src="hamburgMenu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title><?php echo SITE_NAME; ?></title>
</head>

<body>
    <div class="space-background">
        <nav class="navigation-container">
            <a href="index.php">
                <img src="images/fotos/Parques/botones/starpark.png" alt="LogoStarPark">
            </a>
            <div class="hamburger-menu">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </div>
        </nav>

        <div class="sidebar-menu">
            <div class="close-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="parques.php">Parques</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
        <div class="overlay"></div>
        <div class="main-title">
            <img src="./images/fotos/quienes_somos/imagenes/quienes_somos.png" alt="Nuestra Empresa">
        </div>
        <div class="about-container">

            <div class="content-wrapper">
                <!-- Dominic animado -->
                <div class="dominic-container">
                    <div class="dominic">
                        <img src="./images/fotos/quienes_somos/imagenes/dominic.png" alt="Star Park Mascota">
                    </div>
                </div>

                <!-- Contenido -->
                <div class="text-content">
                    <h2>Centros de entretenimiento para jugar y disfrutar en familia</h2>

                    <p>Hace ya más de 30 años que un visionario tuvo el deseo de brindar experiencias de diversión para
                        toda
                        la familia. Un emprendedor que venía de brindar también su grano de arena en la universidad como
                        maestro, Decidió incursionar en este apasionante mundo de los parques de atracciones. Durante
                        varios
                        años, su emblemática atracción preferida, el carrusel, giro, transportando a los niños en un
                        viaje
                        hacia mundos mágicos de princesas y caballeros. Otra atracción mecánica, la rueda también ha
                        llevado
                        hasta el espacio fantástico a miles y miles de niños.</p>

                    <p>Con el tiempo, nuestros niños fueron exigiendo más y mejores máquinas y nosotros siempre con el
                        deseo
                        de darles gusto hemos evolucionado cada día en infraestructura y variedad en la oferta de
                        entretenimiento. Hoy en día, el objetivo es el mismo: Brindar experiencias de diversión para
                        toda la
                        familia en parques de atracciones, ubicados en centros comerciales como:</p>

                    <div class="locations">
                        <p>- Hayuelos, Ecoplaza, Bulevar, Altavista y Paseo Villa del Río en Bogotá.</p>
                        <p>- Puerta del Norte, en Medellín</p>
                        <p>- San pedro Plaza, en Neiva</p>
                        <p>- Ecoplaza, en Mosquera</p>
                        <p>- Cosmocentro, en Cali</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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