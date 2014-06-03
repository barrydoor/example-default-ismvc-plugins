<?php 
class ItemDeleteModel{  
     public static function delete($id){
		global $db; 
			$st = $db->prepare("
 			 DELETE 
			 from 
			 is_default
			 WHERE
			 id=$id  
			"); 
 		$st->execute(); 
     }	 
} 
