<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

	jQuery("#menu_item_url").click(function(){

		
		window.open("/admin/webpage_list.php",'','width=300,height=300');

	})

});
</script>
</head>
<body>

<h1>Dynamic Menu</h1>
<?php

$id = $_GET['id'];
$gecko_menu = 2011;

require_once("connect.php");

$sql = mysql_query("SELECT * FROM menu WHERE id='".$id."'");
while($row=mysql_fetch_array($sql)){

?>
<h1>name: <?=$row['name']?></h1>
<h2>id: <?=$row['elem_id']?></h2>
<h2>tag: {gecko_menu_<?=($gecko_menu+$row['id'])?>}</h2>
<?php } ?>
<form method="post" action="update_menu2.php" name="form1">
<table>

<tr><td>Item Name</td><td><input type="text" name="menu_item_name" /></td></tr>
<tr><td>Item URL</td><td><input type="text" id="menu_item_url" name="menu_item_url" /></td></tr>
<tr><td>Item Base</td>
<td>
<select name="menu_item_base">
<option value="-1">root</option>
<?php 
$sql2 = mysql_query("SELECT * FROM menu_item");
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
<p><a href="/admin/menu.php">view menus</a></p>
<p><a href="/admin/dashboard.php">main menu</a></p>
</body>
</html>