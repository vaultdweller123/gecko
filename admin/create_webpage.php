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
// load gecko library
include_once('class/gecko.php');
$gecko = new Gecko();
// instantiate CKEditor, pass arguments = id,attr(comma separated),path
echo $gecko->load_CKEditor("jcontent","height:400");
// load jQuery
echo $gecko->load_jQuery();
 ?>
 <script type="text/javascript">
jQuery(document).ready(function(){



			
	
			
	
			jQuery("#save").click(function(){
			
			
			
				var page_name = jQuery("#page_name").val();
				var content = CKEDITOR.instances.jcontent.getData();
				var template = jQuery("#template").val();
			

			
			
				if(page_name){
			
					jQuery.post("/admin/create_webpage2.php",{ page_name:page_name, content:content, template:template }, function(data){
					
						if(data=='fail'){
							alert('Fail');
						}else{
							//alert('New Web Page Saved');
							window.location='/admin/update_webpage.php?id='+data+'&frm_crt=1';
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

		<ul id="navigation">
			<li><span><a href="/admin/webpage.php" class="active">Web Pages</a></span></li>
			<li><a href="/admin/template.php">Templates</a></li>
			<li><a href="/admin/menu.php">Dynamic menu</a></li>
		</ul>
		
		<div id="content" class="container_16 clearfix">
			<div class="grid_11" style="width: 746px !important;">

			<h1>Create Web Pages</h1>
			
			<table>
<tr><td>page name</td><td><input type="text" name="page_name" id="page_name" style="width: 234px" /></td></tr>
<tr><td>template</td>
<td>
<?php

include_once('connect.php');

$sql = mysql_query("SELECT * FROM template");



?>
<select name="template" id="template" style="width: auto;">
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
<tr><td>content</td><td><textarea id="jcontent" name="content"></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="save" id="save" value="save" /></td></tr>
</table>
			
			</div>
			
				<div class="grid_5" style="width:164px !important;">
				<h2 style="padding-left: 35px;">Action</h2>
				<ul>
					<li><a href="/admin/create_webpage.php">Create a Web Page</a></li>
					<li><a href="/admin/webpage.php">Web Pages</a></li>
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