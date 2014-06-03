<?php
 class ItemInsertFormController{
	public function handleRequest(){
		 
		$title='Item toevoegen - Form';
		$data_theme='a';
		$data_dividertheme='b'; 
		
 		render('iteminsert.form',array( 
			'title'					=> $title,
			'data_theme'			=> $data_theme, 
			'data_dividertheme'		=> $data_dividertheme 
		));
	}
}
