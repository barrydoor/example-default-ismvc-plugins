<?php
 class ItemDeleteFormController{
	public function handleRequest(){
		$title='Item verwijderen - Form';
		$data_theme='a';
		$data_dividertheme='b'; 
		
 		render('itemdelete.form',array( 
			'title'				=> $title,
			'data_theme'			=> $data_theme, 
			'data_dividertheme'		=> $data_dividertheme 
		));
	}
}
 
