
<?php
		 
 
	  session_start();
	 
	  //Define Language file paths
	  define("LANG_ES_PATH", $_SERVER['DOCUMENT_ROOT'] . 'camelot/includes/lang/es/');
	  define("LANG_EN_PATH", $_SERVER['DOCUMENT_ROOT'] . 'camelot/includes/lang/en/');
	  
	  if (isset($_GET['lang'])) {
		 
		// GET request found
	 
		if ($_GET['lang'] == 'es') {
		   
		  // asked for the language 'es' so include the 'de.php' file
		  include LANG_ES_PATH . 'es.php';
		  $_SESSION['lang'] = 'es';
		} else {
	 
		  // if not asked for 'es', include 'en.php' as default
		  include LANG_EN_PATH . '/en.php';
		  $_SESSION['lang'] = 'en';
		}
	  } else if (isset($_SESSION['lang'])) {
	 
		//SESSION variable found
	 
		if ($_SESSION['lang'] == 'es') {
	 
		  // language already set to 'es', so include 'de.php'
		  include LANG_ES_PATH . '/es.php';
		} else {
	 
		  // SESSION variable not set to 'es', so include 'en.php' by default
		  include LANG_EN_PATH . '/en.php';
		}
	  } else {
		 
		// SESSION varibale not set, so set it to 'en' and include 'en.php' by default
		include LANG_EN_PATH . 'en.php';
		$_SESSION['lang'] = 'en';
	  }
	  
	?>
	
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include './includes/header.php';  ?>
</head>
<body>
  <!-- Navigation -->
  
  
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('./images/slide/0000.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Cabañas</h3>
            <p>Patagonia camelot te ofrece todas las comodidades.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./images/slide/0001.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Club House</h3>
            <p> Juegos infantiles - Mesa de Ping Pong - Metegol</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./images/slide/0002.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3>Entorno</h3>
            <p>El entorno que rodea a patagonia camelot es imponente</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1>BIENVENIDOS A PATAGONIA CAMELOT.</h1>
      <p>Complejo de cuatro confortables cabañas. El lugar ideal para tus vacaciones o descanso de fin de semana.</p>
      <p>A solo 5 Km del Centro de Villa la Angostura. Rodeado por increíbles paisajes, bosques, montañas y el
        imponente lago Nahuel Huapi</p>
      <p>Con capacidad para 2, 4 y 6 personas. Hace tu reserva y disfrutade Villa la Angostura.</p>
    </div>

    <div class="container">
      <h4 class="my-4">EN CUALQUIER ESTACION, UN LUGAR INCREIBLE EN LO MEJOR DE VILLA LA ANGOSTURA</h4>

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./images/entorno_portada/0000.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>CABAÑAS</a>
              </h4>
              <p class="card-text">PATAGONIA CAMELOT TE OFRECE TODAS LAS COMODIDADES</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./images/entorno_portada/0001.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>CLUB HOUSE</a>
              </h4>
              <p class="card-text">EN UN LUGAR SOÑADO, A SOLO 6 KM DE VILLA LA ANGOSTURA</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./images/entorno_portada/0003.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a>ENTORNO</a>
              </h4>
              <p class="card-text">EL ENTORNO QUE RODEA A PATAGONIA CAMELOT ES IMPONENTE</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  <!-- Footer -->
  <footer class="py-5 bg-dark white">
    <div class="container">
      <div class="row text-white">
        <div class="col-sm-4 text-center">
          <img src="./images/ribbon sp.png">
          <img src="./images/logo_marca_agua.png">
        </div>
        <div class="col-sm-4 text-center">
          <address>
            <h3> Consultas y Reservas</h3>
            <br>Camino del cóndor 1055
            <br>Villa La Angostura
            <br>
          </address>
          <address>
            <span title="Phone">Tel:</span>
            (+5411) 4921-5900
            <br>
            <a>info@patagoniacamelot.com</a>
          </address>
        </div>

        <div class="col-sm-4 text-center">
          <address>
            <h3>Data Fiscal</h3> <br>
            <img src="./images/qrcode.jpg">
          </address>
        </div>

      </div>
      <p class="m-0 text-center text-white">@ 2018 Patagonia Camelot-Powered By <br>
        <a target="_blank" class="footLink" rel="nofollow" href="https://e-zero.com.ar/"> Copyright &copy;
          e-zero.com.ar</a></p>


    </div>
    <!-- /.container -->
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript" src="main.js"></script>
</body>

</html>