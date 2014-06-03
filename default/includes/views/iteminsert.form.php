<?php render('_header',array('title'=>$title))?>			 
<ul data-role="listview"   data-theme="<?php  echo $data_theme; ?>" data-dividertheme="<?php echo    $data_dividertheme; ?>">
     <li> 
         <form action="./" method="post" data-mini="true" > 
         <input title="is"     type="hidden"  name="is" value="item-toevoegen" /> 
         <input title="item"    name="item"  >
         <input type="submit"   data-theme="b" data-mini="true"  data-icon="check" data-inline="true"  value="Toevoegen" /> 
        </form>       
 </li>
</ul> 
<?php render('_footer')?>
