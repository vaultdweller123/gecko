<?php

include_once('connect.php');

$temp = $_POST['template'];
$name = mysql_real_escape_string($_POST['page_name']);
$content = mysql_real_escape_string($_POST['content']);

if($name){

	$sql = mysql_query("INSERT INTO webpage VALUES('','".$name."','".$content."','".$temp."','0')");

	if($sql){
	echo "<script type='text/javascript'>alert('New Web Page Saved');</script>";
	echo "<script type='text/javascript'>window.location='/admin/create_webpage.php'</script>";
	}else{
	echo "<script type='text/javascript'>alert('Fail');</script>";
	echo "<script type='text/javascript'>window.location='/admin/create_webpage.php'</script>";
	}	

}else{

	echo "<script type='text/javascript'>alert('Please enter webpage name');</script>";
	echo "<script type='text/javascript'>window.location='/admin/create_webpage.php'</script>";

}





?>