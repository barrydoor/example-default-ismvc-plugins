<?php render('_header',array('title'=>$title))?>			 
  <ul data-role="listview"   data-theme="d" data-dividertheme="d">
    <li data-role="list-divider">SYS / DIA [ PULSE ]</li>
 </ul> 
  <?php render($succesvol) ?>
<ul data-role="listview" data-inset="true" data-theme="d" data-divider-theme="b"  data-split-icon="delete">  
  <?php render($content) ?>
 </ul> 
<?php render('_footer')?>
