<?php
class HomeModel{
 	public static function find(){
		global $db; 
			$st = $db->prepare("
			SELECT * 
			FROM
			is_bloeddruk  
			order by id_rel DESC 
			"); 
		$st->execute();
		return $st->fetchAll(PDO::FETCH_CLASS, "HomeModel");
     } 
} 
