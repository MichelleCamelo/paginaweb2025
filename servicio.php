<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <script defer src="js/hamburgMenu.js"></script>
    <title>Servicio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <div class="servicio-space-background">
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
        <!-- contenedor principal con la imagen y formulario -->
        <main class="main-container-servicio">
            <section class="servicio-left">
                <img src="images/fotos/servicio_al_cliente/imagenes/informacion.png" alt="Información">
            </section>

            <section class="servicio-right">
                <div class="form-container">
                    <h2>Servicio al <br> cliente</h2>

                    <form class="contactForm" action="procesar_formulario.php" method="post">
                        <div class="form-group">
                            <label for="nombre"><i class="fa-regular fa-user"></i></i></i></label>
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                        </div>

                        <div class="form-group">
                            <label for="email"><i class="fa-solid fa-envelope"></i></label>
                            <input type="email" id="email" name="email" placeholder="Email" required>
                        </div>

                        <div class="form-group">
                            <label for="telefono"><i class="fa-solid fa-phone"></i></label>
                            <input type="tel" id="telefono" name="telefono" placeholder="Número telefónico" required>
                        </div>

                        <div class="form-group">
                            <label for="ubicacion"><i class="fa-solid fa-location-dot"></i></label>
                            <select id="ubicacion" name="ubicacion" required>
                                <option value="" disabled selected>Ubicación del parque</option>
                                <option value="altavista">Altavista</option>
                                <option value="bulevar_niza">Bulevar Niza</option>
                                <option value="hayuelos">Hayuelos</option>
                                <option value="paseo_villa_del_rio">Paseo Villa del Río</option>
                                <option value="bello">Bello</option>
                                <option value="cali">Cali</option>
                                <option value="mayorca">Mayorca</option>
                                <option value="mosquera">Mosquera</option>
                                <option value="neiva">Neiva</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="descripcion"><i class="fa-solid fa-comment-dots"></i></label>
                            <textarea id="descripcion" name="descripcion" placeholder="Descripción" rows="4" required></textarea>
                        </div>

                        <div class="form-submit">
                            <button type="submit">ENVIAR</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
    </div>
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