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
// load jQuery
echo $gecko->load_jQuery();
 ?>
		<script type="text/javascript">
jQuery(document).ready(function(){

	jQuery("#chkall").click(function(){
	
	
		if(jQuery(this).attr("checked")=="checked"){
			jQuery(".menu").attr("checked","checked");
		}else{
			jQuery(".menu").removeAttr("checked");
		}
		

});

});
</script>
	</head>
	<body>

		<h1 id="head"><a style="color:#FFFFFF;text-decoration:none;" href="/admin/dashboard.php">Gecko</a></h1>

		<ul id="navigation">
			<li><span><a href="/admin/webpage.php">Web Pages</a></span></li>
			<li><a href="/admin/template.php">Templates</a></li>
			<li><a href="/admin/menu.php" class="active">Dynamic menu</a></li>
		</ul>
		
		<div id="content" class="container_16 clearfix">
			<div class="grid_11">
				<h2 style="padding-left:22px;" style="padding-left:22px;">Menu</h2>
				<form name="form1" method="post" action="delete_menu.php">
<table>
<thead>
<tr>
<th style="width:22px;"><input type="checkbox" name="chkall" id="chkall" style="width:auto!important;"  /></th><th>Name</th>
</tr>
</thead>
<tbody>
<?php

require_once("connect.php");

$sql = mysql_query("SELECT * FROM menu");

while($row=mysql_fetch_array($sql)){

?>
<tr>
<td style="width:22px;"><input type="checkbox" name="menu[]" id="menu" class="menu" value="<?=$row['id']?>" style="width:auto!important;" /></td><td><a href="update_menu.php?id=<?=$row['id']?>"><?=$row['name']?><a/></td>
</tr>
<?php } ?>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="delete" value="delete" /></td></tr>
</tbody>
</table>
</form>
			</div>
			
				<div class="grid_5">
				<h2 style="padding-left: 35px;">Action</h2>
				<ul>
					<li><a href="/admin/create_menu.php">Create Dynamic Menu</a></li>
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