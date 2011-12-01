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
include_once('include/loadjQuery.php');
 ?>
	<?php
	// load content slide effects
	include_once("include/slide_effects.php");
	?>
 <script type="text/javascript">
jQuery(document).ready(function(){



			
	
			
	
			jQuery("#save").click(function(){
			
			
				var menu_name= jQuery("#menu_name").val();
				var menu_id = jQuery("#menu_id").val();
				var menu_class = jQuery("#menu_class").val();
				
			

			
			
				if(menu_name){
			
					jQuery.post("/admin/create_menu2.php",{ menu_name:menu_name, menu_id:menu_id, menu_class:menu_class }, function(data){
					
						if(data=='fail'){
							alert('Fail');
						}else{
							window.location='/admin/update_menu.php?id='+data+'&frm_crt=1';
						}
					
					});
					
					
				}else{
		
					alert('Please enter menu name');
		
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

			<h1>Create Dynamic Menu</h1>
			

<table>
<tr><td>menu name</td><td><input type="text" name="menu_name" id="menu_name" style="width: 234px" /></td></tr>
<tr><td>menu ID</td><td><input type="text" name="menu_id" id="menu_id" style="width: 234px" /></td></tr>
<tr><td>menu Class</td><td><input type="text" name="menu_class" id="menu_class" style="width: 234px" /></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="save" id="save" value="save" /></td></tr>
</table>

			
			</div>
			
				<div class="grid_5" style="width:164px !important;">
				<h2 style="padding-left: 35px;">Action</h2>
				<ul>
					<li><a href="/admin/menu.php">View Menus</a></li>
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