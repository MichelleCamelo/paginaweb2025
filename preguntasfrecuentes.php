<?php

// config.php - Configuraciones generales
define('SITE_NAME', 'Star Park');
define('SITE_URL', 'https://starpark.com.co');

// header.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- En el head del HTML -->
<link rel="stylesheet" href="css/styles.css">

<!-- Estructura HTML mejorada -->
<header class="tech-header">
    <!-- Agrega el patrón de fondo -->
<div class="tech-pattern"></div>

<!-- Actualiza la estructura del menú -->
<div class="logo-container">
    <img src="images/logohori.png" alt="Star Park">
</div>

<nav class="nav-container">
    <a href="index.php">INICIO</a>
    <a href="parques.php">PARQUES</a>
    <a href="servicios.php">SERVICIOS</a>
    <a href="contacto.php">CONTACTO</a>
</nav>
</header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<!-- Estructura HTML mejorada -->
<header class="tech-header">
    <!-- Agrega el patrón de fondo -->
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preguntas Frecuentes - Star Park</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .tech-pattern {
            height: 10px;
            background: linear-gradient(45deg, #007bff 25%, transparent 25%, transparent 50%, #007bff 50%, #007bff 75%, transparent 75%);
            background-size: 20px 20px;
            margin-bottom: 30px;
        }

        .cta-section {
            padding: 40px 20px;
        }

        .cta-section h2 {
            color: #fff;
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 40px;
            text-shadow: 
                0 0 5px #fff,
                0 0 10px #fff,
                0 0 20px #fff,
                0 0 40px #ffffff,
                0 0 80px #ffffff;
            animation: neonPulse 1.5s ease-in-out infinite alternate;
        }

        @keyframes neonPulse {
            from {
                text-shadow: 
                    0 0 5px #fff,
                    0 0 10px #fff,
                    0 0 20px #fff,
                    0 0 40px #ffffff,
                    0 0 80px #ffffff;
            }
            to {
                text-shadow: 
                    0 0 2.5px #fff,
                    0 0 5px #fff,
                    0 0 10px #fff,
                    0 0 20px #ffffff,
                    0 0 40px #ffffff;
            }
        }

        .faq-container {
            display: grid;
            gap: 30px;
        }

        .faq-item {
            background: #1a1a1a;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .faq-item:hover {
            transform: translateY(-5px);
        }

        .faq-question {
            color: #fff;
            font-size: 1.3em;
            margin-bottom: 15px;
            font-weight: bold;
            text-shadow: 
                0 0 5px #fff,
                0 0 10px #fff,
                0 0 15px #ffffff;
            animation: smallNeonPulse 1.5s ease-in-out infinite alternate;
        }

        @keyframes smallNeonPulse {
            from {
                text-shadow: 
                    0 0 5px #fff,
                    0 0 10px #fff,
                    0 0 15px #ffffff;
            }
            to {
                text-shadow: 
                    0 0 2.5px #fff,
                    0 0 5px #fff,
                    0 0 7.5px #ffffff;
            }
        }

        .faq-answer {
            color: #ffffff;
            font-size: 1.1em;
            line-height: 1.8;
        }

        @media (max-width: 768px) {
            .cta-section h2 {
                font-size: 2em;
            }
            
            .faq-item {
                padding: 20px;
            }
        }
        {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .tech-pattern {
            height: 10px;
            background: linear-gradient(45deg, #007bff 25%, transparent 25%, transparent 50%, #007bff 50%, #007bff 75%, transparent 75%);
            background-size: 20px 20px;
            margin-bottom: 30px;
        }

        .cta-section {
            padding: 40px 20px;
        }

        .cta-section h2 {
            color: #fff;
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 40px;
            text-shadow: 
                0 0 5px #fff,
                0 0 10px #fff,
                0 0 20px #fff,
                0 0 40px #ffffff,
                0 0 80px #ffffff;
            animation: neonPulse 1.5s ease-in-out infinite alternate;
        }

        @keyframes neonPulse {
            from {
                text-shadow: 
                    0 0 5px #fff,
                    0 0 10px #fff,
                    0 0 20px #fff,
                    0 0 40px #ffffff,
                    0 0 80px #ffffff;
            }
            to {
                text-shadow: 
                    0 0 2.5px #fff,
                    0 0 5px #fff,
                    0 0 10px #fff,
                    0 0 20px #ffffff,
                    0 0 40px #ffffff;
            }
        }

        .faq-container {
            display: grid;
            gap: 30px;
        }

        .faq-item {
            background: #1a1a1a;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .faq-item:hover {
            transform: translateY(-5px);
        }

        .faq-question {
            color: #fff;
            font-size: 1.3em;
            margin-bottom: 15px;
            font-weight: bold;
            text-shadow: 
                0 0 5px #fff,
                0 0 10px #fff,
                0 0 15px #ffffff;
            animation: smallNeonPulse 1.5s ease-in-out infinite alternate;
        }

        @keyframes smallNeonPulse {
            from {
                text-shadow: 
                    0 0 5px #fff,
                    0 0 10px #fff,
                    0 0 15px #ffffff;
            }
            to {
                text-shadow: 
                    0 0 2.5px #fff,
                    0 0 5px #fff,
                    0 0 7.5px #ffffff;
            }
        }

        .faq-answer {
            color: #ffffff;
            font-size: 1.1em;
            line-height: 1.8;
        }

        @media (max-width: 768px) {
            .cta-section h2 {
                font-size: 2em;
            }
            
            .faq-item {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="tech-pattern"></div>
    <div class="cta-section">
        <h2>PREGUNTAS FRECUENTES</h2>
        
        <div class="faq-container">
            <div class="faq-item">
                <div class="faq-question">¿QUÉ ES EL SUPERDOMINGO?</div>
                <div class="faq-answer">
                    Es un gran evento masivo de diversión que hacemos cada mes en todos los parques de la compañia. Consiste en que los niños reciben entrada a las atracciones mecánicas, entradas para videojuegos, dinámicas, refrigerio y obsequio. Es una gran oportunidad para llevar a tus niños al parque. Para poder asistir debes reservar tu cupo dias antes del evento en las instalaciones del Star Park que tengas mas cercano.
                    <br><br>
                    <em>*Tener en cuenta que cada una de las atracciones tiene restricciones por lo que algunos niños no podran acceder a algunas de ellas.</em>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿HACEN EVENTOS EMPRESARIALES?</div>
                <div class="faq-answer">
                    Sí, también hacemos los mejores eventos empresariales, en los que integramos a los empleados de tu empresa junto con sus hijos en un evento de diversión que incluye entre otros: Atracciones mecánicas, torneos, videojuegos, recreación, refrigerio.
                    Es un evento que fortalece la relación entre padres y sus hijos.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿CUÁLES SON LOS HORARIOS DE ATENCIÓN?</div>
                <div class="faq-answer">
                    En general nuestros parques de atracciones están en servicio a partir de las 12:00 hasta las 20:00. Los fines de semana vamos desde las 11:00 hasta las 21:00.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿CÓMO PUEDO RESERVAR MI FIESTA INFANTIL?</div>
                <div class="faq-answer">
                    En la administración de cada uno de nuestros parques puedes reservar la fecha de celebración de tu evento infantil. La reserva se hace al menos con $50.000 y continuas abonando hasta antes del inicio de la fiesta.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿MI NIÑO O NIÑA PUEDE ENTRAR A TODAS LAS ATRACCIONES?</div>
                <div class="faq-answer">
                    Existen restricciones por estatura y en cada una de nuestras atracciones está el reglamento que se debe cumplir para poder acceder.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿HACEN FIESTAS INFANTILES?</div>
                <div class="faq-answer">
                    Sí, hacemos fiestas infantiles en nuestros parques de atracciones, con salón decorado según el personaje favorito, piñata, torta, recreación y mucho mas. Hacemos fiestas infantiles en Bogotá, fiestas infantiles en Neiva, fiestas infantiles en Mosquera, fiestas infantiles en Medellin.
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">¿CÓMO PUEDO UTILIZAR LAS ATRACCIONES DEL PARQUE?</div>
                <div class="faq-answer">
                    Deberás adquirir la tarjeta Star Park en cualquiera de nuestros puntos, y esta tarjeta almacena toda la información; como tus tickets acumulados, maquinas en las que haz jugado, saldo para jugar, etc.
                    Ademas también puedes utilizarla en todos los parques de la compañía.
                </div>
            </div>
        </div>
    </div>
</body>
</html>

        </div>
<!-- Actualiza la estructura del menú -->

