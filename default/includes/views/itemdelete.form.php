<?php render('_header',array('title'=>$title))?>			 
<ul data-role="listview"   data-theme="<?php  echo $data_theme; ?>" data-dividertheme="<?php echo    $data_dividertheme; ?>">
     <li  data-theme="e">Weet u zeker dat u dit item wilt verwijderen?</li>
      <li> 
         <form action="./" method="post" data-mini="true" > 
         <input title="is"   type="hidden"  name="is" value="item-delete" /> 
         <input title="item"   type="hidden"   name="id"  value="<?php  echo $_GET['delete-form']; ?>" > 
         <input type="submit"   data-theme="e" data-mini="true"  data-icon="check" data-inline="true"  value="Verwijderen" /> 
        </form>       
 </li>
</ul>
<?php render('_footer')?>
