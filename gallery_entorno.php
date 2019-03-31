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
      <h1><?php echo $LANG['Gallery_entorno_titulo'] ?>:</h1>
    </div>
    <br>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <p><?php echo $LANG['Gallery_entorno_descripcion1'] ?></p>

        </div>
        <div class="col-lg-6 col-sm-6">
          <p><?php echo $LANG['Gallery_entorno_descripcion2'] ?></p>
        </div>

        <div class="container mt-5">

          <div class="row text-center text-lg-left my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/01.Vista externa Cabañas Camelot.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/01.Vista externa Cabañas Camelot.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Patagonia_Camelot_landscape'] ?></figcaption>
            </figure>

            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/02.Piscina climatizada externa.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/02.Piscina climatizada externa.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Piscina_climatizada_externa'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/03b.Piscina climatizada externa.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/03b.Piscina climatizada externa.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Piscina_climatizada_externa'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/03c.Piscina climatizada externa.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/03c.Piscina climatizada externa.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Piscina_climatizada_externa'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/03d.Piscina climatizada externa.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/03d.Piscina climatizada externa.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Piscina_climatizada_externa'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/04.entorno.jpg" itemprop="contentUrl" data-size="720x540">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/04.entorno.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Patio_juegos_exterior'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/05.Vista externa Cabañas Camelot.jpg" itemprop="contentUrl" data-size="960x720">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/05.Vista externa Cabañas Camelot.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Patagonia_Camelot_landscape'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/06.Vista externa Cabañas Camelot.jpg" itemprop="contentUrl" data-size="1102x620">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/06.Vista externa Cabañas Camelot.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Patagonia_Camelot_landscape'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/07.Vista externa Cabaña Arturo.jpg" itemprop="contentUrl" data-size="950x713">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/07.Vista externa Cabaña Arturo.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Patagonia_arturo'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/08.Vista externa Cabañas Camelot.jpg" itemprop="contentUrl" data-size="950x713">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/08.Vista externa Cabañas Camelot.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Patagonia_Camelot'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/09.Brick_BBQ.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/09.Brick_BBQ.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <!-- brick BBQ with grill and chimney -->
              <figcaption itemprop="caption description"><?php echo $LANG['brick_BBQ'] ?></figcaption>
            </figure>

            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/10.Vista externa Cabaña Ginebra.jpg" itemprop="contentUrl" data-size="950x713">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/10.Vista externa Cabaña Ginebra.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Patagonia_Ginebra'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/11.Vista externa Cabañas.jpg" itemprop="contentUrl" data-size="1210x908">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/11.Vista externa Cabañas.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Patagonia_Camelot_landscape'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/12.Vista externa desde las cabañas.jpg" itemprop="contentUrl"
                 data-size="950x713">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/12.Vista externa desde las cabañas.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Patagonia_Camelot_landscape'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/13.Paisaje que rodea las cabañas.jpg" itemprop="contentUrl" data-size="1200x803">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/13.Paisaje que rodea las cabañas.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Patagonia_Camelot_landscape'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/14.Invierno - Vista externa Cabañas.jpg" itemprop="contentUrl"
                 data-size="960x720">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/14.Invierno - Vista externa Cabañas.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Invierno_Vista_externa_Cabañas'] ?> </figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/15.Invierno - Vista externa Cabañas.jpg" itemprop="contentUrl"
                 data-size="960x720">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/15.Invierno - Vista externa Cabañas.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Invierno_Vista_externa_Cabañas'] ?></figcaption>
            </figure>



            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/16.Invierno - Vista externa Cabañas.jpg" itemprop="contentUrl"
                 data-size="960x720">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/16.Invierno - Vista externa Cabañas.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Invierno_Vista_externa_Cabañas'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/17.Invierno - Vista externa Cabañas.jpg" itemprop="contentUrl"
                 data-size="720x540">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/17.Invierno - Vista externa Cabañas.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Invierno_Vista_externa_Cabañas'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/18.Vista externa Cabañas Camelot.jpg" itemprop="contentUrl" data-size="960x720">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/18.Vista externa Cabañas Camelot.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Invierno_Vista_externa_Cabañas'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/19.Invierno - Vista externa Cabañas.jpg" itemprop="contentUrl"
                 data-size="960x720">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/19.Invierno - Vista externa Cabañas.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Invierno_Vista_externa_Cabañas'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/entorno/20.Invierno - Vista externa Cabañas.jpg" itemprop="contentUrl"
                 data-size="960x720">
                <img class="img-fluid img-thumbnail" src="./images/galleries/entorno/20.Invierno - Vista externa Cabañas.jpg"
                     itemprop="thumbnail" alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Invierno_Vista_externa_Cabañas'] ?></figcaption>
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

  <script type="text/javascript" src="./main.js"></script>
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