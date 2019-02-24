<?php include "config.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include './includes/header.php';  ?>
</head>

<body ng-app="myApp">

  <!-- Navigation -->
  <?php include './includes/navbar.php';  ?>
  <header>
    &nbsp;<br><br>
  </header>

  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1><?php echo	$LANG['Servicios_titulo']?></h1>
      <p>.</p>

    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 portfolio-item">
          <ul class="list-group">

            <li class="list-group-item"><img src="./images/icons/icons8-wi-fi-logo-60.png"><?php echo	$LANG['Wi_Fi']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-weber-60.png"><?php echo	$LANG['PARRILLA_INDIVIDUAL']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-tv-60.png"><?php echo	$LANG['TV_SATELITAL']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-towel-60.png"><?php echo	$LANG['ROPA_DE_CAMA_Y_BAÑO']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-swimming-pool-60.png"><?php echo	$LANG['PISCINA_CLIMATIZADA_EXTERIOR']?></li>
            <li class="list-group-item">
              <img src="./images/icons/icons8-bar-60.png"><?php echo	$LANG['SERVICIO_DE_BAR']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-safe-60.png"><?php echo	$LANG['CAJA_DE_SEGURIDAD']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-restaurant-60.png"><?php echo	$LANG['COMPLETO_EQUIPO_DE_VAJILLA_Y_COCINA']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-air-quality-60.png"><?php echo	$LANG['EXTRACTOR_DE_HUMO']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-cup-60.png"><?php echo	$LANG['BREAKFAST']?></li>

          </ul>
        </div>
        <div class="col-lg-6 col-sm-6 portfolio-item">
          <ul class="list-group">
            <li class="list-group-item"><img src="./images/icons/icons8-radio-60.png"><?php echo	$LANG['EQUIPO_CON_RADIO_Y_CD']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-microwave-60.png"><?php echo	$LANG['MICROONDAS']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-fridge-60.png"><?php echo	$LANG['HELADERA_CON_FREEZER']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-dvd-logo-60.png"><?php echo	$LANG['EQUIPO_DE_DVD']?></li>
            <li class="list-group-item">
              <img src="./images/icons/icons8-fishing-boat-60.png">
              <img src="./images/icons/icons8-sports-fishing-60.png"><?php echo	$LANG['ALQUILER_DE_LANCHA_Y_GUIA_DE_PESCA_CON_MOSCA']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-crossfit-60.png"><?php echo	$LANG['SERVICIOS_DE_AYUDANTES_PARA_AMARRADERO']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-breastfeeding-60.png"><?php echo	$LANG['BABY_SITTER']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-bed-60.png"><?php echo	$LANG['CAMA_CON_SOMMIER']?></li>
            <li class="list-group-item"><img src="./images/icons/housekeeper-female.png"><?php echo	$LANG['SERVICIO_DE_MUCAMA']?></li>
            <li class="list-group-item"><img src="./images/icons/icons8-garage-60.png"><?php echo	$LANG['GARAGE']?></li>


          </ul>
        </div>
      </div>
      <div class="alert alert-success  mt-4" role="alert">
        <?php echo	$LANG['Nuestras_cabañas_están_totalmente']?>
      </div>
      <h2 class="mt-5 mb-4"><?php echo	$LANG['Ofrecemos_servicios_adicionales']?></h2>
      <div class="row mt-4">
        <div class="col-lg-6 col-sm-6 portfolio-item">
          <ul class="list-group">
            <li class="list-group-item"><?php echo	$LANG['Servicios_bar']?></li>
            <li class="list-group-item"><?php echo	$LANG['break_fast_service']?></li>
            <li class="list-group-item"><?php echo	$LANG['Baby_Sitter']?></li>
            <li class="list-group-item"><?php echo	$LANG['Alquiler_lanchas']?></li>
            <li class="list-group-item"><?php echo	$LANG['Guía_pesca_mosca']?></li>
            <li class="list-group-item"><?php echo	$LANG['Servicios_ayudantes']?></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include './includes/footer.php';  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script type="text/javascript" src="main.js"></script>
</body>

</html>