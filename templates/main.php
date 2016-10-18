<?php
error_reporting(E_ALL);
ini_set('display_error', 1);


require_once('variables.php');


function is_current($page) {
	$pathInfo = pathinfo($_SERVER['SCRIPT_NAME']);
	return $page === $pathInfo['filename']; 
}


?>