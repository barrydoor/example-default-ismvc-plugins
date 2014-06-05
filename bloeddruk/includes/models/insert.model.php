<?php 
class InsertModel{
   public static function to($arr = array()){ 
		global $db;  		
		if(empty($arr['hoog'])){
 	    	return false;
		}
		else
		    {
			$st = $db->prepare("
			 INSERT 
			 into 
			 is_bloeddruk 
		     (hoog,laag,puls,tijd) 
			 VALUES  
			 (:hoog,:laag,:puls,:tijd) 
			 ");   
		    $st->execute($arr); 
			} 
	}	
} 
