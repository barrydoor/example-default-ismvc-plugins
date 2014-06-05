<?php 
function formatTitle($title = ''){
	if($title){
		$title.= ' || ';
	}
 	$title .= $GLOBALS['defaultTitle'];
 	return $title;
} 
