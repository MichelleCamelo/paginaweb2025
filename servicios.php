<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<div class="space-background">
    <div class="servicios-content">
        <!-- Título principal -->
        <div class="titulo-servicios">
            <img src="images/logohori.png" alt="Nuestros Servicios" class="titulo-imagen">
        </div>

        <!-- Grid de servicios -->
        <div class="servicios-grid">
            <a href="https://wa.me/573118090610" class="servicio-card">
                <div class="card-content green">
                    <img src="images/fotos/cumple.jpg" alt="Celebra tu Cumpleaños">
                    <h3>CELEBRA TU<br>CUMPLEAÑOS</h3>
                    <p>¡FESTEJA TU CUMPLEAÑOS<br>HOY Y VÍVELO CON DIVERSIÓN!</p>
                </div>
            </a>

            <a href="https://wa.me/573118090610" class="servicio-card">
                <div class="card-content blue">
                    <img src="images/fotos/colegio.jpg" alt="Fiestas Colegios">
                    <h3>FIESTAS<br>COLEGIOS</h3>
                    <p>¡EL MEJOR CIERRE DE AÑO<br>PARA TU INSTITUCIÓN!</p>
                </div>
            </a>

            <a href="https://wa.me/573118090610" class="servicio-card">
                <div class="card-content yellow">
                    <img src="images/fotos/super.jpg" alt="Super Diversión">
                    <h3>SUPER<br>DIVERSIÓN</h3>
                    <p>¡MOMENTOS DE DIVERSIÓN<br>PERFECTOS EN STAR PARK!</p>
                </div>
            </a>

            <a href="https://wa.me/573118090610" class="servicio-card">
                <div class="card-content orange">
                    <img src="images/fotos/empresariales.jpeg" alt="Eventos Empresariales">
                    <h3>EVENTOS<br>EMPRESARIALES</h3>
                    <p>¡CELEBRA TUS EVENTOS<br>EMPRESARIALES CON NOSOTROS!</p>
                </div>
            </a>

            <a href="https://wa.me/573118090610" class="servicio-card">
                <div class="card-content pink">
                    <img src="images/fotos/infantil.jpg" alt="Fiestas Infantiles">
                    <h3>FIESTAS<br>INFANTILES</h3>
                    <p>¡CELEBRA TU EVENTO<br>INFANTIL CON NOSOTROS!</p>
                </div>
            </a>
        </div>

        <!-- Llamado a la acción -->
        <div class="cta-section">
            <h2>DIVIÉRTETE CON NOSOTROS</h2>
            <div class="cta-button">
                <a href="cotizar.php">¡Y COTIZA TU FIESTA YA!</a>
            </div>
        </div>
    </div>
</div>

<style>
.space-background {
    background: linear-gradient(to bottom, #0a0a2e, #1a1a4a);
    min-height: 100vh;
    padding: 40px 20px;
    position: relative;
    overflow: hidden;
}

/* Efecto de estrellas */
.space-background::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-image: 
        radial-gradient(white, rgba(255,255,255,.2) 2px, transparent 4px),
        radial-gradient(white, rgba(255,255,255,.15) 1px, transparent 2px),
        radial-gradient(white, rgba(255,255,255,.1) 2px, transparent 3px);
    background-size: 550px 550px, 350px 350px, 250px 250px;
    background-position: 0 0, 40px 60px, 130px 270px;
    animation: twinkle 15s linear infinite;
    z-index: 1;
}

.servicios-content {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
}

.titulo-servicios {
    text-align: center;
    margin-bottom: 50px;
}

.titulo-imagen {
    max-width: 400px;
    height: auto;
}

.servicios-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 60px;
    margin: 40px 0;
}

.servicio-card {
    text-decoration: none;
    transform-style: preserve-3d;
    transition: transform 0.3s ease;
}

.servicio-card:hover {
    transform: translateY(-10px);
}

.card-content {
    background: rgba(0, 0, 0, 0.6);
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    height: 100%;
    box-shadow: 0 0 20px rgba(0,247,255,0.2);
}

.card-content img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 10px;
    margin-bottom: 15px;
}

.card-content h3 {
    color: #fff;
    font-size: 1.5em;
    margin: 10px 0;
    text-shadow: 0 0 10px rgba(255,255,255,0.5);
}

.card-content p {
    color: #fff;
    font-size: 0.9em;
    line-height: 1.4;
}

/* Colores específicos para cada tarjeta */
.green { border: 2px solid #4CAF50; }
.blue { border: 2px solid #2196F3; }
.yellow { border: 2px solid #FFC107; }
.orange { border: 2px solid #FF5722; }
.pink { border: 2px solid #E91E63; }

.cta-section {
    text-align: center;
    margin: 50px 0;
}

.cta-section h2 {
    color: #fff;
    font-size: 2em;
    margin-bottom: 20px;
}

.cta-button a {
    display: inline-block;
    padding: 15px 40px;
    background: #00f7ff;
    color: #000;
    text-decoration: none;
    border-radius: 30px;
    font-weight: bold;
    text-transform: uppercase;
    transition: all 0.3s ease;
    box-shadow: 0 0 20px rgba(0,247,255,0.4);
}

.cta-button a:hover {
    transform: scale(1.1);
    box-shadow: 0 0 30px rgba(0,247,255,0.6);
}

@keyframes twinkle {
    from { background-position: 0 0, 40px 60px, 130px 270px; }
    to { background-position: -550px 0, -350px 60px, -250px 270px; }
}

/* Responsive */
@media (max-width: 768px) {
    .servicios-grid {
        grid-template-columns: 1fr;
    }

    .titulo-imagen {
        max-width: 300px;
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