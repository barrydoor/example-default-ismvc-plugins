<?php
if(empty($_GET) && empty($_POST) || $_GET['is']=='home'){
		$get ='HomeController';    
}
 
if($_GET['is']){
switch ($_GET['is']) {
	case 'item-toevoegen':
		$get ='ItemInsertFormController';
    break; 	
    default:
		$get ='HomeController';
	break;
 }
}

if($_GET['id']){
		$get ='ItemController';    
}
if($_GET['delete-form']){
		$get ='ItemDeleteFormController';    
} 
if($_GET['edit']){
		$get ='ItemEditController';    
} 

if($_POST['is']){
switch ($_POST['is']) {
	case 'item-toevoegen':
		$get ='ItemInsertController';
    break;
	case 'item-update':
		$get ='ItemUpdateController';
    break;	
	case 'item-delete':
		$get ='ItemDeleteController';
    break; 	
    default:
		$get ='HomeController';
	break;
 }
}
