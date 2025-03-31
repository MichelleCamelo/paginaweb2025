<?php
require_once '../includes/config.php';
$use_carousel = false;
include_once '../includes/head.php';
?>
<div class="servicio-space-background">
    <!-- barra navegacion -->
    <?php
    include_once '../includes/navbar.php';
    ?>
    <!-- contenedor principal con la imagen y formulario -->
    <main class="main-container-servicio">
        <section class="servicio-left">
            <img src="../images/fotos/servicio_al_cliente/imagenes/informacion.png" alt="Información">
        </section>

        <section class="servicio-right">
            <div class="form-container">
                <h2>Servicio al <br> cliente</h2>

                <form class="contactForm" action="procesar_formulario.php" method="post">
                    <div class="form-group">
                        <label for="nombre"><i class="fa-regular fa-user"></i></i></i></label>
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                    </div>

                    <div class="form-group">
                        <label for="email"><i class="fa-solid fa-envelope"></i></label>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="telefono"><i class="fa-solid fa-phone"></i></label>
                        <input type="tel" id="telefono" name="telefono" placeholder="Número telefónico" required>
                    </div>

                    <div class="form-group">
                        <label for="ubicacion"><i class="fa-solid fa-location-dot"></i></label>
                        <select id="ubicacion" name="ubicacion" required>
                            <option value="" disabled selected>Ubicación del parque</option>
                            <option value="altavista">Altavista</option>
                            <option value="bulevar_niza">Bulevar Niza</option>
                            <option value="hayuelos">Hayuelos</option>
                            <option value="paseo_villa_del_rio">Paseo Villa del Río</option>
                            <option value="bello">Bello</option>
                            <option value="cali">Cali</option>
                            <option value="mayorca">Mayorca</option>
                            <option value="mosquera">Mosquera</option>
                            <option value="neiva">Neiva</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="descripcion"><i class="fa-solid fa-comment-dots"></i></label>
                        <textarea id="descripcion" name="descripcion" placeholder="Descripción" rows="4" required></textarea>
                    </div>

                    <div class="form-submit">
                        <button type="submit">ENVIAR</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</div>
<!-- Botones de whatsapp y dominick, lado derecho -->
<?php
// Incluye el aside
include_once '../includes/aside.php';
?>
<?php
// Incluye el footer
include_once '../includes/footer.php';
?>