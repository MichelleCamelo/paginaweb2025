<?php
require_once '../includes/config.php';
$use_carousel = false;
include_once '../includes/head.php';
?>
<div class="contacto-space-background">
    <!-- barra navegacion -->
    <?php
    include_once '../includes/navbar.php';
    ?>
    <main class="contact-panel">
        <section class="informacion-contacto">
            <!-- Panel de información con el personaje espacial -->
            <h1>CONTACTO</h1>
            <div class="info-container">
                <!-- Estructura con imagen de monitor y texto superpuesto -->
                <div class="monitor-container">
                    <img src="../images/fotos/contactos/imagenes/domink_computador.png" alt="Personaje con monitor">

                    <!-- Texto superpuesto en la pantalla -->
                    <div class="screen-overlay">
                        <div class="contact-info">
                            <p>Bello: <span>3118080092</span></p>
                            <p>Neiva: <span>3118080091</span></p>
                            <p>Hayuelos: <span>3202325689</span></p>
                            <p>Bulevar: <span>3208587729</span></p>
                            <p>Mosquera: <span>3112470566</span></p>
                            <p>Cali: <span>3118080084</span></p>
                            <p>Paseo del río: <span>3102326520</span></p>
                            <p>Mayorca: <span>3118080092</span></p>
                            <p>Mercadeo: <span>3118090610</span></p>
                            <p>correo: <span>Mercadeo@starpark.com.co</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="trabaja-con-nosotros">
            <img src="../images/fotos/contactos/imagenes/trabaja_con_nosotros.png" alt="Trabaja con nosotros" class="trabaja-banner">
        </section>

        <section class="formulario-contacto">
            <!-- Contenedor con imagen de fondo del formulario -->
            <div class="form-outer-container">
                <img src="../images/fotos/contactos/imagenes/formulario.png" alt="Fondo formulario" class="form-bg-image">
                <div class="form-container">
                    <!-- Campos del formulario -->
                    <form action="https://formsubmit.co/sistemasjoangomez@gmail.com" method="POST" class="contact-form">
                        <!-- Campos ocultos de configuración -->
                        <input type="hidden" name="_next" value="http://localhost/starpark/contacto.php?status=success">
                        <input type="hidden" name="_subject" value="Nuevo contacto desde Star Park Web">
                        <input type="hidden" name="_template" value="box">

                        <div class="form-group">
                            <div class="input-icon">
                                <img src="../images/fotos/contactos/imagenes/nombre.png" alt="Nombre icono">
                                <input type="text" name="nombre" required>
                                <label>Nombre</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-icon">
                                <img src="../images/fotos/contactos/imagenes/apellido.png" alt="Apellido icono">
                                <input type="text" name="apellido" required>
                                <label>Apellido</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-icon">
                                <img src="../images/fotos/contactos/imagenes/email.png" alt="Email icono">
                                <input type="email" name="email" required>
                                <label>Email</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-icon">
                                <img src="../images/fotos/contactos/imagenes/direccion.png" alt="Direccion icono">
                                <input type="text" name="direccion" required>
                                <label>Dirección</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-icon">
                                <img src="../images/fotos/contactos/imagenes/telefono.png" alt="Telefono icono">
                                <input type="tel" name="telefono" required>
                                <label>Número telefónico</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-icon">
                                <img src="../images/fotos/contactos/imagenes/comentarios.png" alt="Comentarios icono">
                                <textarea name="comentarios" required></textarea>
                                <label>Comentarios</label>
                            </div>
                        </div>

                        <div class="form-terms">
                            <input type="checkbox" id="terminos" name="terminos" required>
                            <label for="terminos">Acepto los términos y condiciones</label>
                            <div><a href="#">Ver Términos de Uso</a></div>
                        </div>

                        <button type="submit" class="register-btn">REGISTRAR</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Mensaje de éxito o error -->
        <?php if (isset($_GET['status'])): ?>
            <div class="message-box <?php echo $_GET['status']; ?>">
                <?php if ($_GET['status'] === 'success'): ?>
                    <p>¡Mensaje enviado con éxito! Pronto nos pondremos en contacto contigo.</p>
                <?php else: ?>
                    <p>Hubo un error al enviar el mensaje. Por favor, intenta nuevamente.</p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </main>
</div>
<!-- Footer de la pagina -->
<?php
// Incluye el footer
include_once '../includes/footer.php';
?>