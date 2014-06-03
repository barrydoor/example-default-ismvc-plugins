<?php
 class ItemController{
	public function handleRequest(){
		$title='Item';
		$data_theme='a';
		$data_dividertheme='b'; 
		$content = ItemModel::find($_GET[id]);
		
		render('item',array( 
			'title'				=> $title,
			'data_theme'			=> $data_theme, 
			'data_dividertheme'		=> $data_dividertheme,
	 		'content'			=> $content
		));
	}
}
