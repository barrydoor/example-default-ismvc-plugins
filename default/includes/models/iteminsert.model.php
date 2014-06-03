<?php 
class ItemInsertModel{  
	public static function insert($item=''){ 
		global $db; 
		if($item){
	  		$st = $db->prepare("
			 INSERT
			 into 
			 is_default
			 (item) VALUES('$item')
			 ");   
	 	    $st->execute(); 
		} 
	}		 
}
