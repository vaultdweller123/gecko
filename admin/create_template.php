<html>
<head>
<script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
</head>
<body>
<h1>Template</h1>
<form method="post" action="/admin/create_template2.php">
<table>
<tr><td>Template Name</td><td><input type="text" name="template_name" /></td></tr>
<tr><td>content</td><td><textarea name="content" id="content"></textarea></td></tr>
<tr><td colspan="2">&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="save" value="save" /></td></tr>
</table>
</form>
<p><a href="/admin/template.php">view templates</a></p>
<p><a href="/admin/dashboard.php">main menu</a></p>
<script type="text/javascript">
				CKEDITOR.replace( 'content', 
				{
					height:400
				});
			</script>
</body>
</html>