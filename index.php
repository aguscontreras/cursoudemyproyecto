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

        <?php
        try {
          //code...
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT * FROM `categoria_evento` ";
          $resultado = $conn->query($sql);
        } catch (\Exception $e) {
          //throw $th;
          echo $e->getMessage();
        }
        ?>

        <nav class="menu-programa">
          <?php while ($cat = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
            <?php $categoria = $cat['cat_evento']; ?>
            <a href="#<?php echo strtolower($categoria) ?>">
              <i class="fas <?php echo $cat['icono']; ?>"></i> <?php echo $categoria; ?>
            </a>
          <?php } ?>
        </nav>

        <?php
        try {
          //code...
          require_once('includes/funciones/bd_conexion.php');
          $sql = "SELECT id_evento, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
          $sql .= " FROM eventos";
          $sql .= " INNER JOIN categoria_evento ";
          $sql .= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
          $sql .= " INNER JOIN invitados ";
          $sql .= " ON eventos.id_inv = invitados.id_invitado ";
          $sql .= "AND eventos.id_cat_evento = 1 ";
          $sql .= " ORDER BY id_evento LIMIT 2 ";
          $resultado = $conn->query($sql);
        } catch (\Exception $e) {
          //throw $th;
          echo $e->getMessage();
        }
        ?>

        <?php $eventos = $resultado->fetch_assoc(); ?>

        <pre>
          <?php var_dump($eventos); ?>
        </pre>

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

<?php include_once 'includes/templates/invitados.php'; ?>


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