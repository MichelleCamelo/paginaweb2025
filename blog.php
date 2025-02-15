<?php
require_once 'includes/header.php';
?>

<div class="space-background">
   <div class="blog-container">
       <!-- Navegación del blog -->
       <nav class="blog-nav">
           <a href="#" class="active">Todos los artículos</a>
           <a href="#">Niños Felices y Sanos</a>
           <a href="#">Conoce tu planeta de emociones</a>
           <a href="#">¡Solo por este mes!</a>
       </nav>

       <!-- Grid de posts -->
       <div class="posts-grid">
           <!-- Post con imagen -->
           <article class="post-card">
               <img src="images/blog/mundial.jpg" alt="Mundial Star Park">
               <div class="post-content">
                   <h2>El mundial también se siente en Star Park!</h2>
                   <p>Reúnete en nuestra sede Star Park Neiva, y sumérgete en la emoción de Star Park y el mundial...</p>
                   <div class="post-actions">
                       <a href="#" class="read-more">Leer más</a>
                   </div>
               </div>
           </article>

           <!-- Post con video -->
           <article class="post-card">
               <div class="video-container">
                   <iframe src="VIDEO_URL" frameborder="0" allowfullscreen></iframe>
               </div>
               <div class="post-content">
                   <h2>Nuevo Star Park C.C. Mayorca</h2>
                   <p>Porque tú lo has pedido ahora nuestra diversión aterriza en CC Mayorca...</p>
               </div>
           </article>

           <!-- Más posts similares -->
       </div>
   </div>
</div>

<style>
.space-background {
   background: linear-gradient(180deg, #010b1a 0%, #041530 100%);
   min-height: 100vh;
   padding: 20px;
}

.blog-container {
   max-width: 1200px;
   margin: 0 auto;
}

.blog-nav {
   background: rgba(25, 12, 97, 0.8);
   padding: 15px;
   border-radius: 10px;
   display: flex;
   justify-content: center;
   gap: 30px;
   margin-bottom: 40px;
}

.blog-nav a {
   color: white;
   text-decoration: none;
   padding: 8px 16px;
   border-radius: 5px;
   transition: all 0.3s ease;
}

.blog-nav a.active,
.blog-nav a:hover {
   background: rgba(0, 247, 255, 0.2);
   color: #00f7ff;
}

.posts-grid {
   display: grid;
   grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
   gap: 30px;
}

.post-card {
   background: rgba(25, 12, 97, 0.8);
   border-radius: 15px;
   overflow: hidden;
   transition: transform 0.3s ease;
}

.post-card:hover {
   transform: translateY(-5px);
}

.post-card img {
   width: 100%;
   height: 200px;
   object-fit: cover;
}

.video-container {
   position: relative;
   padding-bottom: 56.25%;
   height: 0;
}

.video-container iframe {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
}

.post-content {
   padding: 20px;
}

.post-content h2 {
   color: #00f7ff;
   font-size: 1.5em;
   margin-bottom: 10px;
}

.post-content p {
   color: white;
   margin-bottom: 20px;
}

.post-actions {
   display: flex;
   justify-content: flex-end;
}

.read-more {
   color: #00f7ff;
   text-decoration: none;
   padding: 8px 16px;
   border: 1px solid #00f7ff;
   border-radius: 5px;
   transition: all 0.3s ease;
}

.read-more:hover {
   background: rgba(0, 247, 255, 0.1);
   box-shadow: 0 0 10px rgba(0, 247, 255, 0.2);
}

@media (max-width: 768px) {
   .blog-nav {
       flex-direction: column;
       text-align: center;
   }
   
   .posts-grid {
       grid-template-columns: 1fr;
   }
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