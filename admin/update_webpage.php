<html>
<head>
</head>
<body>
<?php

$id = $_GET['id'];

include_once('connect.php');

$sql = mysql_query("SELECT * FROM webpage WHERE id='".$id."'");

while($row=mysql_fetch_array($sql)){

?>
<h1><?=$row['name']?><?php if($row['homepage']==1){ echo "(default)"; }  ?></h1>
<form method="post" action="/admin/update_webpage2.php">
<table>
<tr><td>page name</td><td><input type="text" name="page_name" value="<?=$row['name']?>" /></td></tr>
<tr><td>template</td>
<td>
<?php

$sql2 = mysql_query("SELECT * FROM template");


?>
<select name="template">
<option>no template</option>

<option value="-1" <?php if($row['temp_id']=='-1'){ echo "selected"; } ?>>use default template</option><?php
while($row2=mysql_fetch_array($sql2)){
?>

<option value="<?=$row2['id']?>" <?php if($row2[id]==$row['temp_id']){ echo "selected"; } ?>><?=$row2['name']?></option>
<?php } ?>
</select>
</td>
</tr>
<tr><td>content</td><td><textarea name="content" style="height: 451px;width: 577px;"><?=$row['content']?></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="save" value="save" /></td></tr>
</table>
<input type="hidden" name="id" value="<?=$id?>" />
</form>

<p><a href="set_as_homepage.php?page=<?=$row['id']?>">set as homepage</a></p>

<?php } ?>

<p><a href="/admin/webpage.php">view web pages</a></p>
<p><a href="/admin/">main menu</a></p>

</body>
</html>