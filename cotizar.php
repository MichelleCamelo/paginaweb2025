<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<div class="space-background">
    <div class="cotizacion-container">
        <div class="hologram-panel">
            <div class="panel-header">
                <img src="images/logo-star-park.png" alt="Star Park" class="logo-small">
                <h1>COTIZA TU EVENTO</h1>
            </div>
            
            <form action="procesar_cotizacion.php" method="POST" class="cotizacion-form">
                <!-- Tipo de Evento -->
                <div class="form-section">
                    <h3>SELECCIONA TU EVENTO</h3>
                    <div class="service-options">
                        <label class="service-option">
                            <input type="radio" name="tipo_evento" value="cumpleanos">
                            <span class="option-content">
                                <img src="images/servicios/icon-cumpleanos.png" alt="Cumpleaños">
                                <span>Cumpleaños</span>
                            </span>
                        </label>
                        <label class="service-option">
                            <input type="radio" name="tipo_evento" value="colegios">
                            <span class="option-content">
                                <img src="images/servicios/icon-colegios.png" alt="Colegios">
                                <span>Colegios</span>
                            </span>
                        </label>
                        <label class="service-option">
                            <input type="radio" name="tipo_evento" value="empresarial">
                            <span class="option-content">
                                <img src="images/servicios/icon-empresarial.png" alt="Empresarial">
                                <span>Empresarial</span>
                            </span>
                        </label>
                        <label class="service-option">
                            <input type="radio" name="tipo_evento" value="infantil">
                            <span class="option-content">
                                <img src="images/servicios/icon-infantil.png" alt="Infantil">
                                <span>Infantil</span>
                            </span>
                        </label>
                    </div>
                </div>

                <!-- Información de Contacto -->
                <div class="form-section">
                    <h3>DATOS DE CONTACTO</h3>
                    <div class="form-grid">
                        <div class="input-group">
                            <input type="text" name="nombre" required>
                            <label>Nombre</label>
                        </div>
                        <div class="input-group">
                            <input type="text" name="apellido" required>
                            <label>Apellido</label>
                        </div>
                        <div class="input-group">
                            <input type="email" name="email" required>
                            <label>Email</label>
                        </div>
                        <div class="input-group">
                            <input type="tel" name="telefono" required>
                            <label>Teléfono</label>
                        </div>
                    </div>
                </div>

                <!-- Detalles del Evento -->
                <div class="form-section">
                    <h3>DETALLES DEL EVENTO</h3>
                    <div class="form-grid">
                        <div class="input-group">
                            <select name="sede" required>
                                <option value="">Selecciona una sede</option>
                                <option value="hayuelos">Hayuelos</option>
                                <option value="altavista">Altavista</option>
                                <option value="niza">Bulevar Niza</option>
                                <!-- Agregar más sedes -->
                            </select>
                        </div>
                        <div class="input-group">
                            <input type="date" name="fecha" required>
                            <label>Fecha del Evento</label>
                        </div>
                        <div class="input-group">
                            <input type="number" name="invitados" min="1" required>
                            <label>Número de Invitados</label>
                        </div>
                    </div>
                    <div class="input-group full-width">
                        <textarea name="comentarios" rows="4"></textarea>
                        <label>Comentarios Adicionales</label>
                    </div>
                </div>

                <button type="submit" class="submit-button">
                    <span>ENVIAR COTIZACIÓN</span>
                    <div class="button-effect"></div>
                </button>
            </form>
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

.cotizacion-container {
    max-width: 1000px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.hologram-panel {
    background: rgba(0, 20, 40, 0.8);
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 0 30px rgba(0, 247, 255, 0.2);
    border: 1px solid rgba(0, 247, 255, 0.1);
}

.panel-header {
    text-align: center;
    margin-bottom: 40px;
}

.panel-header h1 {
    color: #00f7ff;
    font-size: 2.5em;
    margin: 20px 0;
    text-shadow: 0 0 15px rgba(0, 247, 255, 0.5);
}

.form-section {
    margin-bottom: 40px;
}

.form-section h3 {
    color: #00f7ff;
    margin-bottom: 20px;
    font-size: 1.2em;
    letter-spacing: 2px;
}

.service-options {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

.service-option {
    cursor: pointer;
}

.service-option input[type="radio"] {
    display: none;
}

.option-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    background: rgba(0, 0, 0, 0.3);
    border: 2px solid rgba(0, 247, 255, 0.2);
    border-radius: 10px;
    transition: all 0.3s ease;
}

.service-option input[type="radio"]:checked + .option-content {
    background: rgba(0, 247, 255, 0.1);
    border-color: #00f7ff;
    box-shadow: 0 0 20px rgba(0, 247, 255, 0.3);
}

.option-content img {
    width: 60px;
    height: 60px;
    margin-bottom: 10px;
}

.option-content span {
    color: white;
    font-size: 1.1em;
}

.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}

.input-group {
    position: relative;
    margin-bottom: 20px;
}

.input-group input,
.input-group select,
.input-group textarea {
    width: 100%;
    padding: 10px 15px;
    background: rgba(0, 0, 0, 0.3);
    border: 1px solid rgba(0, 247, 255, 0.2);
    border-radius: 5px;
    color: white;
    font-size: 1em;
    transition: all 0.3s ease;
}

.input-group input:focus,
.input-group select:focus,
.input-group textarea:focus {
    border-color: #00f7ff;
    box-shadow: 0 0 10px rgba(0, 247, 255, 0.2);
    outline: none;
}

.input-group label {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: rgba(255, 255, 255, 0.6);
    transition: all 0.3s ease;
    pointer-events: none;
}

.input-group input:focus + label,
.input-group input:valid + label {
    top: -10px;
    left: 10px;
    font-size: 0.8em;
    color: #00f7ff;
    background: rgba(0, 20, 40, 0.8);
    padding: 0 5px;
}

.full-width {
    grid-column: 1 / -1;
}

.submit-button {
    width: 100%;
    padding: 15px 30px;
    background: transparent;
    border: 2px solid #00f7ff;
    color: #00f7ff;
    font-size: 1.2em;
    letter-spacing: 2px;
    border-radius: 5px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
}

.submit-button:hover {
    background: #00f7ff;
    color: #000;
    box-shadow: 0 0 20px rgba(0, 247, 255, 0.4);
}

.button-effect {
    position: absolute;
    background: rgba(0, 247, 255, 0.2);
    transform: translate(-50%, -50%);
    pointer-events: none;
    border-radius: 50%;
    animation: ripple 1s linear infinite;
}

@keyframes ripple {
    0% {
        width: 0px;
        height: 0px;
        opacity: 0.5;
    }
    100% {
        width: 500px;
        height: 500px;
        opacity: 0;
    }
}

@media (max-width: 768px) {
    .hologram-panel {
        padding: 20px;
    }

    .service-options {
        grid-template-columns: 1fr;
    }

    .panel-header h1 {
        font-size: 1.8em;
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