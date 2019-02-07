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
    &nbsp;<br>
  </header>
  <br>
  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1>VILLA LA ANGOSTURA</h1>
      <h3>RUTA 231 KM. 65,5 NEUQUEN / ARGENTINA</h3>
      <p><?php echo $LANG['ubicacion_descripcion'] ?></p>
      <h3><?php echo $LANG['ubicacion_destancias'] ?></h3>

      <div class="row">
        <div class="col-sm-6">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Bahía Blanca<span class="badge badge-primary">1017 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Neuquén <span class="badge badge-primary">477 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Buenos Aires <span class="badge badge-primary">1624 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Santa Rosa <span class="badge badge-primary">1027 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Bariloche <span class="badge badge-primary">83 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Córdoba <span class="badge badge-primary">1612 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Rosario <span class="badge badge-primary">1670 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Mendoza <span class="badge badge-primary">1328 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Salta <span class="badge badge-primary">2350 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Tucuman <span class="badge badge-primary">2050 Km</span>
            </li>
          </ul>
        </div>
        <div class="col-sm-6">
          <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Viedma<span class="badge badge-primary">1041 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Cipolletti<span class="badge badge-primary">482 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Las Grutas<span class="badge badge-primary">1121 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Comodoro Rivadavia <span class="badge badge-primary">830 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Trelew <span class="badge badge-primary">913 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              San Martin de los Andes <span class="badge badge-primary">110 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              El Bolsón <span class="badge badge-primary">190 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              25 de Mayo<span class="badge badge-primary">633 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              General Roca<span class="badge badge-primary">525 Km</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
              Puerto Deseado<span class="badge badge-primary">1115 Km</span>
            </li>
          </ul>
        </div>
      </div>
      <div class="row pt-5">
        <div div class="col-sm-12">
          <iframe class="actAsDiv" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;q=-40.725338%20-71.680878&amp;aq=0&amp;ie=UTF8&amp;t=h&amp;z=12&amp;iwloc=A&amp;output=embed"
                  width="100%" height="563" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe>

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