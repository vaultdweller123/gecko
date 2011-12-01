<?php 

//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

require_once("connect.php");

$id = $_POST['id'];
$template = $_POST['template'];
$name = mysql_real_escape_string($_POST['page_name']);
$content = mysql_real_escape_string($_POST['content']);



	$sql = mysql_query("UPDATE webpage SET name='".$name."', content='".$content."', temp_id='".$template."' WHERE id='".$id."'");

	if($sql){
		echo "success";
	}else{
		echo "fail";
	}



//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}





?>