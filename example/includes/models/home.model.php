<?php 
class HomeModel{
 	public static function find(){
		global $db; 
			$st = $db->prepare("
			SELECT * 
			FROM
			is_example   
			"); 
			$st->execute();
		 
		return $st->fetchAll(PDO::FETCH_CLASS, "HomeModel");
	 
     } 
} 
