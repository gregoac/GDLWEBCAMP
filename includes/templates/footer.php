<footer class="site-footer">
    <div class="contenedor clearfix contenido">
      <div class="footer-informacion">
        <h3>Sobre <span>GdlwebCamp</span></h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque obcaecati ipsam necessitatibus totam nam
          tempore voluptatibus quos. Eius earum quis molestiae nihil iure dolorem sequi ea, debitis, provident ipsum
          tempora. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum laboriosam provident modi inventore
          ipsa nihil iure, necessitatibus temporibus soluta vero veritatis quam, repellendus quisquam accusantium cumque
          ratione hic asperiores adipisci?</p>
      </div>

      <div class="ultimos-tweets">
        <h3>Últimos <span>Tweets</span></h3>
        <ul>
          <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum aspernatur sequi odio. Esse quia vel
            ipsa rem labore quaerat iure aliquid quasi quibusdam? Deleniti officia dolor ipsa atque aliquid aliquam!
          </li>
          <li>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum aspernatur sequi odio. Esse quia vel
            ipsa rem labore quaerat iure aliquid quasi quibusdam? Deleniti officia dolor ipsa atque aliquid aliquam!
          </li>
        </ul>
      </div>

      <div class="menu">
        <h3>Redes <span>Sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-pinterest-p"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </nav>

      </div>
    </div>

    <p class="copyright">Todos los derechos Reservados GDLWEBCAMP 2020 &copy;</p>

  </footer>

  <script src="js/vendor/modernizr-3.8.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.4.1.min.js"><\/script>')

  </script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.js"></script>
  <script src="js/jquery.countdown.js"></script>
  <script src="js/jquery.lettering.js"></script>

  <?php 
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados' || $pagina == 'index') {
      echo '<script src="js/jquery.colorbox.js"></script>';
    } else if($pagina == 'conferencias') {
      echo '<script src="js/lightbox.js"></script>';
    }
    ?>

  <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
    integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
    crossorigin=""></script>
  <script src="js/map.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('set', 'transport', 'beacon');
    ga('send', 'pageview')

  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>