<html>
<head>
<?php 
//load gecko library
include_once('class/gecko.php');
$gecko = new Gecko();
// instantiate CKEditor, pass arguments = id,attr(comma separated),path
echo $gecko->load_CKEditor("content","height:400,fullPage:true");
// load jQuery
echo $gecko->load_jQuery();
 ?>
 <script type="text/javascript">
jQuery(document).ready(function(){


		jQuery("#update").click(function(){
		

			
				var template_name = jQuery("#template_name").val();
				var content = CKEDITOR.instances.content.getData();
				var id = jQuery("#id").val();
				
			
				
				
				if(template_name){
				
		
				
					jQuery.post("/admin/update_template2.php",{ template_name:template_name, content:content, id:id }, function(data){
					
							if(data=='success'){
								alert('Update successful!');
								jQuery("#message").html("Update Successful!");
							}else{
								alert('Fail');
							}
					
					});

				}else{
				
				
					alert('Please enter Template name');
				
				}
		
		});

			

});
</script>
</head>
<body>
<h1>Template</h1>
<?php

$id = $_GET['id'];

require_once("connect.php");

$sql = mysql_query("SELECT * FROM template WHERE id='".$id."'");

while($row=mysql_fetch_array($sql)){

?>
<div id="message" style="background-color:green;"></div>

<table>
<tr><td>template name</td><td><input type="text" name="template_name" id="template_name" value="<?=$row['name']?>" /></td></tr>
<tr><td>content</td><td><textarea name="content" id="content"><?=$row['content']?></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="update" id="update" value="update" /></td></tr>
</table>
<input type="hidden" name="id" id="id" value="<?=$id?>" />


<p><a href="set_as_default_template.php?template=<?=$row['id']?>">set as default template</a></p>

<?php } ?>

<p><a href="/admin/template.php">view templates</a></p>
<p><a href="/admin/dashboard.php">dashboard</a></p>
</body>
</html>