<?php
require_once 'includes/config.php';
// require_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/hamburgMenu.js"></script>
    <title>Parques</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <main class="space-background">
        <!-- Navegador y menú plegable -->
        <nav class="navigation-container">
            <a href="index.php">
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
        <!-- no borrar, parte del hamburguer-menu -->
        <div class="overlay"></div>
        <!-- Seccion planetas -->
        <div class="cc-parques">
            <article class="starpark-locations location-section">
                <!-- Bogotá Central -->
                <section class="location-central">
                    <img src="images\fotos\Parques\imagenes\bogotá.png" alt="SedesEnBogotá">
                </section>
                <!-- Primera fila de planetas - Bogotá -->
                <section class="planets-row">
                    <div class="planet-item planet-purple">
                        <a href="parque.php?id=altavista">
                            <div class="planet-content">
                                <img src="images/fotos/Parques/botones/altavista.png" alt="Altavista">
                            </div>
                        </a>
                    </div>
                    <div class="planet-item planet-yellow">
                        <a href="parque.php?id=boulevarniza">
                            <div class="planet-content">
                                <img src="images/fotos/Parques/botones/bulevar_niza.png" alt="Bulevar Niza">
                            </div>
                        </a>
                    </div>
                    <div class="planet-item planet-orange">
                        <a href="parque.php?id=hayuelos">
                            <div class="planet-content">
                                <img src="images/fotos/Parques/botones/hayuelos.png" alt="Hayuelos">
                            </div>
                        </a>
                    </div>
                    <div class="planet-item planet-pink">
                        <a href="parque.php?id=paseovillaDelrio">
                            <div class="planet-content">
                                <img src="images/fotos/Parques/botones/paseo_villa_del_rio.png" alt="Paseo Villa del Río">
                            </div>
                        </a>
                    </div>
                </section>
            </article>

            <!-- Resto del país -->
            <article class="resto-pais location-section">
                <!-- Resto de países title -->
                <section class="location-central">
                    <img src="images\fotos\Parques\imagenes\resto_del_país.png" alt="RestoDelPaís">
                </section>
                <!-- Segunda fila de planetas - Resto del país -->
                <section class="planets-row">
                    <div class="planet-item planet-green">
                        <a href="parque.php?id=bello">
                            <div class="planet-content">
                                <img src="images/fotos/Parques/botones/bello.png" alt="Bello">
                            </div>
                        </a>
                    </div>
                    <div class="planet-item2 planet-saturn">
                        <a href="parque.php?id=cali">
                            <div class="planet-content">
                                <img src="images/fotos/Parques/botones/cali.png" alt="Cali">
                            </div>
                        </a>
                    </div>
                    <div class="planet-item planet-earth">
                        <a href="parque.php?id=mayorca">
                            <div class="planet-content">
                                <img src="images/fotos/Parques/botones/mayorca.png" alt="Mayorca">
                            </div>
                        </a>
                    </div>
                    <div class="planet-item2 planet-blue">
                        <a href="parque.php?id=mosquera">
                            <div class="planet-content">
                                <img src="images/fotos/Parques/botones/mosquera.png" alt="Mosquera">
                            </div>
                        </a>
                    </div>
                    <div class="planet-item planet-red">
                        <a href="parque.php?id=neiva">
                            <div class="planet-content">
                                <img src="images/fotos/Parques/botones/neiva.png" alt="Neiva">
                            </div>
                        </a>
                    </div>
                </section>
            </article>
        </div>
    </main>
    <!-- Botones de whatsapp y dominick, lado derecho -->
    <aside class="enlaces-derecha">
        <a href="https://wa.me/573118090610" class="whatsapp" target="_blank">
            <img src="images/fotos/Home/Botones/whatsapp.png" alt="WhatsApp">
        </a>
        <a href="#" class="dominik-icon" target="_blank">
            <img src="images/fotos/Home/Botones/dominik.png" alt="Dominick">
        </a>
    </aside>
    <!-- Footer -->
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