<?php 
if(empty($_GET) && empty($_POST) || $_GET['is']=='overzicht'){
		$get ='HomeController';    
} 
if($_GET['is']){
switch ($_GET['is']) {
	case 'metingen-toevoegen':
		$get ='NewController';
    break; 	
    default:
		$get ='HomeController';
	break;
 }
} 
if($_GET['delete']){
		$get ='DeleteController';    
}  
if($_POST['is']){
switch ($_POST['is']) {
	case 'insert':
		$get ='InsertController';
    break; 
    default:
		$get ='HomeController';
	break;
 }
}
