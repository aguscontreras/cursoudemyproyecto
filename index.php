<?php include_once 'includes/templates/header.php'; ?>

<section class="seccion contenedor">
  <h2>
    La mejor conferencia de Diseño Web en Español
  </h2>
  <p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eligendi officiis hic modi eaque eos nam non harum odio
    possimus quos fugit laboriosam similique, vel molestias delectus minus? Sint, maxime debitis.
  </p>
</section>
<!--seccion-->

<section class="programa">
  <div class="contenedor-video">
    <video autoplay loop poster="bg-talleres.jpg">
      <source src="video/video.mp4" type="video/mp4">
      <source src="video/video.webm" type="video/webm">
      <source src="video/video.ogv" type="video/ogg">
    </video>
  </div>
  <!--contenedor-video-->

  <div class="contenido-programa">
    <div class="contenedor">
      <div class="programa-evento">
        <h2>
          Programa del evento
        </h2>

        <nav class="menu-programa">
          <a href="#talleres"><i class="fas fa-code"></i>&ensp;Talleres</a>
          <a href="#conferencias"><i class="fas fa-comments"></i>&ensp;Conferencias</a>
          <a href="#seminarios"><i class="fas fa-university"></i>&ensp;Seminarios</a>
        </nav>

        <div id="talleres" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>HTML5, CSS3, JavaScript</h3>
            <p><i class="fas fa-clock"></i>&ensp;16:00 Hs</p>
            <p><i class="fas fa-calendar"></i>&ensp;10 de Diciembre</p>
            <p><i class="fas fa-user"></i>&ensp;Agustin Contreras</p>
          </div>
          <div class="detalle-evento">
            <h3>Responsive Web Design</h3>
            <p><i class="fas fa-clock"></i>&ensp;20:00 Hs</p>
            <p><i class="fas fa-calendar"></i>&ensp;10 de Diciembre</p>
            <p><i class="fas fa-user"></i>&ensp;Agustin Contreras</p>
          </div>

          <a href="#" class="button float-right">Ver todos</a>
        </div>
        <!--.info-curso-->
        <!--#talleres-->

        <div id="conferencias" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Cómo ser freelancer</h3>
            <p><i class="fas fa-clock"></i>&ensp;10:00 Hs</p>
            <p><i class="fas fa-calendar"></i>&ensp;10 de Diciembre</p>
            <p><i class="fas fa-user"></i>&ensp;Gregorio Sanchez</p>
          </div>
          <div class="detalle-evento">
            <h3>Tecnologías del futuro</h3>
            <p><i class="fas fa-clock"></i>&ensp;17:00 Hs</p>
            <p><i class="fas fa-calendar"></i>&ensp;10 de Diciembre</p>
            <p><i class="fas fa-user"></i>&ensp;Susan Sanchez</p>
          </div>

          <a href="#" class="button float-right">Ver todos</a>
        </div>
        <!--.info-curso-->
        <!--#talleres-->

        <div id="seminarios" class="info-curso ocultar clearfix">
          <div class="detalle-evento">
            <h3>Diseño UX/UX para móviles</h3>
            <p><i class="fas fa-clock"></i>&ensp;17:00 Hs</p>
            <p><i class="fas fa-calendar"></i>&ensp;11 de Diciembre</p>
            <p><i class="fas fa-user"></i>&ensp;Harold Garcia</p>
          </div>
          <div class="detalle-evento">
            <h3>Aprende a programar en una mañana</h3>
            <p><i class="fas fa-clock"></i>&ensp;10:00 Hs</p>
            <p><i class="fas fa-calendar"></i>&ensp;11 de Diciembre</p>
            <p><i class="fas fa-user"></i>&ensp;Susana Rivera</p>
          </div>

          <a href="#" class="button float-right">Ver todos</a>
        </div>
        <!--.info-curso-->
        <!--#talleres-->

      </div>
      <!--.programa-evento-->
    </div>
    <!--.contenedor-->
  </div>
  <!--.contenido-programa-->
</section>
<!--.programa-->

<section class="invitados contenedor seccion">
  <h2>
    Nuestros Invitados
  </h2>

  <ul class="lista-invitados clearfix">
    <li>
      <div class="invitado">
        <img src="img/invitado1.jpg" alt="Imagen Invitado">
        <p>Rafael Bautista</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado2.jpg" alt="Imagen Invitado">
        <p>Shari Herrera</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado3.jpg" alt="Imagen Invitado">
        <p>Gregorio Sanchez</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado4.jpg" alt="Imagen Invitado">
        <p>Susana Rivera</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado5.jpg" alt="Imagen Invitado">
        <p>Javier Garcia</p>
      </div>
    </li>
    <li>
      <div class="invitado">
        <img src="img/invitado6.jpg" alt="Imagen Invitado">
        <p>Susan Sanchez</p>
      </div>
    </li>
  </ul>
</section>

<div class="contador parallax">
  <div class="contenedor">
    <ul class="resumen-evento clearfix">
      <li>
        <p class="numero">0</p>Invitados
      </li>
      <li>
        <p class="numero">0</p>Talleres
      </li>
      <li>
        <p class="numero">0</p>Dias
      </li>
      <li>
        <p class="numero">0</p>Conferencias
      </li>
    </ul>
  </div>
</div>

<section class="precios seccion">
  <h2>Precios</h2>
  <div class="contenedor">
    <ul class="lista-precios clearfix">
      <li>
        <div class="tabla-precio">
          <h3>Pase por día</h3>
          <p class="numero">
            $30
          </p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>Todos los días</h3>
          <p class="numero">
            $50
          </p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button">Comprar</a>
        </div>
      </li>
      <li>
        <div class="tabla-precio">
          <h3>Pase por dos días</h3>
          <p class="numero">
            $45
          </p>
          <ul>
            <li>Bocadillos gratis</li>
            <li>Todas las conferencias</li>
            <li>Todos los talleres</li>
          </ul>
          <a href="#" class="button hollow">Comprar</a>
        </div>
      </li>
    </ul>
  </div>
</section>

<div class="mapa" id="mapa">

</div>

<section class="seccion">
  <h2>Testimoniales</h2>

  <div class="testimoniales contenedor clearfix">
    <div class="testimonial">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur iusto aut labore alias dolor facilis,
          voluptatem placeat, praesentium sit perferendis.
        </p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial">
          <cite>
            Osvaldo Aponte Escobedo <span>Diseñador en @prisma</span>
          </cite>
        </footer>
      </blockquote>
    </div>
    <div class="testimonial">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur iusto aut labore alias dolor facilis,
          voluptatem placeat, praesentium sit perferendis.
        </p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial">
          <cite>
            Osvaldo Aponte Escobedo <span>Diseñador en @prisma</span>
          </cite>
        </footer>
      </blockquote>
    </div>
    <div class="testimonial">
      <blockquote>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur iusto aut labore alias dolor facilis,
          voluptatem placeat, praesentium sit perferendis.
        </p>
        <footer class="info-testimonial clearfix">
          <img src="img/testimonial.jpg" alt="Imagen testimonial">
          <cite>
            Osvaldo Aponte Escobedo <span>Diseñador en @prisma</span>
          </cite>
        </footer>
      </blockquote>
    </div>
  </div>
</section>

<div class="newsletter parallax">
  <div class="contenido contenedor">
    <p>Registrate al newsletter</p>
    <h3>GDLWEBCAMP</h3>
    <a href="#" class="button transparente">Registro</a>
  </div>
</div>

<section class="seccion">
  <h2>Faltan</h2>
  <div class="cuenta-regresiva contenedor">
    <ul class="clearfix">
      <li>
        <p id="dias" class="numero"></p> días
      </li>
      <li>
        <p id="horas" class="numero"></p> horas
      </li>
      <li>
        <p id="minutos" class="numero"></p> minutos
      </li>
      <li>
        <p id="segundos" class="numero"></p> segundos
      </li>
    </ul>
  </div>
</section>

<?php include_once 'includes/templates/footer.php'; ?>





<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
</script>
<script src="js/plugins.js"></script>
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/jquery.lettering.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
  window.ga = function() {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>