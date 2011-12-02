<?php







require_once("include/connect.php");

$id = $_POST['webpage'];




	$id2 = implode(",",$id);

	$sql = mysql_query("DELETE FROM webpage WHERE id IN(".$id2.")");

	if($sql){
	
		echo "success";
	}else{
	
		echo "fail";
	}

	








?>
