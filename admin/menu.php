<?php
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){
?>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

	jQuery("#chkall").click(function(){
	
	
		if(jQuery(this).attr("checked")=="checked"){
			jQuery(".menu").attr("checked","checked");
		}else{
			jQuery(".menu").removeAttr("checked");
		}
		

});

});
</script>
</head>
<body>
<h1>Menu</h1>


<form name="form1" method="post" action="delete_menu.php">
<table>
<thead>
<tr>
<th><input type="checkbox" name="chkall" id="chkall" /></th><th>Menu</th>
</tr>
</thead>
<tbody>
<?php

require_once("connect.php");

$sql = mysql_query("SELECT * FROM menu");

while($row=mysql_fetch_array($sql)){

?>
<tr>
<td><input type="checkbox" name="menu[]" id="menu" class="menu" value="<?=$row['id']?>" /></td><td><a href="update_menu.php?id=<?=$row['id']?>"><?=$row['name']?><a/></td>
</tr>
<?php } ?>
</tbody>
</table>
<p><input type="submit" name="delete" value="delete" /></p>
</form>


<p><a href="/admin/create_menu.php">create dynamic menu</a></p>

<p><a href="/admin/dashboard.php">dashboard</a></p>
</body>
</html>
<?php
//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}
?>