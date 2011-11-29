<?php


include_once('connect.php');

$name = $_POST['template_name'];
$content = mysql_real_escape_string($_POST['content']);



	$sql = mysql_query("INSERT INTO template VALUES('','".$name."','".$content."','')");

	if($sql){
		echo "success";
	}else{
		echo "fail";
	}







?>