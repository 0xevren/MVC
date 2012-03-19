<?php

//test mvc2   
//ini_set('display_errors', '0');     # don't show any errors...
//error_reporting(E_ALL | E_STRICT);  # ...but do log them

define('SITE_PATH',realpath(dirname(__FILE__)).'/');
//$dir = 'C:\\xampp\\htdocs\\MVC\\';

/*Gerekli dosyaları  yükle */
require_once (SITE_PATH.'lib/session.php');
require_once (SITE_PATH.'lib/func.php');
require_once (SITE_PATH.'lib/db.php');
require_once (SITE_PATH.'application/request.php');
require_once (SITE_PATH.'application/router.php');
require_once (SITE_PATH.'application/baseController.php');
require_once (SITE_PATH.'application/baseModel.php');
require_once (SITE_PATH.'application/load.php');
require_once (SITE_PATH.'application/registry.php');
require_once (SITE_PATH.'controllers/indexController.php');
require_once (SITE_PATH.'controllers/testController.php');
require_once (SITE_PATH.'controllers/loginController.php');



Router::route(new Request);
//$request = New Request;

$registry = Registry::getInstance();
//$registry->test = "test içeriği";

//$controller = new indexController;
//call_user_func(array($controller,'index'));

//echo "<pre>".print_r($registry->myVar,1)."</pre>";
//echo "<pre>".print_r(get_included_files(),1)."</pre>";



?>
