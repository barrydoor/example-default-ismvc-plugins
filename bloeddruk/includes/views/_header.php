<!DOCTYPE html> 
<html> 
	<head> 
	<title><?php echo formatTitle($title)?></title>  
	<meta name="viewport" content="width=device-width, initial-scale=1" />  
<link rel="stylesheet" href="http://code.jquery.com/mobile/latest/jquery.mobile.min.css" />
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script src="http://code.jquery.com/mobile/latest/jquery.mobile.min.js"></script> 
    <link rel="stylesheet" href="assets/css/themes/barrydoor.min.css" />  
</head> 
<body> 

<div data-role="page">

	<div data-role="header"  data-theme="a" data-position="fixed">
       <h1><?php echo $title?></h1>
	</div>
 
	<div data-role="content">
