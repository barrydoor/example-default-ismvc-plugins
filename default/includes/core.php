<?php
 function render($tpl,$tpl_vars = array()){
 	extract($tpl_vars);
 	if(is_array($tpl)){
 		foreach($tpl as $value){
	 		$inc = strtolower(get_class($value));
			$$inc = $value;
			$inc=substr($inc,0,-5);
 			include "views/$inc.is.php";
		}
 	}
	else {
		 include "views/$tpl.php";
	}
} 
