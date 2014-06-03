<?php
 class ItemInsertController{
	public function handleRequest(){
		$title='Item toevoegen';
		$data_theme='a';
		$data_dividertheme='b'; 
		 
	  if($_POST['item']){
	   	 ItemInsertModel::insert($_POST['item']);  
		 $message= 'Succesvol verlopen!';
		 }
		 else{
			$message= 'Fout! Het tekstveld mag niet leeg zijn!';
		 }  
		render('iteminsert',array( 
			'title'				=> $title,
			'data_theme'			=> $data_theme, 
			'data_dividertheme'		=> $data_dividertheme,
			'message'			=> $message  
		));
	}
}
