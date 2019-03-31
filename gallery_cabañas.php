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
    <div class="container mt-4">
      <h1><?php echo $LANG['cabañas_gallery_titulo'] ?>:</h1>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <h3><?php echo $LANG['cabañas_gallery_pb'] ?>:</h3>
          <?php echo $LANG['cabañas_gallery_pb_desc'] ?>
        </div>
        <div class="col-lg-6 col-sm-6 ">
          <h3><?php echo $LANG['cabañas_gallery_pa'] ?>:</h3>
          <?php echo $LANG['cabañas_gallery_pa_desc'] ?>
        </div>
        <div class="container mt-5">
          <div class="row text-center text-lg-left my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/01.Vista del Living.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/01.Vista del Living.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Vista_Living'] ?></figcaption>

            </figure>
<!-- OLD: 02.Vista del Living.jpg -->
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/02.Vista del Living_new.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/02.Vista del Living_new.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Vista_Living'] ?></figcaption>
            </figure>

            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/03.Vista del Living.jpg" itemprop="contentUrl" data-size="640x480">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/03.Vista del Living.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Vista_Living'] ?> 3</figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/04.Vista del Living.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/04.Vista del Living.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"> <?php echo $LANG['Vista_Living'] ?> 4</figcaption>
            </figure>

            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/05.Vista del Living.jpg" itemprop="contentUrl" data-size="950x713">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/05.Vista del Living.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Vista_Living'] ?> 5</figcaption>
            </figure>

            <!--
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/06.Vista del  Living.jpg" itemprop="contentUrl" data-size="964x1024">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/06.Vista del  Living.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Vista_Living'] ?> 6</figcaption>
            </figure>

            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/07.Vista del  Living.jpg" itemprop="contentUrl" data-size="964x1024">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/07.Vista del  Living.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Vista_Living'] ?> 7</figcaption>
            </figure>
          -->
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/08.Vista cocina - Equipamiento.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/08.Vista cocina - Equipamiento.jpg"
                     itemprop="thumbnail" alt="" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Vista_cocina'] ?> </figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/09.Vista cocina - Desayunador.jpg" itemprop="contentUrl" data-size="960x720">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/09.Vista cocina - Desayunador.jpg"
                     itemprop="thumbnail" alt="" />
              </a>

              <figcaption itemprop="caption description"><?php echo $LANG['Vista_cocina'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/10.Vista cocina - Living.jpg" itemprop="contentUrl" data-size="960x720">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/10.Vista cocina - Living.jpg"
                     itemprop="thumbnail" alt="" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Vista_cocina10'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/11.Dormitorio Principal.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/11.Dormitorio Principal.jpg"
                     itemprop="thumbnail" alt="" />
              </a>
              <figcaption itemprop="caption description" style="text-align:center">
                <?php echo $LANG['Dormitorio_Principal'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/12.Dormitorio Principal - Placard.jpg" itemprop="contentUrl"
                 data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/12.Dormitorio Principal - Placard.jpg"
                     itemprop="thumbnail" alt="" />
              </a>
              <figcaption itemprop="caption description" style="text-align:center"><?php echo $LANG['Dormitorio_Principal'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/13.Habitación doble.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/13.Habitación doble.jpg" itemprop="thumbnail"
                     alt="" />
              </a>

              <figcaption itemprop="caption description" style="text-align:center"><?php echo $LANG['Habitación_doble'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/14.Habitación doble.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/14.Habitación doble.jpg" itemprop="thumbnail"
                     alt="" />
              </a>
              <figcaption itemprop="caption description" style="text-align:center"><?php echo $LANG['Habitación_doble'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/15.Toilette.jpg" itemprop="contentUrl" data-size="950x620">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/15.Toilette.jpg" itemprop="thumbnail"
                     alt="" />
              </a>
              <figcaption itemprop="caption description" style="text-align:center">Toilette</figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/16.Hidromasaje.jpg" itemprop="contentUrl" data-size="950x620">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/16.Hidromasaje.jpg" itemprop="thumbnail"
                     alt="" />
              </a>

              <figcaption itemprop="caption description" style="text-align:center"><?php echo $LANG['Hidromasaje'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/17.Hidromasaje.jpg" itemprop="contentUrl" data-size="720x540">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/17.Hidromasaje.jpg" itemprop="thumbnail"
                     alt="" />
              </a>
              <figcaption itemprop="caption description" style="text-align:center"><?php echo $LANG['Hidromasaje'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/cabañas/18.Hidromasaje - Sanitarios.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/cabañas/18.Hidromasaje - Sanitarios.jpg"
                     itemprop="thumbnail" alt="" />
              </a>
              <figcaption itemprop="caption description" style="text-align:center"><?php echo $LANG['Hidromasaje_Sanitarios'] ?> </figcaption>
            </figure>

          </div>


        </div>
      </div>
  </section>




  <!-- Footer -->
  <?php include './includes/footer.php';  ?>


  <!-- Bootstrap core JavaScript -->
  <script src="./vendor/jquery/jquery.min.js"></script>
  <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core JS file -->
  <script src="./vendor/photoswipe/photoswipe.min.js"></script>
  <!-- UI JS file -->
  <script src="./vendor/photoswipe/photoswipe-ui-default.min.js"></script>



  <!-- Root element of PhotoSwipe. Must have class pswp. -->
  <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

    <!-- Background of PhotoSwipe.
         It's a separate element, as animating opacity is faster than rgba(). -->
    <div class="pswp__bg"></div>

    <!-- Slides wrapper with overflow:hidden. -->
    <div class="pswp__scroll-wrap">

      <!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
      <!-- don't modify these 3 pswp__item elements, data is added later on. -->
      <div class="pswp__container">
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
        <div class="pswp__item"></div>
      </div>

      <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
      <div class="pswp__ui pswp__ui--hidden">

        <div class="pswp__top-bar">

          <!--  Controls are self-explanatory. Order can be changed. -->

          <div class="pswp__counter"></div>

          <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

          <button class="pswp__button pswp__button--share" title="Share"></button>

          <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

          <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

          <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
          <!-- element will get class pswp__preloader--active when preloader is running -->
          <div class="pswp__preloader">
            <div class="pswp__preloader__icn">
              <div class="pswp__preloader__cut">
                <div class="pswp__preloader__donut"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
          <div class="pswp__share-tooltip"></div>
        </div>

        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
        </button>

        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
        </button>

        <div class="pswp__caption">
          <div class="pswp__caption__center text-center"></div>
        </div>

      </div>

    </div>

  </div>

  <!-- UI JS file -->
  <script src="./vendor/photoswipe/app.js"></script>



</body>

</html>