<?php
class HomeController{
	public function handleRequest(){ 
		$content = HomeModel::find(); 
		render('home',array(
			'title'		=> 'Bloeddruk',
			'content'	=> $content 
		));
	}
}
