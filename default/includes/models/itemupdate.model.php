<?php 
class ItemUpdateModel{  
	public static function update($id,$item=''){ 
		global $db; 
		if($id && $item){
	  		$st = $db->prepare("
			 UPDATE 
			 is_default
			 SET
			 item='$item'  
			 WHERE 
			 id=$id
			 ");   
		    $st->execute(); 
		} 
	}
}
