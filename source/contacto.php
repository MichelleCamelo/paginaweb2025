<?php
require_once '../includes/config.php';
require_once '../includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <script defer src="../js/hamburgMenu.js"></script>
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <main class="space-background">


        <!-- Panel holográfico de contacto -->
        <article class="contact-panel">
            <div class="panel-content">
                <h1>CONTACTO</h1>

                <!-- Teléfonos -->
                <div class="contact-info">
                    <div class="phone-numbers">
                        BELLO: 3180000092<br>
                        NEIVA: 3180000093<br>
                        MOSQUERA: 3185586689<br>
                        BULEVAR: 3205807729<br>
                        ALTAVISTA: 3003998545<br>
                        HAYUELOS: 3178886661<br>
                        CALI: 3180000094<br>
                        PASEO DEL RIO: 3185333630<br>
                        MAYORCA: 3180000095<br>
                        MERCADEO: 3184079419
                    </div>

                    <div class="contact-email">
                        CORREO:<br>
                        MERCADEO@STARPARK.COM.CO
                    </div>

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
                </div>
            </div>
        </article>
    </main>
    <!-- Contenedor del footer -->
    <?php
    require_once '../includes/footer.php';
    // o include_once '../includes/footer.php';
    ?>
</body>

</html>