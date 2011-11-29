<?php
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){
?>
<html>
<head>
</head>
<body>
<h1>Dashboard</h1>
<p>
<a href="/admin/webpage.php">web pages</a><br />
</p>
<p>
<a href="/admin/template.php">templates</a>
<p>
<p>
<a href="/admin/menu.php">view menu</a>
</p>
<p>
<a href="/admin/logout.php">logout</a><br />
</p>
</body>
</html>
<?php
//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}
?>