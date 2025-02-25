<?php
require_once 'includes/config.php';
// require_once 'includes/header.php';

// Obtener el ID del parque de la URL
$parque_id = $_GET['id'] ?? '';

// Información del parque (esto podría venir de una base de datos)
$parques = [
    'hayuelos' => [
        'nombre' => 'HAYUELOS',
        'park_info' => 'images/fotos/Planetas_Sedes/Hayuelos/imagenes/info.png',
        // 'direccion' => 'Calle 20 #82-52',
        // 'horario' => [
        //     'Lunes a Viernes: 10AM - 8PM',
        //     'Sábados: 10AM - 9PM',
        //     'Domingos y Festivos: 11AM - 7PM'
        // ],  // Aquí estaba el error, faltaba la coma
        'telefono' => '(+57) 3202325689',
        'park-site' => 'images/fotos/Planetas_Sedes/Hayuelos/imagenes/Hayuelos.png',
        'galeria' => [
            'images/fotos/Planetas_Sedes/Hayuelos/imagen1.png',
            'images/fotos/Planetas_Sedes/Hayuelos/imagen2.png'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.480671334933!2d-74.13145828119882!3d4.663593453672537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9c7c183b5caf%3A0xac7d29a15cf82ed1!2sHayuelos%20Mall!5e1!3m2!1sen!2sco!4v1737142903345!5m2!1sen!2sco'
    ],
    'altavista' => [
        'nombre' => 'ALTAVISTA',
        'park_info' => 'images/fotos/Planetas_Sedes/Altavista/imagenes/info.png',
        // 'direccion' => 'Cra 1 #65D 58 Sur, Bogotá',
        // 'horario' => [
        //     'Lunes a Viernes: 01AM - 07PM',
        //     'Sábados: 12AM - 08PM',
        //     'Domingos y Festivos: 11AM - 08PM'
        // ],
        'telefono' => '(+57) 3202325661',
        'park-site' => 'images/fotos/Planetas_Sedes/Altavista/imagenes/altavista.png',
        'galeria' => [
            'images/fotos/Planetas_Sedes/Altavista/imagen1.jpg',
            'images/fotos/Planetas_Sedes/Altavista/imagen2.jpeg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8686.220590919638!2d-74.12426633529013!3d4.533202041794881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3fa21ead67e6a9%3A0xe6225f65a30424cb!2sAltavista%20Mall!5e1!3m2!1sen!2sco!4v1737149046045!5m2!1sen!2sco'
    ],
    'boulevarniza' => [
        'nombre' => 'BULEVAR',
        'park_info' => 'images/fotos/Planetas_Sedes/BulevarNiza/imagenes/info.png',
        // 'direccion' => 'Ak. 58 #127-59, Bogotá',
        // 'horario' => [
        //     'Lunes a Viernes: 12PM - 07PM',
        //     'Sábados,Domingos y Festivos: 12PM - 08PM'
        // ],
        'telefono' => '(+57) 3208587729',
        'park-site' => 'images/fotos/Planetas_Sedes/BulevarNiza/imagenes/bulevar.png',
        'galeria' => [
            'images/fotos/Planetas_Sedes/BulevarNiza/imagen1.jpg',
            'images/fotos/Planetas_Sedes/BulevarNiza/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4934.172929616685!2d-74.07419022502059!3d4.712194595262844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8592be4fe607%3A0x1bf9d74fdf4302da!2sCentro%20Comercial%20Bulevar%20Niza!5e1!3m2!1sen!2sco!4v1737476684343!5m2!1sen!2sco'
    ],
    'paseovillaDelrio' => [
        'nombre' => 'PASEO VILLA DEL RIO',
        'park_info' => 'images/fotos/Planetas_Sedes/PaseoVillaRio/imagenes/info.png',
        // 'direccion' => 'Dg. 57c Sur #62-60, Bogotá',
        // 'horario' => [
        //     'Lunes a Viernes: 01PM - 08PM',
        //     'Sábados,Domingos y Festivos: 11PM - 09PM'
        // ],
        'telefono' => '(+57) 3102326520',
        'park-site' => 'images/fotos/Planetas_Sedes/PaseoVillaRio/imagenes/paseoV_Rio.png',
        'galeria' => [
            'images/fotos/Planetas_Sedes/PaseoVillaRio/imagen1.PNG',
            'images/fotos/Planetas_Sedes/PaseoVillaRio/imagen2.png',
            'images/fotos/Planetas_Sedes/PaseoVillaRio/imagen3.png'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4934.9737188645995!2d-74.15537862502136!3d4.598004695376667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ee66d1faa3f%3A0x4d427a253a2dbe8d!2sCentro%20Comercial%20Paseo%20Villa%20del%20R%C3%ADo!5e1!3m2!1sen!2sco!4v1737477104725!5m2!1sen!2sco'
    ],
    'mosquera' => [
        'nombre' => 'MOSQUERA',
        'park_info' => 'images/fotos/Planetas_Sedes/Mosquera/imagenes/info.png',
        // 'direccion' => 'Cra. 3 #No. 15 A - 57, Mosquera, Cundinamarca',
        // 'horario' => [
        //     'Lunes a Viernes: 01AM - 08PM',
        //     'Sábados: 12:30PM - 08PM',
        //     'Domingos y Festivos: 11AM - 08PM'
        // ],
        'telefono' => '(+57) 3112470566',
        'park-site' => 'images/fotos/Planetas_Sedes/Mosquera/imagenes/Mosquera.png',
        'galeria' => [
            'images/fotos/Planetas_Sedes/Mosquera/imagen1.png',
            'images/fotos/Planetas_Sedes/Mosquera/imagen2.PNG'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4934.172056476821!2d-74.22427962502063!3d4.712317595262732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f7801081bfef7%3A0x19fe5e58b776dff8!2sEcoplaza%20Centro%20Comercial!5e1!3m2!1sen!2sco!4v1737477518410!5m2!1sen!2sco'
    ],
    'neiva' => [
        'nombre' => 'NEIVA',
        'park_info' => 'images/fotos/Planetas_Sedes/Neiva/imagenes/info.png',
        // 'direccion' => 'Cra. 8a #38-42, Comuna 2, Neiva, Huila',
        // 'horario' => [
        //     'Lunes a Viernes: 01PM - 09PM',
        //     'Sábados,Domingos y Festivos: 11PM - 09PM'
        // ],
        'telefono' => '(+57) 3118080091',
        'park-site' => 'images/fotos/Planetas_Sedes/Neiva/imagenes/Neiva.png',
        'galeria' => [
            'images/fotos/Planetas_Sedes/Neiva/imagen1.jpg',
            'images/fotos/Planetas_Sedes/Neiva/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4944.343238870447!2d-75.29098342502962!3d2.9507458970254796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b7451271c5493%3A0x14bf201fa8730bf1!2sSan%20Pedro%20Plaza%20Shopping%20Center!5e1!3m2!1sen!2sco!4v1737477742421!5m2!1sen!2sco'
    ],
    'bello' => [
        'nombre' => 'BELLO',
        'park_info' => 'images/fotos/Planetas_Sedes/bello/imagenes/info.png',
        // 'direccion' => 'Autopista Nte. #34-67, Hermosa Provincia, Bello, Antioquia',
        // 'horario' => [
        //     'Lunes a Viernes: 12PM - 08PM',
        //     'Sábados: 12PM - 08:30PM',
        //     'Domingos y Festivos: 11AM - 09PM'
        // ],
        'telefono' => '(+57) 3118080092',
        'park-site' => 'images/fotos/Planetas_Sedes/bello/imagenes/Bello.png',
        'galeria' => [
            'images/fotos/Planetas_Sedes/bello/imagen1.jpg',
            'images/fotos/Planetas_Sedes/bello/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4920.634633323762!2d-75.54557562500864!3d6.339318993650392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442f9a57f14d2b%3A0xaa895da5804ee322!2sPuerta%20del%20Norte%20Shopping%20Mall!5e1!3m2!1sen!2sco!4v1737478075477!5m2!1sen!2sco'
    ],
    'mayorca' => [
        'nombre' => 'MAYORCA',
        'park_info' => 'images/fotos/Planetas_Sedes/Mayorca/Imagenes/info.png',
        // 'direccion' => 'Mayorca Mega Plaza, Cl. 51 Sur #48-57, Sabaneta',
        // 'horario' => [
        //     'Lunes a Viernes: 12:30PM - 08PM',
        //     'Sábados: 12PM - 09PM',
        //     'Domingos y Festivos: 12AM - 08:30PM'
        // ],
        'telefono' => '(+57) 3145442606',
        'park-site' => 'images/fotos/Planetas_Sedes/Mayorca/Imagenes/Mayorca.png',
        'galeria' => [
            'images/fotos/Planetas_Sedes/Mayorca/imagen1.jpg',
            'images/fotos/Planetas_Sedes/Mayorca/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4922.310650581708!2d-75.60757417501021!3d6.161161493826045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4683cc2769fda9%3A0x997386a695af1002!2sMayorca%20Mega%20Plaza!5e1!3m2!1sen!2sco!4v1737478320985!5m2!1sen!2sco'
    ],
    'cali' => [
        'nombre' => 'CALI',
        'park_info' => 'images/fotos/Planetas_Sedes/Cali/imagenes/info.png',
        // 'direccion' => 'Cl. 5 #50 - 103, panamericano, Cali, Valle del Cauca',
        // 'horario' => [
        //     'Lunes a Viernes: 01PM - 08PM',
        //     'Sábados,Domingos y Festivos: 12PM - 09PM'
        // ],
        'telefono' => '(+57) 3118080084',
        'park-site' => 'images/fotos/Planetas_Sedes/Cali/imagenes/cali.png',
        'galeria' => [
            'images/fotos/Planetas_Sedes/Cali/imagen1.JPG',
            'images/fotos/Planetas_Sedes/Cali/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3645.6578972973143!2d-76.5473719!3d3.4137529!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a6a7e04342fd%3A0xc7fcee81107f9811!2sLa%2014%20Cosmo%20Centro%2C%20Cl.%205%20%2350-103%2C%20panamericano%2C%20Cali%2C%20Valle%20del%20Cauca!5e1!3m2!1ses!2sco!4v1740425339999!5m2!1ses!2sco'
    ]
];
// Verificar si existe el parque
if (!isset($parques[$parque_id])) {
    header('Location: parques.php');
    exit;
}

$parque = $parques[$parque_id];
?>
<!-- Pagina de cada parque -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/parque.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/styles.css?v=<?php echo time(); ?>">
    <script defer src="hamburgMenu.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title><?php echo SITE_NAME; ?></title>
</head>

<body>
    <div class="sedes-spaces-background">
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
        <!-- Sección Ubicación (nave.png) -->
        <section class="ubication">
            <section class="ubication-map">
                <div class="map-container">
                    <iframe src="<?php echo $parque['mapa']; ?>" width="100%" height="550" style="border:0;"
                        allowfullscreen="">
                    </iframe>
                </div>
            </section>
        </section>
        <!-- Sección de nave -->
        <header class="nave-container">
            <img src="images/fotos/Planetas_Sedes/nave.png" alt="Nave">
            <div class="sede-container">
                <div class="park-site">
                    <img src="<?php echo $parque['park-site']; ?>" alt="Nombre de la sede">
                </div>
            </div>
        </header>
        <!-- Sección de galería -->
        <main class="view-container">
            <article class="galeria">
                <div class="galeria-grid">
                    <?php foreach ($parque['galeria'] as $imagen): ?>
                        <div class="galeria-item">
                            <img src="<?php echo $imagen; ?>" alt="Imagen de <?php echo $parque['nombre']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </article>
            <article class="park-info">
                <div class="park-info-container">
                    <div class="galeria-item">
                        <img src="<?php echo $parque['park_info']; ?>" alt="Imagen informativa del parque">
                    </div>
                </div>
            </article>
        </main>
        <!-- Sección de información -->
        <article class="info-container">
            <div class="lines">
                <img src="images\fotos\Planetas_Sedes\azul_y_rojo.png" alt="Decoración azul y rojo">
            </div>
            <section class="hablemos-content">
                <div class="dominick-container">
                    <img src="images/fotos/Planetas_Sedes/dominick.png" alt="Dominick">
                </div>
                <div class="hablemos-button">
                    <p><span>¡Hola!</span> <br>Estoy aquí para ayudarte</p>
                    <a href="https://wa.me/573118090610" class="whatsapp" target="_blank">
                        <img src="images/fotos/Planetas_Sedes/hablemos.png" alt="Hablemos">
                    </a>
                </div>
            </section>
        </article>
        <!-- Botones de whatsapp y dominick, lado derecho -->
        <aside class="enlaces-derecha">
            <a href="https://wa.me/573118090610" class="whatsapp" target="_blank">
                <img src="images/fotos/Home/Botones/whatsapp.png" alt="WhatsApp">
            </a>
            <a href="#" class="dominik-icon" target="_blank">
                <img src="images/fotos/Home/Botones/dominik.png" alt="Dominick">
            </a>
        </aside>
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