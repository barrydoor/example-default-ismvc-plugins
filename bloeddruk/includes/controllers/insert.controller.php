<?php 
class InsertController{
	public function handleRequest(){
	       InsertModel::to(array(
			'hoog'=>$_POST['hoog'],
			'laag'=>$_POST['laag'],
			'puls'=>$_POST['puls'],
			'tijd'=>$_POST['tijd'] 
		 	));
		$content = HomeModel::find();
		
		render('home',array(
			'title' => 'Nieuwe metingen', 
			'content'	=> $content    
		));
	}
} 
