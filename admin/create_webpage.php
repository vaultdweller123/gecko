<html>
<head>
</head>
<body>
<h1>Web Pages</h1>
<form method="post" action="/admin/create_webpage2.php">
<table>
<tr><td>page name</td><td><input type="text" name="page_name" /></td></tr>
<tr><td>template</td>
<td>
<?php

include_once('connect.php');

$sql = mysql_query("SELECT * FROM template");



?>
<select name="template">
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
<tr><td>content</td><td><textarea name="content" style="height: 451px;width: 577px;"></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="save" value="save" /></td></tr>
</table>
</form>

<p><a href="/admin/webpage.php">view web pages</a></p>
<p><a href="/admin/">main menu</a></p>
</body>
</html>