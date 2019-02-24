
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $host ?>index.php">
        <img height="70px" src="<?php echo $host ?>/images/logo_marca_agua.png">
        <img hidden src="./images/logo_marca_agua.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
              aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto pl-3">
          <li hidden class="nav-item">
            <a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])=='index.php') echo 'active'  ?>" href="<?php echo $host ?>index.php"><?php echo $LANG['menu_home'] ?>
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])=='ubicacion.php') echo 'active'  ?>" href="<?php echo $host ?>ubicacion.php"><?php echo $LANG['menu_ubicacion'] ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])=='servicios.php') echo 'active'  ?>" href="<?php echo $host ?>servicios.php"><?php echo $LANG['menu_servicios'] ?></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="dropdown05" data-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false"><?php echo $LANG['menu_galleries'] ?></a>
            <div class="dropdown-menu" aria-labelledby="dropdown05">
              <a class="dropdown-item selected"  href="<?php echo $host ?>gallery_cabañas.php"><?php echo $LANG['menu_cabañas'] ?></a>
              <a class="dropdown-item" href="<?php echo $host ?>gallery_clubhouse.php"><?php echo $LANG['menu_club_house'] ?></a>
              <a class="dropdown-item" href="<?php echo $host ?>gallery_entorno.php"><?php echo $LANG['menu_entorno'] ?></a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if (basename($_SERVER['PHP_SELF'])=='contact.php') echo 'active'  ?>" href="<?php echo $host ?>contact.php"><?php echo $LANG['menu_consultas_reservas'] ?></a>
          </li>
          <li class="nav-item lang " >
              <a class="nav-link" href="?lang=es"><img  class="<?php if ($_SESSION['lang']=='es') echo 'lang-active'  ?>" src="./images/es.png"></a>



          </li>
          <li class="nav-item">
              <a class="nav-link lang " href="?lang=en"><img class="<?php if ($_SESSION['lang']=='en') echo 'lang-active'  ?>"  src="./images/en.png"></a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
