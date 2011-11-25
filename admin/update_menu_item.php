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

$menu = $_GET['menu'];
$item = $_GET['menu_item'];
$gecko_menu = 2011;

require_once("connect.php");

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
<table>

<tr><td>Item Name</td><td><input type="text" name="menu_item_name" value="<?=$row5['name']?>" /></td></tr>
<tr><td>Item URL</td><td><input type="text" name="menu_item_url" id="menu_item_url" value="<?=$row5['url']?>" /></td></tr>
<tr><td>Item Base</td>
<td>
<select name="menu_item_base">
<option value="-1" <?php if($row5['url']=='-1'){ echo "selected"; } ?>>root</option>
<?php 
$sql2 = mysql_query("SELECT * FROM menu_item");
while($row2=mysql_fetch_array($sql2)){
 ?>
<option value="<?=$row2['id']?>" <?php if($row5['base']==$row2['id']){ echo "selected"; } ?>><?=$row2['name']?></option>
<?php } ?>
</select>
</td>
</tr>
<tr><td>&nbsp;<input type="hidden" name="id" value="<?=$item?>" /></td></tr>

<tr><td colspan="2"><input type="submit" name="save" value="save" /><a style="text-decoration:none;" href="delete_menu_item.php?menu_item=<?=$row5['menu_item']?>&menu=<?=$menu?>"><button type="button">delete</button></a></td></tr>
</table>
<?php } ?>

</form>
<h2>Preview</h2>
<ul>
<?php

$sql3 = mysql_query("SELECT * FROM menu_item WHERE base='-1'");
while($row3=mysql_fetch_array($sql3)){

?>
<li><a href="/admin/update_menu_item.php?menu_item=<?=$row3['id']?>&menu=<?=$menu?>" ><?=$row3['name']?></a>
<?php
$sql4 = mysql_query("SELECT * FROM menu_item WHERE base!='-1' AND base='".$row3['id']."'");
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
<p><a href="/admin/menu.php">view menus</a></p>
<p><a href="/admin/dashboard.php">main menu</a></p>
</body>
</html>