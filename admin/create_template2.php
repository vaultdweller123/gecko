<?php

//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

include_once('include/connect.php');

$name = $_POST['template_name'];
$content = mysql_real_escape_string($_POST['content']);



	$sql = mysql_query("INSERT INTO template VALUES('','".$name."','".$content."','')");

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