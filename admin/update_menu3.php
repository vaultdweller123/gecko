<?php

include_once('include/connect.php');

$x = $_POST['x'];
$y = $_POST['y'];
$menu = $_POST['menu'];

switch($y){

	case 'name':
		$z = "name='".$x."'";
	break;
	
	case 'id':
		$z = "elem_id='".$x."'";
	break;
	
	case 'class':
		$z = "elem_class='".$x."'";
	break;
	
}

$sql = mysql_query("UPDATE menu SET ".$z." WHERE id='".$menu."'");

if($sql){
	echo "success";
}else{
	echo "fail";
}

?>