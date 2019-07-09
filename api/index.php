<?php
use Phalcon\Loader;
use Phalcon\Mvc\Micro;
use Phalcon\Db\Adapter\Pdo\Mysql as PdoMysql;
use Phalcon\Http\Response;

require_once 'data/Robots.php';
require_once 'common/ResponseFormat.php';

$app = new Micro();

$app->get('/v1/robots',
	function () use ($app) {
	 	$response = new  ResponseFormat();
		try{
			$r=new Robots();
			$data=$r->getAll();
			$response->data($data);
		}catch(exception $e) {
			return $response->error($e->getMessage());
		}
		return $response->get();
	}
);
 // Searches for robots with $name in their name getById
$app->get('/v1/robots/{name}',
   function ($name) use ($app) {
	 	$response = new  ResponseFormat();
	  try{
		  $myObj = new stdClass;
			$myObj->name = $name;
			$myObj->age = 33;
			$myObj->city = "Test";
			$response->data($myObj);
		}catch(exception $e){
			return $response->error($e->getMessage());
		}
		return $response->get();
  }
);
// Retrieves robots based on primary key
$app->get('/v1/robots/{id:[0-9]+}',
  function ($id) use ($app) {
  	$response = new  ResponseFormat();
	  try{
		  $r=new Robots();
			$data=$r->getById($id);
			$response->data($data);
		}catch(exception $e) {
			return $response->error($e->getMessage());
		}
		return $response->get();
  }
);
$app->handle();
?>
