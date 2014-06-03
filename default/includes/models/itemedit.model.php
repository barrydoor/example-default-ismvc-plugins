<?php 
class ItemEditModel{  
     public static function find($id){
		global $db; 
			$st = $db->prepare("
			SELECT * 
			FROM
			is_default 
			WHERE
			id=$id  
			"); 
 		$st->execute(); 
		return $st->fetchAll(PDO::FETCH_CLASS, "ItemEditModel"); 	 
     }	 
}
