<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<div class="space-background">
    <div class="about-container">
        <h1 class="main-title">¿QUIENES SOMOS?</h1>
        
        <div class="content-wrapper">
            <!-- Cohete animado -->
            <div class="rocket-container">
                <div class="rocket">
                    <img src="images/rocket.png" alt="Star Park Mascota">
                </div>
            </div>

            <!-- Contenido -->
            <div class="text-content">
                <h2>Centros de entretenimiento para jugar y disfrutar en familia</h2>
                
                <p>Hace ya más de 30 años que un visionario tuvo el deseo de brindar experiencias de diversión para toda la familia. Un emprendedor que venía de brindar también su grano de arena en la universidad como maestro, Decidió incursionar en este apasionante mundo de los parques de atracciones. Durante varios años, su emblemática atracción preferida, el carrusel, giro, transportando a los niños en un viaje hacia mundos mágicos de princesas y caballeros. Otra atracción mecánica, la rueda también ha llevado hasta el espacio fantástico a miles y miles de niños.</p>

                <p>Con el tiempo, nuestros niños fueron exigiendo más y mejores máquinas y nosotros siempre con el deseo de darles gusto hemos evolucionado cada día en infraestructura y variedad en la oferta de entretenimiento. Hoy en día, el objetivo es el mismo: Brindar experiencias de diversión para toda la familia en parques de atracciones, ubicados en centros comerciales como:</p>

                <div class="locations">
                    <p>-Hayuelos, Ecoplaza, Bulevar, Altavista y Paseo Villa del Río en Bogotá.</p>
                    <p>-Puerta del Norte, en Medellín</p>
                    <p>-San pedro Plaza, en Neiva</p>
                    <p>-Ecoplaza, en Mosquera</p>
                    <p>-Cosmocentro, en Cali</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.space-background {
    background: linear-gradient(to bottom, #0a0a2e, #1a1a4a);
    min-height: 100vh;
    position: relative;
    overflow: hidden;
    padding: 40px 20px;
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

.about-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.main-title {
    font-size: 4em;
    color: white;
    text-align: center;
    margin-bottom: 50px;
    text-shadow: 0 0 20px rgba(0,247,255,0.5);
}

.content-wrapper {
    display: flex;
    gap: 40px;
    align-items: flex-start;
}

.rocket-container {
    flex: 0 0 300px;
    position: sticky;
    top: 20px;
}

.rocket {
    animation: float 6s ease-in-out infinite;
}

.rocket img {
    width: 100%;
    height: auto;
}

.text-content {
    flex: 1;
    background: rgba(0, 0, 0, 0.3);
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 0 30px rgba(0,247,255,0.1);
}

.text-content h2 {
    color: #00f7ff;
    font-size: 1.8em;
    margin-bottom: 30px;
}

.text-content p {
    color: white;
    line-height: 1.8;
    margin-bottom: 20px;
    font-size: 1.1em;
}

.locations {
    margin-top: 30px;
}

.locations p {
    color: #00f7ff;
    margin-bottom: 10px;
    font-weight: bold;
}

@keyframes float {
    0% {
        transform: translateY(0px);
    }
    50% {
        transform: translateY(-20px);
    }
    100% {
        transform: translateY(0px);
    }
}

@keyframes twinkle {
    from { background-position: 0 0, 40px 60px, 130px 270px; }
    to { background-position: -550px 0, -350px 60px, -250px 270px; }
}

@media (max-width: 768px) {
    .content-wrapper {
        flex-direction: column;
    }

    .rocket-container {
        flex: 0 0 200px;
        margin: 0 auto;
    }

    .main-title {
        font-size: 2.5em;
    }
}
</style>

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
            <a href="servicio-cliente.php">Servicio al Cliente</a>
        </li>
        <li>
            <a href="blog.php">Blog</a>
        </li>
    </ul>
</section>