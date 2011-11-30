<?php
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){
?>
<html>
<head>
		<?php 
// load gecko library
include_once('class/gecko.php');
$gecko = new Gecko();
// load jQuery
echo $gecko->load_jQuery();
 ?>
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
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="delete" value="delete" /></td></tr>
</tbody>
</table>
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