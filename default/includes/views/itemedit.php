<?php render('_header',array('title'=>$title))?>			 
<ul data-role="listview"   data-theme="<?php  echo $data_theme; ?>" data-dividertheme="<?php echo    $data_dividertheme; ?>">
    <?php render($content) ?>
</ul>
<?php render('_footer')?>
