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

			<h1>Create Dynamic Menu</h1>
			
<form method="post" action="/admin/create_menu2.php">
<table>
<tr><td>menu name</td><td><input type="text" name="menu_name" style="width: 234px" /></td></tr>
<tr><td>menu ID</td><td><input type="text" name="menu_id" style="width: 234px" /></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="save" value="save" /></td></tr>
</table>
</form>
			
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