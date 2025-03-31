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
            <!-- Informacion de los contactos -->
            <h1>CONTACTO</h1>
            <img src="../images/fotos/contactos/imagenes/domink_computador.png" alt="Informacion de contacto">

        </section>
        <section class="formulario-contacto">
            <!-- Formulario con FormSubmit -->
            <form action="https://formsubmit.co/sistemasjoangomez@gmail.com" method="POST" class="contact-form">
                <!-- Campos ocultos de configuración -->
                <input type="hidden" name="_next" value="http://localhost/starpark/contacto.php?status=success">
                <input type="hidden" name="_subject" value="Nuevo contacto desde Star Park Web">
                <input type="hidden" name="_template" value="box">

                <div class="form-group">
                    <input type="text" name="nombre" required>
                    <label>Nombre</label>
                </div>

                <div class="form-group">
                    <input type="text" name="apellido" required>
                    <label>Apellido</label>
                </div>

                <div class="form-group">
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>

                <div class="form-group">
                    <input type="tel" name="telefono" required>
                    <label>Teléfono (Celular)</label>
                </div>

                <div class="form-group">
                    <textarea name="comentarios" required></textarea>
                    <label>Comentarios</label>
                </div>

                <button type="submit" class="submit-btn">Enviar</button>
            </form>
        </section>
        <!-- Agregar esto después del formulario -->
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
</div>
<!-- Footer de la pagina -->
<?php
// Incluye el footer
include_once '../includes/footer.php';
?>