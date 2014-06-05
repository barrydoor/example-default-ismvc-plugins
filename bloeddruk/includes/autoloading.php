<?php 
header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
require_once "includes/functions/general.php"; 
require_once "includes/config.php";
require_once "includes/connect.php";
require_once "includes/core.php"; 
function __autoload($class) { 
	$class = strtolower($class);
	if(substr($class,-1)=='r'){
	$class = substr($class,0,-10);
    require_once 'includes/controllers/'.$class.'.controller.php';
	}
	elseif(substr($class,-1)=='l'){
	$class = substr($class,0,-5);
    require_once 'includes/models/'.$class.'.model.php';
	}
}
