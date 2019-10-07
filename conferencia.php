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

  <section class="seccion contenedor">
    <h2>Galería de fotos</h2>

    <div class="galeria">
        <a href="img/galeria/01.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/01.jpg">
        </a>
        <a href="img/galeria/02.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/02.jpg">
        </a>
        <a href="img/galeria/03.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/03.jpg">
        </a>
        <a href="img/galeria/04.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/04.jpg">
        </a>
        <a href="img/galeria/05.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/05.jpg">
        </a>
        <a href="img/galeria/06.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/06.jpg">
        </a>
        <a href="img/galeria/07.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/07.jpg">
        </a>
        <a href="img/galeria/08.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/08.jpg">
        </a>
        <a href="img/galeria/09.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/09.jpg">
        </a>
        <a href="img/galeria/10.jpg" data-lightbox="galeria">
            <img src="img/galeria/thumbs/10.jpg">
        </a>
    </div>
  </section>
  <!-- .seccion -->

  <?php include_once 'includes/templates/footer.php'; ?>


  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')

  </script>
  <script src="js/plugins.js"></script>
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.lettering.js"></script>
  <script src="js/lightbox.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
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
