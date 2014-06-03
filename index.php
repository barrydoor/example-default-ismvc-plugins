<?php 
require_once "config.php"; 

class Connect {
	public function __toString() {
		return sprintf($this->plugin);
	}
}
	try {
		$db = new PDO("mysql:host=$db_host;dbname=$db_name;",
		$db_user,
		$db_pass);
		$db->query("SET NAMES 'utf8'");
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		error_log($e->getMessage());
		die("A database error was encountered");
	}

$sq = $db->query("SELECT * FROM is_admin WHERE choice_plugin=1", PDO::FETCH_CLASS,'Connect');
while($row = $sq->fetch()) { 
header('Location: plugins/'.$row);
}
