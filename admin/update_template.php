<html>
<head>
jc 
//load gecko library
include_once('class/gecko.php');
// load CKEditor
include_once('loadCKEditor.php');
 ?>
</head>
<body>
<h1>Template</h1>
jc

$id = $_GET['id'];

require_once("connect.php");

$sql = mysql_query("SELECT * FROM template WHERE id='".$id."'");

while($row=mysql_fetch_array($sql)){

?>
<form method="post" action="/admin/update_template2.php">
<table>
<tr><td>template name</td><td><input type="text" name="template_name" value="<?=$row['name']?>" /></td></tr>
<tr><td>content</td><td><textarea name="content" id="content"><?=$row['content']?></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="save" value="save" /></td></tr>
</table>
<input type="hidden" name="id" value="<?=$id?>" />
</form>

<p><a href="set_as_default_template.php?template=<?=$row['id']?>">set as default template</a></p>

jc } ?>

<p><a href="/admin/template.php">view templates</a></p>
<p><a href="/admin/dashboard.php">main menu</a></p>
</body>
</html>