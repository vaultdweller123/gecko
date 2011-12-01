<?php 
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

require_once("include/connect.php");


$id = $_POST['id'];
$name = mysql_real_escape_string($_POST['template_name']);
$content = mysql_real_escape_string($_POST['content']);




	$sql = mysql_query("UPDATE template SET name='".$name."', content='".$content."' WHERE id='".$id."'");

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