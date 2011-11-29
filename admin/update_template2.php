<?php 

require_once("connect.php");


$id = $_POST['id'];
$name = mysql_real_escape_string($_POST['template_name']);
$content = mysql_real_escape_string($_POST['content']);




	$sql = mysql_query("UPDATE template SET name='".$name."', content='".$content."' WHERE id='".$id."'");

	if($sql){
		echo "success";
	}else{
		echo "fail";
	}








?>