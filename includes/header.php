<?php
    session_start();
    //Define Language file paths
    $selected_lan='es';
    if (isset($_GET['lang'])) {
      $selected_lan=$_GET['lang'] == 'es'? 'es':'en';
    }else{
      if (isset($_SESSION['lang'])) {
        $selected_lan=$_SESSION['lang'] == 'es'? 'es':'en';
      }
    }
    define("LANG_PATH", $_SERVER['DOCUMENT_ROOT'] . '/camelot/includes/lang/'. $selected_lan.'/');
    include LANG_PATH . $selected_lan . '.php';
    $_SESSION['lang'] =  $selected_lan;
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
