<?php render('_header',array('title'=>$title))?>			 
<ul data-role="listview"   data-theme="<?php  echo $data_theme; ?>" data-dividertheme="<?php echo    $data_dividertheme; ?>"> 
<li data-theme="e"> 
	<?php echo $message; ?> 
</li>
</ul> 
<?php render('_footer')?>
