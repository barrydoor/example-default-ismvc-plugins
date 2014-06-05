<?php
class DeleteModel{
	public static function delete($id_rel){
		global $db; 
			$st = $db->prepare("
			DELETE  
			FROM
			is_bloeddruk   
			WHERE id_rel='$id_rel' 
			");  
		$st->execute();  
     } 
} 
