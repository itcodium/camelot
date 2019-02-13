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
      <h1><?php echo $LANG['club_House_patagonia'] ?>:</h1>
    </div>
    <br>


    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          - <?php echo $LANG['Oficina_recepcion'] ?>.<br>
          - <?php echo $LANG['Juegos_infantiles'] ?><br>
          - <?php echo $LANG['Mesa_Ping_Pong'] ?>.<br>
          - <?php echo $LANG['Metegol'] ?><br>
        </div>
        <div class="col-lg-6 col-sm-6 ">
          - <?php echo $LANG['Mesa_Pool'] ?>.<br>
          - <?php echo $LANG['Video'] ?><br>
          - <?php echo $LANG['Juegos_mesa'] ?>.<br>
          - <?php echo $LANG['Sala_estar_vista_lago'] ?><br>
        </div>

        <div class="container mt-5">

          <div class="row text-center text-lg-left my-gallery" itemscope itemtype="http://schema.org/ImageGallery">
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/clubhouse/01.club house.jpg" itemprop="contentUrl" data-size="1024x1024">
                <img class="img-fluid img-thumbnail" src="./images/galleries/clubhouse/01.club house.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Recepción'] ?></figcaption>
            </figure>

            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/clubhouse/02.club house.jpg" itemprop="contentUrl" data-size="964x1024">
                <img class="img-fluid img-thumbnail" src="./images/galleries/clubhouse/02.club house.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Sala_Juegos'] ?></figcaption>
            </figure>

            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/clubhouse/03.club house.jpg" itemprop="contentUrl" data-size="964x1024">
                <img class="img-fluid img-thumbnail" src="./images/galleries/clubhouse/03.club house.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Sala_Juegos'] ?></figcaption>
            </figure>
            <figure class="col-lg-3 col-md-4 col-xs-6" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
              <a href="./images/galleries/clubhouse/04.club house.jpg" itemprop="contentUrl" data-size="964x1024">
                <img class="img-fluid img-thumbnail" src="./images/galleries/clubhouse/04.club house.jpg" itemprop="thumbnail"
                     alt="Image description" />
              </a>
              <figcaption itemprop="caption description"><?php echo $LANG['Sala_Juegos'] ?></figcaption>
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