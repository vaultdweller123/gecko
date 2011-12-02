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
include_once("include/loadjQuery.php");
 ?>
 	<?php
	// load content slide effects
	include_once("include/slide_effects.php");
	?>
 <script type="text/javascript">
jQuery(document).ready(function(){

	jQuery("#menu_item_url").click(function(){

		
		window.open("/admin/webpage_list.php",'','width=300,height=300');

	})

});
</script>
	</head>
	<body>

		<h1 id="head"><a style="color:#FFFFFF;text-decoration:none;" href="/admin/dashboard.php">Gecko</a></h1>

		<?php require_once("include/menu.php"); ?>
		
		<div id="content" class="container_16 clearfix">
			<div class="grid_11" style="width: 746px !important;">

			<h1>Dynamic Menu</h1>
			
			<?php

$id = $_GET['id'];
$gecko_menu = 2011;

require_once("include/connect.php");

$sql = mysql_query("SELECT * FROM menu WHERE id='".$id."'");
while($row=mysql_fetch_array($sql)){

?>
<h2>Name: <?=$row['name']?><br />
ID: <?=$row['elem_id']?><br />
Tag: {gecko_menu_<?=($gecko_menu+$row['id'])?>}</h2>
<?php } ?>
<form method="post" action="update_menu2.php" name="form1">
<table style="width:auto;">

<tr><td>Item Name</td><td><input type="text" name="menu_item_name" style="width: 234px" /></td></tr>
<tr><td>Item URL</td><td><input type="text" id="menu_item_url" name="menu_item_url" style="width: 234px" /></td></tr>
<tr><td>Item Base</td>
<td>
<select name="menu_item_base" style="width: auto;">
<option value="-1">root</option>
<?php 
$sql2 = mysql_query("SELECT * FROM menu_item WHERE menu='".$id."'");
while($row2=mysql_fetch_array($sql2)){
 ?>
<option value="<?=$row2['id']?>"><?=$row2['name']?></option>
<?php } ?>
</select>
</td>
</tr>
<tr><td>&nbsp;<input type="hidden" name="menu_id" value="<?=$id?>" /></td></tr>
<tr><td colspan="2"><input type="submit" name="save" value="save" /></td></tr>
</table>

</form>
<h2>Preview</h2>
<ul>
<?php

$sql3 = mysql_query("SELECT * FROM menu_item WHERE base='-1' AND menu='".$id."'");
while($row3=mysql_fetch_array($sql3)){

?>
<li><a href="/admin/update_menu_item.php?menu_item=<?=$row3['id']?>&menu=<?=$id?>"><?=$row3['name']?></a>
<?php
$sql4 = mysql_query("SELECT * FROM menu_item WHERE base!='-1' AND base='".$row3['id']."' AND menu='".$id."'");
?>
<?php
if(mysql_num_rows($sql4)>0){
?>
<ul>
<?php } ?>

<?php 
 

while($row4=mysql_fetch_array($sql4)){
?>

<?php
if($row4['base']==$row3['id']){

?>
<li><a href="/admin/update_menu_item.php?menu_item=<?=$row4['id']?>&menu=<?=$id?>"><?=$row4['name']?></a></li>

<?php } ?>



<?php } ?>
<?php
if(mysql_num_rows($sql4)>0){
?>
</ul>
<?php } ?>


</li>





<?php } ?>

</ul>
			
			</div>
			
				<div class="grid_5" style="width:164px !important;">
				<h2 style="padding-left: 35px;">Action</h2>
				<ul>
					<li><a href="/admin/create_menu.php">Create Dynamic Menu</a></li>
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