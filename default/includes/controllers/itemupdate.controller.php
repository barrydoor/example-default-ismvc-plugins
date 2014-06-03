<?php
 class ItemUpdateController{
	public function handleRequest(){
		 
		$title='Item wijzigen';
		$data_theme='a';
		$data_dividertheme='b'; 
		 
         if($_POST['item'] && $_POST['item']){
	    	 ItemUpdateModel::update($_POST['id'],$_POST['item']);  
		 	 $message= 'Succesvol verlopen!';
		 }
		 else{
			 $message= 'Fout! Het tekstveld mag niet leeg zijn!';
		 }
		render('itemupdate',array( 
			'title'					=> $title,
			'data_theme'			=> $data_theme, 
			'data_dividertheme'		=> $data_dividertheme,
			'message'				=> $message 
		));
	}
}
