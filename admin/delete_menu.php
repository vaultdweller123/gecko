<?php



require_once("include/connect.php");

$id = $_POST['menu'];



	$id2 = implode(",",$id);

	$sql = mysql_query("DELETE FROM menu WHERE id IN(".$id2.")");
	$sql2 = mysql_query("DELETE FROM menu_item WHERE menu IN(".$id2.")");

	if($sql){
		echo "success";
	}else{
		echo "fail";
	}




?>