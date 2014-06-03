<?php
 class ItemEditController{
	public function handleRequest(){ 
		$title='Item bewerken';
		$data_theme='a';
		$data_dividertheme='b';  
		$content = ItemEditModel::find($_GET[edit]);
		
		render('itemedit',array( 
			'title'					=> $title,
			'data_theme'			=> $data_theme, 
			'data_dividertheme'		=> $data_dividertheme, 
			'content'				=> $content
		));
	}
}
 
