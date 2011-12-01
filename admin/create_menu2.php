<?php

//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

require_once("include/connect.php");

$name = $_POST['menu_name'];
$id = $_POST['menu_id'];
$class = $_POST['menu_class'];



	$sql = mysql_query("INSERT INTO menu VALUES ('','".$name."','".$id."','".$class."')");

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