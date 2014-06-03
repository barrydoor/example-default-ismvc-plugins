<?php
 class ItemDeleteController{
	public function handleRequest(){ 
		$title='Item verwijderen';
		$data_theme='a';
		$data_dividertheme='b'; 
		ItemDeleteModel::delete($_POST['id']);  
		
 		render('itemdelete',array( 
			'title'				=> $title,
			'data_theme'			=> $data_theme, 
			'data_dividertheme'		=> $data_dividertheme 
		));
	}
}
 
