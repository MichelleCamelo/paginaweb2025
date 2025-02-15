<?php
require_once 'includes/config.php';
require_once 'includes/header.php';

// Obtener el ID del parque de la URL
$parque_id = $_GET['id'] ?? '';

// Información del parque (esto podría venir de una base de datos)
$parques = [
    'hayuelos' => [
        'nombre' => 'HAYUELOS',
        'direccion' => 'Calle 20 #82-52',
        'horario' => [
            'Lunes a Viernes: 10AM - 8PM',
            'Sábados: 10AM - 9PM',
            'Domingos y Festivos: 11AM - 7PM'
        ],  // Aquí estaba el error, faltaba la coma
        'telefono' => '(+57) 3202325689',
        'imagen_banner' => 'images/fotos/Hayuelos/imagen1.jpg',
        'galeria' => [
            'images/imagen1.jpg',
            'images/fotos/Hayuelos/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3070.480671334933!2d-74.13145828119882!3d4.663593453672537!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9c7c183b5caf%3A0xac7d29a15cf82ed1!2sHayuelos%20Mall!5e1!3m2!1sen!2sco!4v1737142903345!5m2!1sen!2sco'
    ],
    'altavista' => [
        'nombre' => 'ALTAVISTA',
        'direccion' => 'Cra 1 #65D 58 Sur, Bogotá',
        'horario' => [
            'Lunes a Viernes: 01AM - 07PM',
            'Sábados: 12AM - 08PM',
            'Domingos y Festivos: 11AM - 08PM'
        ],
        'telefono' => '(+57) 3202325661',
        'imagen_banner' => 'images/fotos/bulevar/imagen1.jpg',
        'galeria' => [
            'images/fotos/altavista/imagen1.jpg',
            'images/fotos/altavista/imagen2.jpeg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8686.220590919638!2d-74.12426633529013!3d4.533202041794881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3fa21ead67e6a9%3A0xe6225f65a30424cb!2sAltavista%20Mall!5e1!3m2!1sen!2sco!4v1737149046045!5m2!1sen!2sco'
    ],
    'boulevarniza' => [
        'nombre' => 'BULEVAR',
        'direccion' => 'Ak. 58 #127-59, Bogotá',
        'horario' => [
            'Lunes a Viernes: 12PM - 07PM',
            'Sábados,Domingos y Festivos: 12PM - 08PM'
        ],
        'telefono' => '(+57) 3208587729',
        'imagen_banner' => 'images/fotos/imagen1.jpg',
        'galeria' => [
            'images/fotos/bulevar/imagen1.jpg',
            'images/fotos/bulevar/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4934.172929616685!2d-74.07419022502059!3d4.712194595262844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f8592be4fe607%3A0x1bf9d74fdf4302da!2sCentro%20Comercial%20Bulevar%20Niza!5e1!3m2!1sen!2sco!4v1737476684343!5m2!1sen!2sco'
    ],
    'paseovillaDelrio' => [
        'nombre' => 'PASEO VILLA DEL RIO',
        'direccion' => 'Dg. 57c Sur #62-60, Bogotá',
        'horario' => [
            'Lunes a Viernes: 01PM - 08PM',
            'Sábados,Domingos y Festivos: 11PM - 09PM'
        ],
        'telefono' => '(+57) 3102326520',
        'imagen_banner' => 'images/fotos/imagen1.jpg',
        'galeria' => [
            'images/fotos/Paseo/imagen2.jpg',
            'images/fotos/Paseo/imagen3.png'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4934.9737188645995!2d-74.15537862502136!3d4.598004695376667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ee66d1faa3f%3A0x4d427a253a2dbe8d!2sCentro%20Comercial%20Paseo%20Villa%20del%20R%C3%ADo!5e1!3m2!1sen!2sco!4v1737477104725!5m2!1sen!2sco'
    ],
    'mosquera' => [
        'nombre' => 'MOSQUERA',
        'direccion' => 'Cra. 3 #No. 15 A - 57, Mosquera, Cundinamarca',
        'horario' => [
           'Lunes a Viernes: 01AM - 08PM',
            'Sábados: 12:30PM - 08PM',
            'Domingos y Festivos: 11AM - 08PM'
        ],
        'telefono' => '(+57) 3112470566',
        'imagen_banner' => 'images/fotos/imagen1.jpg',
        'galeria' => [
            'images/fotos/mosquera/imagen1.jpg',
            'images/fotos/mosquera/imagen2.PNG'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4934.172056476821!2d-74.22427962502063!3d4.712317595262732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f7801081bfef7%3A0x19fe5e58b776dff8!2sEcoplaza%20Centro%20Comercial!5e1!3m2!1sen!2sco!4v1737477518410!5m2!1sen!2sco'
    ],
    'neiva' => [
        'nombre' => 'NEIVA',
        'direccion' => 'Cra. 8a #38-42, Comuna 2, Neiva, Huila',
        'horario' => [
            'Lunes a Viernes: 01PM - 09PM',
            'Sábados,Domingos y Festivos: 11PM - 09PM'
        ],
        'telefono' => '(+57) 3118080091',
        'imagen_banner' => 'images/fotos/imagen1.jpg',
        'galeria' => [
            'images/fotos/neiva/imagen1.jpg',
            'images/fotos/neiva/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4944.343238870447!2d-75.29098342502962!3d2.9507458970254796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b7451271c5493%3A0x14bf201fa8730bf1!2sSan%20Pedro%20Plaza%20Shopping%20Center!5e1!3m2!1sen!2sco!4v1737477742421!5m2!1sen!2sco'
    ],
    'bello' => [
        'nombre' => 'BELLO',
        'direccion' => 'Autopista Nte. #34-67, Hermosa Provincia, Bello, Antioquia',
        'horario' => [
            'Lunes a Viernes: 12PM - 08PM',
            'Sábados: 12PM - 08:30PM',
            'Domingos y Festivos: 11AM - 09PM'
        ],
        'telefono' => '(+57) 3118080092',
        'imagen_banner' => 'images/fotos/imagen1.jpg',
        'galeria' => [
            'images/fotos/bello/imagen1.jpg',
            'images/fotos/bello/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4920.634633323762!2d-75.54557562500864!3d6.339318993650392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e442f9a57f14d2b%3A0xaa895da5804ee322!2sPuerta%20del%20Norte%20Shopping%20Mall!5e1!3m2!1sen!2sco!4v1737478075477!5m2!1sen!2sco'
    ],
    'mayorca' => [
        'nombre' => 'MAYORCA',
        'direccion' => 'Mayorca Mega Plaza, Cl. 51 Sur #48-57, Sabaneta',
        'horario' => [
            'Lunes a Viernes: 12:30PM - 08PM',
            'Sábados: 12PM - 09PM',
            'Domingos y Festivos: 12AM - 08:30PM'
        ],
        'telefono' => '(+57) 3145442606',
        'imagen_banner' => 'images/fotos/imagen1.jpg',
        'galeria' => [
            'images/fotos/Mayorca/imagen1.jpg',
            'images/fotos/Mayorca/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4922.310650581708!2d-75.60757417501021!3d6.161161493826045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4683cc2769fda9%3A0x997386a695af1002!2sMayorca%20Mega%20Plaza!5e1!3m2!1sen!2sco!4v1737478320985!5m2!1sen!2sco'
    ],
    'cali' => [
        'nombre' => 'CALI',
        'direccion' => 'Cl. 5 #50 - 103, panamericano, Cali, Valle del Cauca',
        'horario' => [
           'Lunes a Viernes: 01PM - 08PM',
            'Sábados,Domingos y Festivos: 12PM - 09PM'
        ],
        'telefono' => '(+57) 3118080084',
        'imagen_banner' => 'images/fotos/imagen1.jpg',
        'galeria' => [
            'images/fotos/cali/imagen1.jpg',
            'images/fotos/cali/imagen2.jpg'
        ],
        'mapa' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4942.120732086508!2d-76.5504851250277!3d3.4140573965605054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a3dba435e26d%3A0x7e3db9d31635e8fd!2sCosmocentro%20Cali%20Shopping%20Mall!5e1!3m2!1sen!2sco!4v1737478505417!5m2!1sen!2sco'
    ]
];
// Verificar si existe el parque
if (!isset($parques[$parque_id])) {
    header('Location: parques.php');
    exit;
}

$parque = $parques[$parque_id];
?>

<div class="space-background">
    <div class="parque-content">
        <!-- Banner principal -->
        <div class="parque-banner" style="background-image: url('<?php echo $parque['imagen_banner']; ?>')">
            <div class="banner-info">
                <h1><?php echo $parque['nombre']; ?></h1>
                <div class="info-boxes">
                    <div class="info-box">
                        <h3>CONTACTO</h3>
                        <p><?php echo $parque['telefono']; ?></p>
                        <a href="https://wa.me/573118090610" class="whatsapp" target="_blank">
                            <img src="images/whatsapp-icon.png" alt="WhatsApp">
                        </a>
                    </div>
                    <div class="info-box">
                        <h3>DIRECCIÓN</h3>
                        <p><?php echo $parque['direccion']; ?></p>
                    </div>
                    <div class="info-box">
                        <h3>HORARIO</h3>
                        <?php 
                        if(is_array($parque['horario'])) {
                            foreach($parque['horario'] as $horario) {
                                echo "<p>$horario</p>";
                            }
                        } else {
                            echo "<p>{$parque['horario']}</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección de Galería -->
        <section class="galeria-section">
            <h2 class="section-title">GALERÍA</h2>
            <div class="galeria-grid">
                <?php foreach ($parque['galeria'] as $imagen): ?>
                    <div class="galeria-item">
                        <img src="<?php echo $imagen; ?>" alt="Imagen de <?php echo $parque['nombre']; ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Sección de Ubicación -->
        <section class="ubicacion-section">
            <h2 class="section-title">UBICACIÓN</h2>
            <div class="mapa-container">
                <iframe 
                    src="<?php echo $parque['mapa']; ?>"
                    width="100%" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
                </iframe>
            </div>
        </section>
    </div>
</div>

<style>
    .info-box p {
    color: white;
    margin: 5px 0;
    font-size: 0.9em;
}

.info-box p + p {
    margin-top: 8px;
}
.space-background {
    background: linear-gradient(to bottom, #0a0a2e, #1a1a4a);
    min-height: 100vh;
    position: relative;
    overflow: hidden;
}

.parque-content {
    position: relative;
    z-index: 2;
    padding: 20px;
}

.parque-banner {
    height: 400px;
    background-size: cover;
    background-position: center;
    border-radius: 15px;
    position: relative;
    overflow: hidden;
}

.banner-info {
    background: linear-gradient(to right, rgba(0,0,0,0.8), transparent);
    position: absolute;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 40px;
}

.banner-info h1 {
    color: #00f7ff;
    font-size: 3em;
    margin-bottom: 30px;
    text-shadow: 0 0 20px rgba(0,247,255,0.5);
}

.info-boxes {
    display: flex;
    gap: 30px;
    max-width: 800px;
}

.info-box {
    background: rgba(0,0,0,0.7);
    padding: 20px;
    border-radius: 10px;
    border: 1px solid rgba(0,247,255,0.3);
}

.info-box h3 {
    color: #00f7ff;
    margin-bottom: 10px;
}

.info-box p {
    color: white;
}

.section-title {
    color: #00f7ff;
    text-align: center;
    font-size: 2em;
    margin: 40px 0;
    text-transform: uppercase;
    text-shadow: 0 0 15px rgba(0,247,255,0.5);
}

.galeria-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 20px;
    padding: 20px;
}

.galeria-item {
    border-radius: 10px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.galeria-item:hover {
    transform: scale(1.05);
}

.galeria-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.mapa-container {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 0 30px rgba(0,247,255,0.2);
}

@media (max-width: 768px) {
    .info-boxes {
        flex-direction: column;
    }

    .banner-info h1 {
        font-size: 2em;
    }
}
</style>

<section class="de-interes">
    <h2>De Interés</h2>
    <ul>
        <li>
            <a href="preguntas-frecuentes.php">Preguntas Frecuentes</a>
        </li>
        <li>
            <a href="nuestra-empresa.php">Nuestra Empresa</a>
        </li>
        <li>
            <a href="servicio-cliente.php">Servicio al Cliente</a>
        </li>
        <li>
            <a href="blog.php">Blog</a>
        </li>
    </ul>
</section>