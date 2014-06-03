<?php render('_header',array('title'=>$title))?>			 
   
<ul data-role="listview"> 
    <?php render($content); ?>   
</ul> 

<?php render('_footer')?>
