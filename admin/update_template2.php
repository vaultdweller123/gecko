<?php 

require_once("connect.php");


$id = $_POST['id'];
$name = mysql_real_escape_string($_POST['template_name']);
$content = mysql_real_escape_string($_POST['content']);


if($name){

	$sql = mysql_query("UPDATE template SET name='".$name."', content='".$content."' WHERE id='".$id."'");

	if($sql){
		echo "<script type='text/javascript'>alert('Update Successul');</script>";
		echo "<script type='text/javascript'>window.location='/admin/update_template.php?id=".$id."'</script>";
	}else{
		echo "<script type='text/javascript'>alert('Fail');</script>";
		echo "<script type='text/javascript'>window.location='/admin/update_template.php?id=".$id."'</script>";
	}

}else{

	echo "<script type='text/javascript'>alert('No tempate name entered! reverting back to orinal content');</script>";
	echo "<script type='text/javascript'>window.location='/admin/update_template.php?id=".$id."'</script>";

}






?>