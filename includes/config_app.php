<?php
function shapeSpace_check_https() {
	if ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443) {
		return true;
	}
	return false;
}

$ssl_req="http";
if(shapeSpace_check_https()){
  $ssl_req="https";
}

if($_SERVER['HTTP_HOST']=='localhost:4444'){
  $host = $ssl_req . '://' . $_SERVER['HTTP_HOST'] . '/camelot/';
}else{
  $host = $ssl_req . '://'+$_SERVER['HTTP_HOST'];
}
?>


<?php
// echo '<script type="text/javascript">function phpAlert() {alert("' . $host  . '")}; phpAlert(); </script>';
?>
