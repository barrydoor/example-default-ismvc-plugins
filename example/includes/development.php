<?php
if(empty($_GET) && empty($_POST)){
		$get ='HomeController';    
}

// indien verwijzigen of een formulier versturen
if($_GET['is']){
switch ($_GET['is']) {
	case 'xxx':
		$get ='xxxController';
    break; 	
    default:
		$get ='HomeController';
	break;
 }
}

if($_POST['is']){
switch ($_POST['is']) {
	case 'yyy':
		$get ='yyyController';
    break; 
    default:
		$get ='HomeController';
	break;
 }
}
