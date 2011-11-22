<?php

require_once("connect.php");

?>
<html>
<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript">
function send_to_parent(url){
		window.opener.document.form1.menu_item_url.value = "index.php?page="+url;
		self.close();
	}
</script>
</head>
<body>
<h1>Web Pages</h1>
<ul>
<?php 
$sql = mysql_query("SELECT * FROM webpage");
while($row=mysql_fetch_array($sql)){
?>
<li><a href="javascript:void(0);" onclick="send_to_parent(<?=$row['id']?>)"><?=$row['name']?></a></li>
<?php } ?>
</ul>
</body>
</html>