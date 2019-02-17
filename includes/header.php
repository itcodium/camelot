
<?php
	  session_start();
	  //Define Language file paths
	  define("LANG_ES_PATH", $_SERVER['DOCUMENT_ROOT'] . '/camelot/includes/lang/es/');
	  define("LANG_EN_PATH", $_SERVER['DOCUMENT_ROOT'] . '/camelot/includes/lang/en/');

	  if (isset($_GET['lang'])) {
      if ($_GET['lang'] == 'es') {
        include LANG_ES_PATH . 'es.php';
        $_SESSION['lang'] = 'es';
      } else {
        include LANG_EN_PATH . '/en.php';
        $_SESSION['lang'] = 'en';
      }
	  } else if (isset($_SESSION['lang'])) {
            if ($_SESSION['lang'] == 'es') {
              include LANG_ES_PATH . 'es.php';
            }else {
              include LANG_EN_PATH . 'en.php';
            }
          } else {
            include LANG_EN_PATH . 'en.php';
            $_SESSION['lang'] = 'en';
          }

?>

<?php include "config_app.php"; ?>


 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php $host ?>images/favicon.ico" />

  <title><?php echo  $LANG['title']; ?> </title>
  <link href="https://fonts.googleapis.com/css?family=Athiti" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="<?php echo $host ?>vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="<?php echo $host ?>css/full-slider.css" rel="stylesheet">
  <!-- Core CSS file -->
  <link rel="stylesheet" href="<?php echo  $host ?>vendor/photoswipe/photoswipe.css">
  <!-- Skin CSS file (styling of UI - buttons, caption, etc.)
     In the folder of skin CSS file there are also:
     - .png and .svg icons sprite,
     - preloader.gif (for browsers that do not support CSS animations) -->
  <link rel="stylesheet" href="<?php echo $host ?>vendor/photoswipe/default-skin/default-skin.css">
</head>
