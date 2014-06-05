<?php render('_header',array('title'=>$title))?>			 
  <ul data-role="listview"   data-theme="d" data-dividertheme="d">
    <li data-role="list-divider">Metingen toevoegen</li> 
	<li>
     <form action="./" method="post" data-mini="true" > 
        <input type="hidden" name="is" value="insert" />
 
 <input type="text" name="hoog" id="hoog" data-theme="b" data-mini="true"    data-inline="true"  placeholder="SYS" value="" />
 
<input type="text" name="laag" id="laag" data-theme="b" data-mini="true"    data-inline="true"  placeholder="DIA" value="" />

<input type="text" name="puls" id="puls" data-theme="b" data-mini="true"    data-inline="true"  placeholder="PULSE" value="" />

<input type="text" name="tijd" id="tijd" data-theme="b" data-mini="true"    data-inline="true"  placeholder="<?php echo date("d-m-Y / H:i");?>" value="<?php echo date("d-m-Y / H:i");?>" />

        <input type="submit"  data-theme="b" data-mini="true"  data-icon="check" data-inline="true"  value="Save" /> 
</form>          
	</li>
 </ul> 
<?php render('_footer')?>
 
