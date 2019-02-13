<!DOCTYPE html>
<html lang="en">
<?php include './includes/header.php';  ?>
<body>
  <!-- Navigation -->
  <?php include './includes/navbar.php';  ?>

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
            <h3><?php echo $LANG['cabañas'] ?> </h3>
            <p><?php echo $LANG['cabañas_desc'] ?>  </p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./images/slide/0001.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3><?php echo $LANG['club_house'] ?> </h3>
            <p><?php echo $LANG['club_house_desc'] ?>  </p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('./images/slide/0002.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h3><?php echo $LANG['entorno'] ?> </h3>
            <p><?php echo $LANG['entorno_desc'] ?>  </p>
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
      <h1><?php echo $LANG['home_welcome'] ?></h1>
      <p><?php echo $LANG['home_welcome_desc_1'] ?></p>
      <p><?php echo $LANG['home_welcome_desc_2'] ?></p>
      <p><?php echo $LANG['home_welcome_desc_3'] ?></p>
    </div>

    <div class="container">
      <h4 class="my-4"><?php echo $LANG['home_vla_best_place'] ?></h4>
      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./images/entorno_portada/0000.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a class="text-uppercase"><?php echo $LANG['cabañas'] ?></a>
              </h4>
              <p class="card-text"><?php echo $LANG['cabañas_desc'] ?></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./images/entorno_portada/0001.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a class="text-uppercase"><?php echo $LANG['club_house'] ?></a>
              </h4>
              <p class="card-text"><?php echo $LANG['club_house_desc']?> </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="./images/entorno_portada/0003.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a class="text-uppercase"><?php echo $LANG['entorno'] ?></a>
              </h4>
              <p class="card-text"><?php echo $LANG['entorno_desc'] ?></p>
            </div>
          </div>
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