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
    <link rel="stylesheet" href="./css/parques.css?v=<?php echo time(); ?>">
    <script defer src="hamburgMenu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <main class="space-background">
        <nav class="navigation-container">
            <a href="index.php">
                <img src="images/fotos/Parques/botones/starpark.png" alt="LogoStarPark">
            </a>
            <section class="sidebar-menu">
                <div class="close-btn">&times;</div>
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <!-- <li><a href="parques.php">Parques</a></li> -->
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </section>
            <div class="overlay"></div>
        </nav>
        <article class="starpark-locations location-section">
            <!-- Bogotá Central -->
            <section class="location-central">
                <img src="images\fotos\Parques\imagenes\bogotá.png" alt="SedesEnBogotá">
            </section>

            <!-- Primera fila de planetas -->
            <section class="planets-row">
                <div class="planet-item planet-purple">
                    <a href="parque.php?id=altavista">
                        <div class="planet-content">
                            <img src="images/fotos/Parques/botones/altavista.png" alt="Altavista">
                            <!-- <span>ALTAVISTA</span> -->
                        </div>
                    </a>
                </div>
                <div class="planet-item planet-yellow">
                    <a href="parque.php?id=boulevarniza">
                        <div class="planet-content">
                            <img src="images/fotos/Parques/botones/bulevar_niza.png" alt="Bulevar Niza">
                            <!-- <span>BULEVAR NIZA</span> -->
                        </div>
                    </a>
                </div>
                <div class="planet-item planet-orange">
                    <a href="parque.php?id=hayuelos">
                        <div class="planet-content">
                            <img src="images/fotos/Parques/botones/hayuelos.png" alt="Hayuelos">
                            <!-- <span>HAYUELOS</span> -->
                        </div>
                    </a>
                </div>
                <div class="planet-item planet-pink">
                    <a href="parque.php?id=paseovillaDelrio">
                        <div class="planet-content">
                            <img src="images/fotos/Parques/botones/paseo_villa_del_rio.png" alt="Paseo Villa del Río">
                            <!-- <span>PASEO VILLA DEL RÍO</span> -->
                        </div>
                    </a>
                </div>
            </section>
        </article>
        <!-- Resto del país -->
        <article class="resto-pais location-section">
            <section class="location-central">
                <img src="images\fotos\Parques\imagenes\resto_del_país.png" alt="RestoDelPaís">
            </section>
            <!-- Segunda fila de planetas -->
            <section class="planets-row">
                <div class="planet-item planet-green">
                    <a href="parque.php?id=bello">
                        <div class="planet-content">
                            <img src="images/fotos/Parques/botones/bello.png" alt="Bello">
                            <!-- <span>BELLO</span> -->
                        </div>
                    </a>
                </div>
                <div class="planet-item2 planet-saturn">
                    <a href="parque.php?id=cali">
                        <div class="planet-content">
                            <img src="images/fotos/Parques/botones/cali.png" alt="Cali">
                            <!-- <span>CALI</span> -->
                        </div>
                    </a>
                </div>
                <div class="planet-item planet-earth">
                    <a href="parque.php?id=mayorca">
                        <div class="planet-content">
                            <img src="images/fotos/Parques/botones/mayorca.png" alt="Mayorca">
                            <!-- <span>MAYORCA</span> -->
                        </div>
                    </a>
                </div>
                <div class="planet-item2 planet-blue">
                    <a href="parque.php?id=mosquera">
                        <div class="planet-content">
                            <img src="images/fotos/Parques/botones/mosquera.png" alt="Mosquera">
                            <!-- <span>MOSQUERA</span> -->
                        </div>
                    </a>
                </div>
                <div class="planet-item planet-red">
                    <a href="parque.php?id=neiva">
                        <div class="planet-content">
                            <img src="images/fotos/Parques/botones/neiva.png" alt="Neiva">
                            <!-- <span>NEIVA</span> -->
                        </div>
                    </a>
                </div>
            </section>
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