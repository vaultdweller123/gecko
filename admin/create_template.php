<?php
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){
?>
<html>
<head>
<?php 
// load gecko library
include_once('class/gecko.php');
$gecko = new Gecko();
// instantiate CKEditor, pass arguments = id,attr(comma separated),path
echo $gecko->load_CKEditor("content","height:400,fullPage:true");
// load jQuery
echo $gecko->load_jQuery();
 ?>
 <script type="text/javascript">
jQuery(document).ready(function(){



			
	
			
	
			jQuery("#save").click(function(){
			
			
			
				var template_name = jQuery("#template_name").val();
				var content = CKEDITOR.instances.content.getData();
				
			

			
			
				if(template_name){
			
					jQuery.post("/admin/create_template2.php",{ template_name:template_name, content:content }, function(data){
					
						if(data=='success'){
							alert('New Template Saved');
							window.location='/admin/template.php'
						}else{
							alert('Fail');
						}
					
					});
					
					
				}else{
		
					alert('Please enter template name');
		
				}
					
			
			});
		
		
		

	

});
</script>
</head>
<body>
<h1>Create Template</h1>

<table>
<tr><td>Template Name</td><td><input type="text" name="template_name" id="template_name" /></td></tr>
<tr><td>content</td><td><textarea name="content" id="content">{gecko_content}</textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" id="save" name="save" value="save" /></td></tr>
</table>

<p><a href="/admin/create_template.php">create template</a></p>
<p><a href="/admin/template.php">view templates</a></p>
<p><a href="/admin/dashboard.php">dashboard</a></p>
</body>
</html>
<?php
//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}
?>