<?php
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Steal My Admin</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<style type="text/css">
		#navigation a{
		text-decoration:none;
		}
		
		</style>
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

		<h1 id="head">Gecko</h1>

		<ul id="navigation">
			<li><span><a href="/admin/webpage.php">Web Pages</a></span></li>
			<li><a href="/admin/template.php">Templates</a></li>
			<li><a href="/admin/menu.php">Dynamic menu</a></li>
		</ul>
		
		<div id="content" class="container_16 clearfix">
			<div class="grid_11" style="width:auto!important;" >
				<h2>Web Pages</h2>
				<form name="form1" method="post" action="delete_webpage.php">
<table id="jtable">
<thead>
<tr>
<th><input type="checkbox" name="chkall" id="chkall" style="width:auto!important;" /></th><th>Web Pages</th>
</tr>
</thead>
<tbody>
<?php

include_once('connect.php');


$sql = mysql_query("SELECT * FROM webpage");

while($row=mysql_fetch_array($sql)){

?>
<tr>
<td><input type="checkbox" name="webpage[]" id="webpage" class="webpage" value="<?=$row['id']?>" style="width:auto!important;" /></td><td><a href="update_webpage.php?id=<?=$row['id']?>"><?=$row['name']?><?php if($row['homepage']==1){ echo "(set as homepage)"; } ?><a/></td>
</tr>
<?php } ?>
</tbody>
</table>
<p><input type="submit" name="delete" value="delete" /></p>
</form>
			</div>
			
		</div>
		
		<div id="foot">
					<a href="/admin/logout.php">Logout</a>
		</div>

		
	</body>
</html>
<?php
//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}
?>