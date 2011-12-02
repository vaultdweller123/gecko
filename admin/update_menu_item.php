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

			<h1>Edit Menu Item</h1>
			
			<?php

$menu = $_GET['menu'];
$item = $_GET['menu_item'];
$gecko_menu = 2011;

require_once("include/connect.php");

$sql = mysql_query("SELECT * FROM menu WHERE id='".$menu."'");
while($row=mysql_fetch_array($sql)){

?>
<h1><?=$row['name']?></h1>
<h2>tag: {gecko_menu_<?=($gecko_menu+$row['id'])?>}</h2>
<?php } ?>
<form name="form1" method="post" action="update_menu_item2.php">
<?php



$sql5 = mysql_query("SELECT * FROM menu_item WHERE id='".$item."'");
while($row5=mysql_fetch_array($sql5)){

?>
<table style="width:auto;">

<tr><td>Item Name</td><td><input type="text" name="menu_item_name" value="<?=$row5['name']?>" style="width: 234px" /></td></tr>
<tr><td>Item URL</td><td><input type="text" name="menu_item_url" id="menu_item_url" value="<?=$row5['url']?>" style="width: 234px" /></td></tr>
<tr><td>Item Base</td>
<td>
<select name="menu_item_base" style="width: auto;">
<option value="-1" <?php if($row5['url']=='-1'){ echo "selected"; } ?>>root</option>
<?php 
$sql2 = mysql_query("SELECT * FROM menu_item WHERE menu='".$menu."'");
while($row2=mysql_fetch_array($sql2)){
 ?>
<option value="<?=$row2['id']?>" <?php if($row5['base']==$row2['id']){ echo "selected"; } ?>><?=$row2['name']?></option>
<?php } ?>
</select>
</td>
</tr>
<tr><td>&nbsp;<input type="hidden" name="id" value="<?=$item?>" /></td></tr>
<tr><td>&nbsp;<input type="hidden" name="base_menu" value="<?=$menu?>" /></td></tr>

<tr><td colspan="2"><input type="submit" name="save" value="save" /><a style="text-decoration:none;" href="delete_menu_item.php?menu_item=<?=$item?>&menu=<?=$menu?>"><button type="button">delete</button></a></td></tr>
</table>
<?php } ?>

</form>
<h2>Preview</h2>
<ul>
<?php

$sql3 = mysql_query("SELECT * FROM menu_item WHERE base='-1' AND menu='".$menu."'");
while($row3=mysql_fetch_array($sql3)){

?>
<li><a href="/admin/update_menu_item.php?menu_item=<?=$row3['id']?>&menu=<?=$menu?>" ><?=$row3['name']?></a>
<?php
$sql4 = mysql_query("SELECT * FROM menu_item WHERE base!='-1' AND base='".$row3['id']."' AND menu='".$menu."'");
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
<li><a href="/admin/update_menu_item.php?menu_item=<?=$row4['id']?>&menu=<?=$menu?>"><?=$row4['name']?></a></li>

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