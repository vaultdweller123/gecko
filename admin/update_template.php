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
		<title>Steal My Admin</title>
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
include_once("include/loadjQuery.php");
// instantiate CKEditor, pass arguments = id,attr(comma separated),path
echo $gecko->load_CKEditor("jcontent","height:400,fullPage:true");
 ?>
 <script type="text/javascript">
jQuery(document).ready(function(){


		jQuery("#update").click(function(){
		

			
				var template_name = jQuery("#template_name").val();
				var content = CKEDITOR.instances.jcontent.getData();
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

		<h1 id="head"><a style="color:#FFFFFF;text-decoration:none;" href="/admin/dashboard.php">Gecko</a></h1>

		<?php require_once("include/menu.php"); ?>
		
		<div id="content" class="container_16 clearfix">
			<div class="grid_11" style="width: 746px !important;">

			<h1>Edit Template</h1>
			
			<?php
if($_GET['frm_crt']){
?>
<div id="message" style="background-color:green;">New Template Saved!</div>
<?php
}
?>
			
			<?php

$id = $_GET['id'];

require_once("include/connect.php");

$sql = mysql_query("SELECT * FROM template WHERE id='".$id."'");

while($row=mysql_fetch_array($sql)){

?>
<div id="message" style="background-color:green;"></div>
<table>
<tr><td>template name</td><td><input type="text" name="template_name" id="template_name" value="<?=$row['name']?>" style="width: 234px" /></td></tr>
<tr><td>content</td><td><textarea name="content" id="jcontent"><?=$row['content']?></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="update" id="update" value="update" /></td></tr>
</table>
<input type="hidden" name="id" id="id" value="<?=$id?>" />

<?php
$setdt = $row['id'];
?>

<?php } ?>
			
			</div>
			
				<div class="grid_5" style="width:164px !important;">
				<h2 style="padding-left: 35px;">Action</h2>
				<ul>
					<li><a href="/admin/create_template.php">Create a Template</a></li>
					<li><a href="/admin/template.php">Templates</a></li>
					<li><a href="set_as_default_template.php?template=<?=$setdt?>">Set as Default Template</a></li>
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