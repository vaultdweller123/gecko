<?php

//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

include_once('connect.php');

$temp = $_POST['template'];
$name = mysql_real_escape_string($_POST['page_name']);
$content = mysql_real_escape_string($_POST['content']);



	$sql = mysql_query("INSERT INTO webpage VALUES('','".$name."','".$content."','".$temp."','0')");

	if($sql){
	echo mysql_insert_id();
	}else{
	echo "fail";
	}	



//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}


?>
