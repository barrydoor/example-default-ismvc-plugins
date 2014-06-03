<?php
 class HomeController{
	public function handleRequest(){
		
// Verplichte vars
		$title='Home';
		$data_theme='b';
		$data_dividertheme='a'; 
		
// Uit de database		
		$content = HomeModel::database();
		
		render('home',array(
			//vaste vars
			'title'					=> $title,
			'data_theme'			=> $data_theme, 
			'data_dividertheme'		=> $data_dividertheme,
			
			//uit de database
			'content'				=> $content
		));
	}
}
