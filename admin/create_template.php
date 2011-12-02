<?php
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Gecko</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<style type="text/css">
		#navigation a{
		text-decoration:none;
		}
		
		</style>
		<?php 
// load jQuery
include_once('include/loadjQuery.php');
	
	// load content slide effects
	include_once("include/slide_effects.php");

// instantiate CKEditor, pass arguments = id,attr(comma separated),path
echo $gecko->load_CKEditor("jcontent","height:400,fullPage:true");
 ?>
 <script type="text/javascript">
jQuery(document).ready(function(){



			
	
			
	
			jQuery("#save").click(function(){
			
			
			
				var template_name = jQuery("#template_name").val();
				var content = CKEDITOR.instances.jcontent.getData();
				
			

			
			
				if(template_name){
			
					jQuery.post("/admin/create_template2.php",{ template_name:template_name, content:content }, function(data){
					
						if(data=='fail'){
							alert('Fail');
						}else{
						alert('New Template Saved');
							window.location='/admin/update_template.php?id='+data+'&frm_crt=1';
							
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

		<h1 id="head"><a style="color:#FFFFFF;text-decoration:none;" href="/admin/dashboard.php">Gecko</a></h1>

		<ul id="navigation">
			<li><span><a href="/admin/webpage.php">Web Pages</a></span></li>
			<li><a href="/admin/template.php" class="active">Templates</a></li>
			<li><a href="/admin/menu.php">Dynamic menu</a></li>
		</ul>
		
		<div id="content" class="container_16 clearfix">
			<div class="grid_11" style="width: 746px !important;">

			<h1>Create Template</h1>
			
<table>
<tr><td>Template Name</td><td><input type="text" name="template_name" id="template_name" style="width: 234px" /></td></tr>
<tr><td>content</td><td><textarea name="content" id="jcontent">{gecko_content}</textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" id="save" name="save" value="save" /></td></tr>
</table>
			
			</div>
			
				<div class="grid_5" style="width:164px !important;">
				<h2 style="padding-left: 35px;">Action</h2>
				<ul>
					<li><a href="/admin/create_template.php">Create a Template</a></li>
					<li><a href="/admin/template.php">Templates</a></li>
					<li><a href="/admin/dashboard.php">Dashboard</a></li>
				</ul>
			</div>
			
			
		</div>
		
		<div id="foot">
					<a href="/admin/logout.php">Logout</a>
		</div>

		
	</body>
</html>
<?php
//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}
?>