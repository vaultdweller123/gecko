<html>
<head>
</head>
<body>
<h1>log-in</h1>
<table>
<form method="post" action="login.php">
<tr><td>username:</td><td><input type="text" name="user" value="<?=$_GET['user']?>" /></td></tr>
<tr><td>password:</td><td><input type="password" name="pass" value="<?=$_GET['pass']?>" /></td></tr>
<tr><td><input type="submit" name="login" value="login" /></td></tr>
</form>
</table>
</body>
</html>