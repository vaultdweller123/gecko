<?php
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

require_once("include/connect.php");

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
		<?php 
// load jQuery
include_once("include/loadjQuery.php");
 ?>	
 <script type="text/javascript">
function send_to_parent(url){
		window.opener.document.form1.menu_item_url.value = "index.php?page="+url;
		self.close();
	}
</script>
	</head>
	<body>

		<h1 id="head">Gecko</h1>

		
		
		<div id="content" class="container_16 clearfix">
			<div class="grid_11" style="width:auto!important;" >
				<h1>Web Pages</h1>
				<ul>
<?php 
$sql = mysql_query("SELECT * FROM webpage");
while($row=mysql_fetch_array($sql)){
?>
<li><a href="javascript:void(0);" onclick="send_to_parent(<?=$row['id']?>)"><?=$row['name']?></a></li>
<?php } ?>
</ul>
			
			</div>
			
		</div>
		
		
		
	</body>
</html>
<?php
//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}
?>