<html>
<head>
<?php 
//load gecko library
include_once('class/gecko.php');
// load CKEditor
include_once('loadCKEditor.php');
$gecko = new Gecko();
// load jQuery
echo $gecko->load_jQuery();
 ?>
<script type="text/javascript">
jQuery(document).ready(function(){


		jQuery("#update").click(function(){
		

			
				var page_name = jQuery("#page_name").val();
				//var content = jQuery("#content").val();
				var template = jQuery("#template").val();
				var id = jQuery("#id").val();
				
			
				var content = CKEDITOR.instances.content.getData();
				
				if(page_name){
				
		
				
					jQuery.post("/admin/update_webpage2.php",{ page_name:page_name, content:content, template:template, id:id }, function(data){
					
							if(data=='success'){
								alert('Update successful!');
								jQuery("#message").html("Update Successful!");
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
</head>
<body>
<?php

$id = $_GET['id'];

include_once('connect.php');

$sql = mysql_query("SELECT * FROM webpage WHERE id='".$id."'");

while($row=mysql_fetch_array($sql)){

?>
<h1><?=$row['name']?><?php if($row['homepage']==1){ echo "(default)"; }  ?></h1>
<div id="message" style="background-color:green;"></div>

<table>
<tr><td>page name</td><td><input type="text" name="page_name" id="page_name" value="<?=$row['name']?>" /></td></tr>
<tr><td>template</td>
<td>
<?php

$sql2 = mysql_query("SELECT * FROM template");


?>
<select name="template" id="template">
<option>no template</option>

<option value="-1" <?php if($row['temp_id']=='-1'){ echo "selected"; } ?>>use default template</option><?php
while($row2=mysql_fetch_array($sql2)){
?>

<option value="<?=$row2['id']?>" <?php if($row2[id]==$row['temp_id']){ echo "selected"; } ?>><?=$row2['name']?></option>
<?php } ?>
</select>
</td>
</tr>
<tr><td>content</td><td><textarea id="content" name="content"><?=$row['content']?></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="update" id="update" value="update" /></td></tr>
</table>
<input type="hidden" name="id" id="id" value="<?=$id?>" />


<p><a href="set_as_homepage.php?page=<?=$row['id']?>">set as homepage</a></p>

<?php } ?>

<p><a href="/admin/webpage.php">view web pages</a></p>
<p><a href="/admin/dashboard.php">main menu</a></p>
</body>
</html>