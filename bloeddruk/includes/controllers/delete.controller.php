<?php  
class DeleteController{
	public function handleRequest(){
		 DeleteModel::delete($_GET['delete']);
		 $content = HomeModel::find();
		
		 render('delete',array(
			  'title'	=> 'Meting verwijderd',
			  'content'	=> $content
			 ));
	}
} 
