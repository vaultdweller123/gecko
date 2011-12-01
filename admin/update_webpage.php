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

	
	// load content slide effects
	include_once("include/slide_effects.php");
	

// instantiate CKEditor, pass arguments = id,attr(comma separated),path
echo $gecko->load_CKEditor("jcontent","height:400");
 ?>
<script type="text/javascript">
jQuery(document).ready(function(){


		jQuery("#update").click(function(){
		

			
				var page_name = jQuery("#page_name").val();
				var content = CKEDITOR.instances.jcontent.getData();
				var template = jQuery("#template").val();
				var id = jQuery("#id").val();
				
			
			
				
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
	
	

		<h1 id="head"><a style="color:#FFFFFF;text-decoration:none;" href="/admin/dashboard.php">Gecko</a></h1>

		<?php require_once("include/menu.php"); ?>
		
		<div id="content" class="container_16 clearfix">
			<div class="grid_11" style="width: 746px !important;">

			<?php

$id = $_GET['id'];

include_once('include/connect.php');

$sql = mysql_query("SELECT * FROM webpage WHERE id='".$id."'");

while($row=mysql_fetch_array($sql)){

?>

<h1>Edit Web Page</h1>
			
		<?php
if($_GET['frm_crt']){
?>
<div id="message" style="background-color:green;">New Web Page Saved!</div>
<?php
}
?>
<div id="message" style="background-color:green;"></div>

<table>
<tr><td>page name</td><td><input type="text" name="page_name" id="page_name" value="<?=$row['name']?>" style="width: 234px" /></td></tr>
<tr><td>template</td>
<td>
<?php

$sql2 = mysql_query("SELECT * FROM template");


?>
<select name="template" id="template" style="width: auto;">
<option>no template</option>

<option value="-1" <?php if($row['temp_id']=='-1'){ echo "selected"; } ?>>use default template</option><?php
while($row2=mysql_fetch_array($sql2)){
?>

<option value="<?=$row2['id']?>" <?php if($row2[id]==$row['temp_id']){ echo "selected"; } ?>><?=$row2['name']?></option>
<?php } ?>
</select>
</td>
</tr>
<tr><td>content</td><td><textarea id="jcontent" name="content"><?=$row['content']?></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="update" id="update" value="update" /></td></tr>
</table>
<input type="hidden" name="id" id="id" value="<?=$id?>" />



<?php
$sethp = $row['id'];
?>

<?php } ?>
			
			</div>
			
				<div class="grid_5" style="width:164px !important;">
				<h2 style="padding-left: 35px;">Action</h2>
				<ul>
					<li><a href="/admin/create_webpage.php">Create a Web Page</a></li>
					<li><a href="/admin/webpage.php">Web Pages</a></li>
					<li><a href="/admin/set_as_homepage.php?page=<?=$sethp?>">Set as Home Page</a></li>
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