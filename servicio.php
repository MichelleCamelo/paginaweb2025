<?php
require_once 'includes/header.php';
?>

<div class="space-background">
    <div class="main-container">
        <!-- Logo y navegación -->
        <div class="logo-container">
            <img src="images/logohori.png" alt="Star Park" class="main-logo">
            <nav class="main-nav">
                <a href="inicio.php">INICIO</a>
                <a href="parques.php">PARQUES</a>
                <a href="servicios.php">SERVICIOS</a>
                <a href="contacto.php">CONTACTO</a>
            </nav>
        </div>

        <!-- Contenido principal -->
        <div class="service-content">
            <div class="service-header">
                <h1>QUEREMOS CONOCER TU OPINIÓN</h1>
                <p>DILIGENCIA EL FORMULARIO Y TE RESPONDEREMOS LO ANTES POSIBLE</p>
            </div>

            <div class="form-container">
                <form action="procesar_servicio.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombre" required>
                        <label for="nombre">Nombre</label>
                    </div>

                    <div class="form-group">
                        <input type="email" name="email" id="email" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="form-group">
                        <input type="tel" name="telefono" id="telefono" required>
                        <label for="telefono">Número telefónico</label>
                    </div>

                    <div class="form-group">
                        <select name="sede" id="sede" required>
                            <option value="" disabled selected>Selecciona una sede</option>
                            <option value="Hayuelos">Hayuelos</option>
                            <option value="Bulevar">Bulevar</option>
                            <!-- Agregar más sedes -->
                        </select>
                    </div>

                    <div class="form-group">
                        <textarea name="descripcion" id="descripcion" required></textarea>
                        <label for="descripcion">Describe los hechos que te motivaron</label>
                    </div>

                    <button type="submit">ENVIAR</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
.space-background {
    background: linear-gradient(180deg, #010b1a 0%, #041530 100%);
    min-height: 100vh;
    padding: 40px;
}

.main-container {
    max-width: 1200px;
    margin: 0 auto;
}

.logo-container {
    text-align: center;
    margin-bottom: 40px;
}

.main-logo {
    max-width: 300px;
    margin-bottom: 20px;
}

.main-nav {
    background: rgba(0, 247, 255, 0.1);
    padding: 15px;
    border-radius: 10px;
    display: flex;
    justify-content: center;
    gap: 40px;
}

.main-nav a {
    color: #00f7ff;
    text-decoration: none;
    font-size: 1.2em;
    transition: all 0.3s ease;
}

.main-nav a:hover {
    color: white;
    text-shadow: 0 0 10px #00f7ff;
}

.service-content {
    background: rgba(0, 20, 40, 0.8);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 0 30px rgba(0, 247, 255, 0.1);
}

.service-header {
    text-align: center;
    margin-bottom: 40px;
}

.service-header h1 {
    color: #00f7ff;
    font-size: 2em;
    margin-bottom: 10px;
}

.form-container {
    max-width: 600px;
    margin: 0 auto;
}

.form-group {
    margin-bottom: 20px;
    position: relative;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px;
    background: rgba(0, 0, 0, 0.3);
    border: 1px solid rgba(0, 247, 255, 0.2);
    border-radius: 8px;
    color: white;
    font-size: 1em;
}

.form-group textarea {
    height: 150px;
    resize: vertical;
}

.form-group label {
    position: absolute;
    left: 12px;
    top: 12px;
    color: rgba(255, 255, 255, 0.6);
    transition: all 0.3s ease;
    pointer-events: none;
}

button {
    width: 100%;
    padding: 15px;
    background: transparent;
    border: 2px solid #00f7ff;
    color: #00f7ff;
    font-size: 1.2em;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
}

button:hover {
    background: rgba(0, 247, 255, 0.1);
    box-shadow: 0 0 20px rgba(0, 247, 255, 0.2);
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
            <a href="servicio.php">Servicio al Cliente</a>
        </li>
        <li>
            <a href="blog.php">Blog</a>
        </li>
    </ul>
</section>