<html>
<head>
<?php 
// load gecko library
include_once('class/gecko.php');
$gecko = new Gecko();
// instantiate CKEditor, pass arguments = id,attr(comma separated),path
echo $gecko->load_CKEditor("content","height:400");
// load jQuery
echo $gecko->load_jQuery();
 ?>
</head>
<script type="text/javascript">
jQuery(document).ready(function(){



			
	
			
	
			jQuery("#save").click(function(){
			
			
			
				var page_name = jQuery("#page_name").val();
				var content = CKEDITOR.instances.content.getData();
				var template = jQuery("#template").val();
			

			
			
				if(page_name){
			
					jQuery.post("/admin/create_webpage2.php",{ page_name:page_name, content:content, template:template }, function(data){
					
						if(data=='success'){
							alert('New Web Page Saved');
							window.location='/admin/webpage.php'
						}else{
							alert('Fail');
						}
					
					});
					
					
				}else{
		
					alert('Please enter webpage name');
		
				}
					
			
			});
		
		
		

	

});
</script>
<body>
<h1>Web Pages</h1>

<table>
<tr><td>page name</td><td><input type="text" name="page_name" id="page_name" /></td></tr>
<tr><td>template</td>
<td>
<?php

include_once('connect.php');

$sql = mysql_query("SELECT * FROM template");



?>
<select name="template" id="template">
<option>no template</option>
<option value="-1">use default template</option>
<?php
while($row=mysql_fetch_array($sql)){
?>
<option value="<?=$row['id']?>"><?=$row['name']?></option>
<?php } ?>
</select>
</td>
</tr>
<tr><td>content</td><td><textarea id="content" name="content"></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="save" id="save" value="save" /></td></tr>
</table>


<p><a href="/admin/webpage.php">view web pages</a></p>
<p><a href="/admin/dashboard.php">main menu</a></p>
</body>
</html>