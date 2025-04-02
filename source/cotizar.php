<?php
require_once '../includes/config.php';
$use_carousel = false;
include_once '../includes/head.php';
?>

<main class="cotizar-space-background">
    <!-- barra navegacion -->
    <?php
    include_once '../includes/navbar.php';
    ?>
    <div class="cotizacion-container">
        <div class="hologram-panel">
            <div class="panel-header">
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
                                <img src="" alt="Cumpleaños">
                                <span>Cumpleaños</span>
                            </span>
                        </label>
                        <label class="service-option">
                            <input type="radio" name="tipo_evento" value="colegios">
                            <span class="option-content">
                                <img src="" alt="Colegios">
                                <span>Colegios</span>
                            </span>
                        </label>
                        <label class="service-option">
                            <input type="radio" name="tipo_evento" value="empresarial">
                            <span class="option-content">
                                <img src="" alt="Empresarial">
                                <span>Empresarial</span>
                            </span>
                        </label>
                        <label class="service-option">
                            <input type="radio" name="tipo_evento" value="infantil">
                            <span class="option-content">
                                <img src="" alt="Infantil">
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
</main>
<!-- Botones de whatsapp y dominick, lado derecho -->
<?php
// Incluye el aside
include_once '../includes/aside.php';
?>
<!-- Contenedor del footer -->
<?php
// Incluye el footer
include_once '../includes/footer.php';
?>