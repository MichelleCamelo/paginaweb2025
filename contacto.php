<?php
require_once 'includes/config.php';
require_once 'includes/header.php';
?>

<div class="space-background">
    <div class="contact-container">
        <div class="hologram-display">
            <!-- Logo corporativo -->
            <div class="logo-section">
                <img src="images/logohori.png" alt="Star Park" class="contact-logo">
            </div>

            <!-- Panel holográfico de contacto -->
            <div class="contact-panel">
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

                        <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                        <div class="success-message">
                            <p>¡Mensaje enviado con éxito! Pronto nos pondremos en contacto contigo.</p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Los estilos se mantienen igual, solo agregamos el estilo para el mensaje de éxito -->
<style>
/* Estilos anteriores... */

.success-message {
    background: rgba(0, 255, 0, 0.1);
    border: 1px solid #00ff00;
    color: #00ff00;
    padding: 15px;
    border-radius: 5px;
    margin-top: 20px;
    text-align: center;
}
</style>



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

.contact-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.hologram-display {
    background: rgba(0, 20, 40, 0.8);
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 0 30px rgba(0, 247, 255, 0.2);
    border: 1px solid rgba(0, 247, 255, 0.1);
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.logo-section {
    margin-bottom: 30px;
}

.contact-logo {
    max-width: 150px;
    height: auto;
}

.contact-panel {
    width: 100%;
    max-width: 800px;
    padding: 30px;
    background: rgba(0, 0, 0, 0.3);
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 247, 255, 0.15);
}

.panel-content h1 {
    color: #00f7ff;
    text-align: center;
    font-size: 2em;
    margin-bottom: 30px;
    text-shadow: 0 0 15px rgba(0, 247, 255, 0.5);
}

.contact-info {
    display: grid;
    grid-template-columns: 1fr;
    gap: 30px;
}

.phone-numbers, .contact-email {
    color: #00f7ff;
    font-size: 1em;
    line-height: 1.8;
    text-align: center;
}

.contact-form {
    margin-top: 30px;
}

.form-group {
    position: relative;
    margin-bottom: 20px;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px 15px;
    background: rgba(0, 0, 0, 0.3);
    border: 1px solid rgba(0, 247, 255, 0.2);
    border-radius: 5px;
    color: white;
    font-size: 1em;
    transition: all 0.3s ease;
}

.form-group textarea {
    height: 100px;
    resize: none;
}

.form-group input:focus,
.form-group textarea:focus {
    border-color: #00f7ff;
    box-shadow: 0 0 10px rgba(0, 247, 255, 0.2);
    outline: none;
}

.form-group label {
    position: absolute;
    left: 15px;
    top: 10px;
    color: rgba(255, 255, 255, 0.6);
    transition: all 0.3s ease;
    pointer-events: none;
}

.form-group input:focus + label,
.form-group input:valid + label,
.form-group textarea:focus + label,
.form-group textarea:valid + label {
    top: -10px;
    left: 10px;
    font-size: 0.8em;
    color: #00f7ff;
    background: rgba(0, 20, 40, 0.8);
    padding: 0 5px;
}

.submit-btn {
    width: 100%;
    padding: 15px;
    background: transparent;
    border: 2px solid #00f7ff;
    color: #00f7ff;
    font-size: 1.1em;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.submit-btn:hover {
    background: #00f7ff;
    color: #000;
    box-shadow: 0 0 20px rgba(0, 247, 255, 0.4);
}

@media (max-width: 768px) {
    .hologram-display {
        padding: 20px;
    }

    .contact-panel {
        padding: 20px;
    }

    .phone-numbers, .contact-email {
        font-size: 0.9em;
    }
}

@keyframes twinkle {
    from { background-position: 0 0, 40px 60px, 130px 270px; }
    to { background-position: -550px 0, -350px 60px, -250px 270px; }
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

<!-- Agregar estos estilos -->
<style>
.message-box {
    padding: 15px;
    border-radius: 5px;
    margin: 20px 0;
    text-align: center;
}

.message-box.success {
    background: rgba(0, 255, 0, 0.1);
    border: 1px solid #00ff00;
    color: #00ff00;
}

.message-box.error {
    background: rgba(255, 0, 0, 0.1);
    border: 1px solid #ff0000;
    color: #ff0000;
}
</style>