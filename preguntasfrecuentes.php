<?php

// config.php - Configuraciones generales
define('SITE_NAME', 'Star Park');
// define('SITE_URL', 'https://starpark.com.co');

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
    <link rel="stylesheet" href="./css/pregFrecuentes.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script defer src="hamburgMenu.js"></script>
</head>

<body>
    <div class="pregfrecuentes-background">
        <header class="tech-header">
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
        </header>
        <div class="cta-section">
            <div class="preguntas-frecuentes-container">
                <img src="images/fotos/preguntas_frecuentes/imagenes/preguntas_frecuentes.png"
                    alt="Preguntas frecuentes">
            </div>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">¿QUÉ ES EL SUPERDOMINGO?</div>
                    <div class="faq-answer">
                        Es un gran evento masivo de diversión que hacemos cada mes en todos los parques de la compañia.
                        Consiste en que los niños reciben entrada a las atracciones mecánicas, entradas para
                        videojuegos, dinámicas, refrigerio y obsequio. Es una gran oportunidad para llevar a tus niños
                        al parque. Para poder asistir debes reservar tu cupo dias antes del evento en las instalaciones
                        del Star Park que tengas mas cercano.
                        <br><br>
                        <em>*Tener en cuenta que cada una de las atracciones tiene restricciones por lo que algunos
                            niños no podran acceder a algunas de ellas.</em>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿HACEN EVENTOS EMPRESARIALES?</div>
                    <div class="faq-answer">
                        Sí, también hacemos los mejores eventos empresariales, en los que integramos a los empleados de
                        tu empresa junto con sus hijos en un evento de diversión que incluye entre otros: Atracciones
                        mecánicas, torneos, videojuegos, recreación, refrigerio.
                        <br>
                        </em>Es un evento que fortalece la relación entre padres y sus hijos.</em>
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿CUÁLES SON LOS HORARIOS DE ATENCIÓN?</div>
                    <div class="faq-answer">
                        En general nuestros parques de atracciones están en servicio a partir de las 12:00 hasta las
                        20:00. Los fines de semana vamos desde las 11:00 hasta las 21:00.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿CÓMO PUEDO RESERVAR MI FIESTA INFANTIL?</div>
                    <div class="faq-answer">
                        En la administración de cada uno de nuestros parques puedes reservar la fecha de celebración de
                        tu evento infantil. La reserva se hace al menos con $50.000 y continuas abonando hasta antes del
                        inicio de la fiesta.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿MI NIÑO O NIÑA PUEDE ENTRAR A TODAS LAS ATRACCIONES?</div>
                    <div class="faq-answer">
                        Existen restricciones por estatura y en cada una de nuestras atracciones está el reglamento que
                        se debe cumplir para poder acceder.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿HACEN FIESTAS INFANTILES?</div>
                    <div class="faq-answer">
                        Sí, hacemos fiestas infantiles en nuestros parques de atracciones, con salón decorado según el
                        personaje favorito, piñata, torta, recreación y mucho mas. Hacemos fiestas infantiles en Bogotá,
                        fiestas infantiles en Neiva, fiestas infantiles en Mosquera, fiestas infantiles en Medellin.
                    </div>
                </div>

                <div class="faq-item">
                    <div class="faq-question">¿CÓMO PUEDO UTILIZAR LAS ATRACCIONES DEL PARQUE?</div>
                    <div class="faq-answer">
                        Deberás adquirir la tarjeta Star Park en cualquiera de nuestros puntos, y esta tarjeta almacena
                        toda la información; como tus tickets acumulados, maquinas en las que haz jugado, saldo para
                        jugar, etc.
                        Ademas también puedes utilizarla en todos los parques de la compañía.
                    </div>
                </div>
            </div>
        </div>
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
    </div>
</body>

</html>