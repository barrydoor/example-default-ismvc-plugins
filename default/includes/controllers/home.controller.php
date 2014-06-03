<?php
 class HomeController{
	public function handleRequest(){
		 
		$title='Home';
		$data_theme='b';
		$data_dividertheme='a'; 
		$content = HomeModel::database();
		
		render('home',array(
			'title'				=> $title,
			'data_theme'			=> $data_theme, 
			'data_dividertheme'		=> $data_dividertheme,
			'content'			=> $content
		));
	}
}
