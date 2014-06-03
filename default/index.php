<?php
require_once "includes/autoloading.php"; 
require_once "includes/development.php"; 
	try {
	    if($get){ 
		$controller = new $get();
		}
	    	else if($post){ 
			$controller = new $post();
			}	  
 		else throw new Exception('Wrong page!');
		$controller->handleRequest();
		}
 	catch(Exception $e) { 
		render('error',array('message'=>$e->getMessage()));
	} 
