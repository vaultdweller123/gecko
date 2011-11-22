<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){

	jQuery("#chkall").click(function(){
	
	
		if(jQuery(this).attr("checked")=="checked"){
			jQuery(".template").attr("checked","checked");
		}else{
			jQuery(".template").removeAttr("checked");
		}
		

});

});
</script>
</head>
<body>
<h1>Templates</h1>



<form name="form1" method="post" action="delete_template.php">
<table>
<thead>
<tr>
<th><input type="checkbox" name="chkall" id="chkall" /></th><th>Web Pages</th>
</tr>
</thead>
<tbody>
<?php
require_once("connect.php");

$sql = mysql_query("SELECT * FROM template");

while($row=mysql_fetch_array($sql)){

?>
<tr>
<td><input type="checkbox" name="template[]" id="template" class="template" value="<?=$row['id']?>" /></td><td><a href="update_webpage.php?id=<?=$row['id']?>"><?=$row['name']?><?php if($row['gdefault']==1){ echo "(default)"; } ?><a/></td>
</tr>
<?php } ?>
</tbody>
</table>
<p><input type="submit" name="delete" value="delete" /></p>
</form>

<p><a href="/admin/">main menu</a></p>
</body>
</html>