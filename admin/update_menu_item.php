<?php
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

$menu = $_GET['menu'];
$item = $_GET['menu_item'];
$gecko_menu = 2011;

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

	});
	
	
	// edit menu name, id and class
	jQuery("#edit_name").click(function(){
	
		jQuery("#menu_name").removeAttr("disabled");
		jQuery(this).hide();
		jQuery("#update_name").show();
	
	});
	
	
	jQuery("#edit_id").click(function(){
	
		jQuery("#menu_id").removeAttr("disabled");
		jQuery(this).hide();
		jQuery("#update_id").show();
	
	});
	
	
	jQuery("#edit_class").click(function(){
	
		jQuery("#menu_class").removeAttr("disabled");
		jQuery(this).hide();
		jQuery("#update_class").show();
	
	});
	
	
	jQuery("#update_name").click(function(){
	
		var x = jQuery("#menu_name").val();
	
		jQuery.post("/admin/update_menu3.php",{ x:x, y:"name", menu:"<?=$menu?>" }, function(data){
		
			if(data="success"){
				
				jQuery("#jcheck_name").fadeIn();
				jQuery("#menu_name").attr("disabled","disabled");
				jQuery("#update_name").hide();
				jQuery("#edit_name").show();
				
				
			}else{
			
				jQuery("#jalert1").dialog({
					autoOpen: false,
					show: "blind",
					hide: "explode"
				});
				jQuery("#jalert1").dialog("open");
				
			}
		
		
		});
	
	});
	
	
	jQuery("#update_id").click(function(){
	
		var x = jQuery("#menu_id").val();
	
		jQuery.post("/admin/update_menu3.php",{ x:x, y:"id", menu:"<?=$menu?>" }, function(data){
		
			if(data="success"){
				
				jQuery("#jcheck_id").fadeIn("blind");
				jQuery("#menu_id").attr("disabled","disabled");
				jQuery("#update_id").hide();
				jQuery("#edit_id").show();
				
				
			}else{
			
				jQuery("#jalert1").dialog({
					autoOpen: false,
					show: "blind",
					hide: "explode"
				});
				jQuery("#jalert1").dialog("open");
				
			}
		
		
		});
	
	});
	
	
	jQuery("#update_class").click(function(){
	
		var x = jQuery("#menu_class").val();
	
		jQuery.post("/admin/update_menu3.php",{ x:x, y:"class", menu:"<?=$menu?>" }, function(data){
		
			if(data="success"){
				
				jQuery("#jcheck_class").fadeIn("blind");
				jQuery("#menu_class").attr("disabled","disabled");
				jQuery("#update_class").hide();
				jQuery("#edit_class").show();
				
				
			}else{
			
				jQuery("#jalert1").dialog({
					autoOpen: false,
					show: "blind",
					hide: "explode"
				});
				jQuery("#jalert1").dialog("open");
				
			}
		
		
		});
	
	});
	

});
</script>
	</head>
	<body>
	
	<div id="jalert1" title="gecko" style="display:none;">Fail!</div>

		<h1 id="head"><a style="color:#FFFFFF;text-decoration:none;" href="/admin/dashboard.php">Gecko</a></h1>

		<?php require_once("include/menu.php"); ?>
		
		<div id="content" class="container_16 clearfix">
			<div class="grid_11" style="width: 746px !important;">

			<h1>Edit Menu Item</h1>
			
			<?php



require_once("include/connect.php");

$sql = mysql_query("SELECT * FROM menu WHERE id='".$menu."'");
while($row=mysql_fetch_array($sql)){

?>

<table style="width:auto;">

<tr><td>Name:</td><td><input type="text" style="width: 234px" name="menu_name" id="menu_name" value="<?=$row['name']?>" disabled="disabled"/>&nbsp;&nbsp;<button id="edit_name" type="button">edit</button><button id="update_name" style="display:none;" type="button">update</button><img id="jcheck_name" style="padding-left:4px;position:relative;top:3px;display:none;" src="css/check.jpg" /></td></tr>
<tr><td>ID:</td><td><input type="text" style="width: 234px" name="menu_id" id="menu_id" value="<?=$row['elem_id']?>" disabled="disabled" />&nbsp;&nbsp;<button type="button" id="edit_id">edit</button><button id="update_id" style="display:none;" type="button">update</button><img id="jcheck_id" style="padding-left:4px;position:relative;top:3px;display:none;" src="css/check.jpg" /></td></tr>
<tr><td>Class:</td><td><input type="text" style="width: 234px" name="menu_class" id="menu_class" value="<?=$row['elem_class']?>" disabled="disabled" />&nbsp;&nbsp;<button type="button" id="edit_class">edit</button><button id="update_class" style="display:none;" type="button">update</button><img id="jcheck_class" style="padding-left:4px;position:relative;top:3px;display:none;" src="css/check.jpg" /></td></tr>
<tr><td>Tag</td><td>{gecko_menu_<?=($gecko_menu+$row['id'])?>}</td></tr>


<?php } ?>
<form name="form1" method="post" action="update_menu_item2.php">
<?php



$sql5 = mysql_query("SELECT * FROM menu_item WHERE id='".$item."'");
while($row5=mysql_fetch_array($sql5)){

?>


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