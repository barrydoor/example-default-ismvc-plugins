<?php 
class HomeModel{  
	public static function database(){
		global $db; 
			$st = $db->prepare("
			SELECT * 
			FROM
			is_default   
			"); 
    	$st->execute(); 
		return $st->fetchAll(PDO::FETCH_CLASS, "HomeModel");
     }
}
