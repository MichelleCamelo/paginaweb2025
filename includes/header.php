<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <!-- El patrón de fondo tecnológico -->
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color:rgb(46, 12, 10);
            color: white;
            font-family: Arial, sans-serif;
        }

        .tech-pattern {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: radial-gradient(
                circle at 1px 1px,
                rgba(0, 247, 255, 0.1) 1px,
                transparent 0
            );
            background-size: 30px 30px;
            z-index: -1;
            pointer-events: none;
        }
        
        .site-header {
            background: rgba(0, 0, 0, 0.3);
            padding: 20px 0;
        }

        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-container img {
            max-width: 300px;
            height: auto;
        }

        .nav-container {
            display: flex;
            justify-content: center;
            gap: 40px;
            background: rgba(0, 0, 0, 0.4);
            padding: 15px;
            border-radius: 10px;
        }

        .nav-container a {
            color: #00f7ff;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 2px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .nav-container a:hover {
            color: white;
            text-shadow: 0 0 10px #00f7ff;
        }
    </style>
</head>
<body>
    <div class="tech-pattern"></div>
    <header class="site-header">
        <div class="header-content">
            <div class="logo-container">
                <img src="images/logohori.png" alt="<?php echo SITE_NAME; ?>">
            </div>
            <nav class="nav-container">
                <a href="index.php">INICIO</a>
                <a href="parques.php">PARQUES</a>
                <a href="servicios.php">SERVICIOS</a>
                <a href="contacto.php">CONTACTO</a>
            </nav>
        </div>
    </header>
    <main></main>