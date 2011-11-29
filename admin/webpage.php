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
			jQuery(".webpage").attr("checked","checked");
		}else{
			jQuery(".webpage").removeAttr("checked");
		}
		

});

});
</script>
</head>
<body>
<h1>Web Pages</h1>
<form name="form1" method="post" action="delete_webpage.php">
<table>
<thead>
<tr>
<th><input type="checkbox" name="chkall" id="chkall" /></th><th>Web Pages</th>
</tr>
</thead>
<tbody>
<?php

include_once('connect.php');


$sql = mysql_query("SELECT * FROM webpage");

while($row=mysql_fetch_array($sql)){

?>
<tr>
<td><input type="checkbox" name="webpage[]" id="webpage" class="webpage" value="<?=$row['id']?>" /></td><td><a href="update_webpage.php?id=<?=$row['id']?>"><?=$row['name']?><?php if($row['homepage']==1){ echo "(set as homepage)"; } ?><a/></td>
</tr>
<?php } ?>
</tbody>
</table>
<p><input type="submit" name="delete" value="delete" /></p>
</form>
<p><a href="/admin/create_webpage.php">create pages</a></p>
<p><a href="/admin/dashboard.php">dashboard</a></p>
</body>
</html>
<?php
//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}
?>