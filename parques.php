<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<div class="space-background">
    <div class="starpark-locations">
        <!-- Bogotá Central -->
        <div class="location-central">
            <div class="planet-item planet-central">
                <h2>BOGOTÁ</h2>
            </div>
        </div>

        <!-- Primera fila de planetas -->
        <div class="planets-row">
            <div class="planet-item planet-orange">
                <a href="parque.php?id=hayuelos">
                    <div class="planet-content">
                        <img src="images/hayuelos.png" alt="Hayuelos">
                        <span>HAYUELOS</span>
                    </div>
                </a>
            </div>

            <div class="planet-item planet-purple">
                <a href="parque.php?id=altavista">
                    <div class="planet-content">
                        <img src="images/altavista.png" alt="Altavista">
                        <span>ALTAVISTA</span>
                    </div>
                </a>
            </div>

            <div class="planet-item planet-yellow">
                <a href="parque.php?id=boulevarniza">
                    <div class="planet-content">
                        <img src="images/bulevar.png" alt="Bulevar Niza">
                        <span>BULEVAR NIZA</span>
                    </div>
                </a>
            </div>

            <div class="planet-item planet-pink">
                <a href="parque.php?id=paseovillaDelrio">
                    <div class="planet-content">
                        <img src="images/paseo.png" alt="Paseo Villa del Río">
                        <span>PASEO VILLA DEL RÍO</span>
                    </div>
                </a>
            </div>
        </div>

        <!-- Resto del país -->
        <div class="location-central resto-pais">
            <div class="planet-item planet-central">
                <h2>RESTO DEL PAÍS</h2>
            </div>
        </div>

        <!-- Segunda fila de planetas -->
        <div class="planets-row">
            <div class="planet-item planet-blue">
                <a href="parque.php?id=mosquera">
                    <div class="planet-content">
                        <img src="images/mosquera.png" alt="Mosquera">
                        <span>MOSQUERA</span>
                    </div>
                </a>
            </div>

            <div class="planet-item planet-red">
                <a href="parque.php?id=neiva">
                    <div class="planet-content">
                        <img src="images/neiva.png" alt="Neiva">
                        <span>NEIVA</span>
                    </div>
                </a>
            </div>

            <div class="planet-item planet-green">
                <a href="parque.php?id=bello">
                    <div class="planet-content">
                        <img src="images/bello.png" alt="Bello">
                        <span>BELLO</span>
                    </div>
                </a>
            </div>

            <div class="planet-item planet-earth">
                <a href="parque.php?id=mayorca">
                    <div class="planet-content">
                        <img src="images/mayorca.png" alt="Mayorca">
                        <span>MAYORCA</span>
                    </div>
                </a>
            </div>

            <div class="planet-item planet-saturn">
                <a href="parque.php?id=cali">
                    <div class="planet-content">
                        <img src="images/cali.png" alt="Cali">
                        <span>CALI</span>
                    </div>
                </a>
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

.starpark-locations {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
}

.location-central {
    text-align: center;
    margin: 40px 0;
}

.planets-row {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
    margin: 40px 0;
}

.planet-item {
    position: relative;
    width: 200px;
    height: 200px;
    transition: transform 0.3s ease;
}

.planet-item:hover {
    transform: scale(1.1);
}

.planet-content {
    position: relative;
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.planet-content img {
    width: 100%;
    height: 100%;
    border-radius: 50%;
    object-fit: cover;
}

.planet-content span {
    position: absolute;
    bottom: -30px;
    color: white;
    font-size: 1.2em;
    font-weight: bold;
    text-shadow: 0 0 10px rgba(0,0,0,0.5);
    text-align: center;
    width: 100%;
}

/* Colores específicos para cada planeta */
.planet-orange { filter: drop-shadow(0 0 20px rgba(255,140,0,0.6)); }
.planet-purple { filter: drop-shadow(0 0 20px rgba(147,112,219,0.6)); }
.planet-yellow { filter: drop-shadow(0 0 20px rgba(255,215,0,0.6)); }
.planet-pink { filter: drop-shadow(0 0 20px rgba(255,192,203,0.6)); }
.planet-blue { filter: drop-shadow(0 0 20px rgba(0,191,255,0.6)); }
.planet-red { filter: drop-shadow(0 0 20px rgba(220,20,60,0.6)); }
.planet-green { filter: drop-shadow(0 0 20px rgba(50,205,50,0.6)); }
.planet-earth { filter: drop-shadow(0 0 20px rgba(100,149,237,0.6)); }
.planet-saturn { filter: drop-shadow(0 0 20px rgba(218,165,32,0.6)); }

.planet-central h2 {
    color: #00f7ff;
    font-size: 2.5em;
    text-transform: uppercase;
    text-shadow: 0 0 20px rgba(0,247,255,0.5);
    background: rgba(0,0,0,0.3);
    padding: 20px 40px;
    border-radius: 10px;
    display: inline-block;
}

@keyframes twinkle {
    from { background-position: 0 0, 40px 60px, 130px 270px; }
    to { background-position: -550px 0, -350px 60px, -250px 270px; }
}

/* Responsive */
@media (max-width: 768px) {
    .planets-row {
        gap: 20px;
    }

    .planet-item {
        width: 150px;
        height: 150px;
    }

    .planet-central h2 {
        font-size: 1.8em;
        padding: 15px 30px;
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