<?php
require_once 'includes/config.php';
// require_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="./css/tratamientoDatos.css?v=<?php echo time(); ?>">
    <script defer src="hamburgMenu.js"></script>
    <title><?php echo SITE_NAME; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <div class="space-background">
        <nav class="navigation-container">
            <a href="index.php">
                <img src="images/fotos/Parques/botones/starpark.png" alt="LogoStarPark">
            </a>
            <div class="hamburger-menu">
                <i class="fa-sharp fa-solid fa-bars"></i>
            </div>
        </nav>

        <div class="sidebar-menu">
            <div class="close-btn">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="parques.php">Parques</a></li>
                <li><a href="servicios.php">Servicios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
            </ul>
        </div>
        <div class="overlay"></div>
        <div class="privacy-container">
            <div class="privacy-header">
                <img src="images/fotos/tratamiento_de_datos/imagenes/Mesa_de_trabajo.png" alt="Img Tratamiento de datos">
            </div>

            <div class="privacy-content">
                <section class="policy-section">
                    <h2>1. IDENTIFICACIÓN DEL RESPONSABLE DEL TRATAMIENTO DE LA INFORMACIÓN:</h2>
                    <p>Star Park en adelante LA EMPRESA: con personería jurídica, autonomía administrativa y financiera
                        y patrimonio propio.</p>
                    <ul>
                        <li>Dirección: Colombia/ Suramerica</li>
                        <li>Conmutador: 2263100</li>
                        <li>Centro de Contacto: 2263100</li>
                        <li>Correo electrónico judicial: Ecoplaza@starpark.com.co</li>
                    </ul>
                </section>

                <section class="policy-section">
                    <h2>2. FINALIDADES Y TRATAMIENTO AL CUAL SERÁN SOMETIDOS LOS DATOS PERSONALES:</h2>
                    <p>Los datos personales que la EMPRESA recolecta, almacena, use, circule y suprima, serán utilizados
                        para alguna de las siguientes finalidades:</p>

                    <div class="subsection">
                        <h3>2.1. En relación con la naturaleza y las funciones propias de La empresa:</h3>
                        <p>El Tratamiento de los datos se realizará con la finalidad de hacer contacto de tipo comercial
                            a personas interesadas en adquirir los servicios de recreación y fiestas infantiles que
                            ofrece la empresa</p>

                        <h3>2.2. En relación con el funcionamiento de la Empresa</h3>

                        <div class="policy-item">
                            <h4>2.2.1. Recurso Humano:</h4>
                            <p>El Tratamiento de los datos se realizará para la vinculación, desempeño de funciones o
                                prestación de servicios, retiro o terminación, dependiendo del tipo de relación jurídica
                                entablada con la Empresa (incluye, entre otros, funcionarios, ex funcionarios
                                judicantes, practicantes y aspirantes a cargos).</p>
                        </div>

                        <div class="policy-item">
                            <h4>2.2.2. Proveedores y Contratistas:</h4>
                            <p>El Tratamiento de los datos se realizará para los fines relacionados con el desarrollo el
                                proceso de gestión contractual de productos o servicios que la Empresa requiera para su
                                funcionamiento de acuerdo a la normatividad vigente.</p>
                        </div>

                        <div class="policy-item">
                            <h4>2.2.3. Seguridad en instalaciones:</h4>
                            <p>El Tratamiento se realizará para la vigilancia y seguridad de las personas, los bienes e
                                instalaciones de la Empresa.</p>
                        </div>
                    </div>
                </section>

                <section class="policy-section">
                    <h2>3. DERECHOS DE LOS TITULARES:</h2>
                    <ul class="rights-list">
                        <li>Conocer, actualizar y rectificar sus datos personales</li>
                        <li>Solicitar prueba de la autorización otorgada</li>
                        <li>Ser informado respecto del uso de sus datos personales</li>
                        <li>Presentar quejas ante la Superintendencia de Industria y Comercio</li>
                        <li>Revocar la autorización y/o solicitar la supresión del dato</li>
                        <li>Acceder en forma gratuita a sus datos personales</li>
                    </ul>
                </section>

                <section class="policy-section">
                    <h2>4. DATOS SENSIBLES:</h2>
                    <p>El Titular tiene derecho a optar por no suministrar cualquier información sensible solicitada por
                        la Empresa, relacionada, entre otros, con datos sobre su origen racial o étnico, la pertenencia
                        a sindicatos, organizaciones sociales o de derechos humanos, convicciones políticas, religiosas,
                        de la vida sexual, biométricos o datos de salud.</p>
                </section>

                <section class="policy-section">
                    <h2>5. DATOS DE MENORES DE EDAD:</h2>
                    <p>El suministro de los datos personales de menores de edad es facultativo y debe realizarse con
                        autorización de los padres de familia o representantes legales del menor.</p>
                </section>

                <section class="policy-section">
                    <h2>6. AUTORIZACIÓN DEL TITULAR:</h2>
                    <p>Sin perjuicio de las excepciones previstas en la ley, en el Tratamiento se requiere la
                        autorización previa, expresa e informada del Titular, la cual deberá ser obtenida por cualquier
                        medio que pueda ser objeto de consulta y verificación posterior.</p>
                </section>

                <section class="policy-section">
                    <h2>7. CASOS EN QUE NO SE REQUIERE LA AUTORIZACIÓN:</h2>
                    <ul>
                        <li>Información requerida por la Empresa en ejercicio de sus funciones legales o por orden
                            judicial.</li>
                        <li>Datos de naturaleza pública.</li>
                        <li>Casos de urgencia médica o sanitaria.</li>
                        <li>Tratamiento de información autorizado por la ley para fines históricos, estadísticos o
                            científicos.</li>
                        <li>Datos relacionados con el Registro Civil de las Personas.</li>
                    </ul>
                </section>

                <section class="policy-section">
                    <h2>8. ATENCIÓN DE PETICIONES, CONSULTAS Y RECLAMOS:</h2>
                    <div class="contact-info">
                        <p>Para realizar peticiones, consultas o reclamos:</p>
                        <ul>
                            <li>Conmutador: 2263100</li>
                            <li>Correo electrónico: comunicacion@starpark.com.co</li>
                        </ul>
                    </div>
                </section>

                <section class="policy-section">
                    <h2>9. PROCEDIMIENTO PARA EJERCER LOS DERECHOS:</h2>
                    <div class="subsection">
                        <h3>9.1. Consultas</h3>
                        <p>Se absolverán en un término máximo de diez (10) días hábiles contados a partir de la fecha de
                            su recibo.</p>

                        <h3>9.2. Reclamos</h3>
                        <p>Los Titulares podrán presentar un reclamo que deberá contener:</p>
                        <ul>
                            <li>Nombre e identificación del Titular</li>
                            <li>La descripción de los hechos</li>
                            <li>La dirección de contacto</li>
                            <li>Los documentos y pruebas correspondientes</li>
                        </ul>
                    </div>
                </section>

                <section class="policy-section">
                    <h2>10. VIGENCIA:</h2>
                    <p>La presente política rige a partir de su expedición y las bases de datos se mantendrán vigentes
                        mientras resulte necesario para las finalidades establecidas.</p>
                </section>
            </div>
        </div>
    </div>
    <!-- Botones de whatsapp y dominick, lado derecho -->
    <aside class="enlaces-derecha">
        <a href="https://wa.me/573118090610" class="whatsapp" target="_blank">
            <img src="images/fotos/Home/Botones/whatsapp.png" alt="WhatsApp">
        </a>
        <a href="#" class="dominik-icon" target="_blank">
            <img src="images/fotos/Home/Botones/dominik.png" alt="Dominick">
        </a>
    </aside>
    <!-- Footer -->
    <footer class="de-interes">
        <section class="enlaces">
            <img src="images/fotos/Home/Botones/de_interes.png" alt="De interés">
            <ul>
                <li><a href="preguntasfrecuentes.php">Preguntas frecuentes</a></li>
                <li><a href="nuestraempresa.php">Nuestra Empresa</a></li>
                <li><a href="servicio.php">Servicio al cliente</a></li>
                <li><a href="blog.php">Blog</a></li>
            </ul>
        </section>
        <section class="redes">
            <img src="images/fotos/Home/Botones/redes_sociales.png" alt="Redes sociales">
            <div class="redes-sociales">
                <a href="#"><img src="images/fotos/Home/Botones/facebook.png" alt="Facebook"></a>
                <a href="#"><img src="images/fotos/Home/Botones/instagram.png" alt="Instagram"></a>
                <a href="#"><img src="images/fotos/Home/Botones/tiktok.png" alt="TikTok"></a>
            </div>
        </section>
        <section class="normatividad">
            <img src="images/fotos/Home/Botones/normatividad.png" alt="Normatividad">
            <ul>
                <li><a href="politica.php">Política tratamiento de datos</a></li>
            </ul>
        </section>
    </footer>
</body>

</html>