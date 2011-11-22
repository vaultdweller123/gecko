<?php

require_once("connect.php");

$menu_item = $_POST['menu_item'];
$menu = $_POST['menu'];

$id2 = implode(",",$id);

$sql2 = mysql_query("DELETE FROM menu_item WHERE id IN(".$menu_item.")");

if($sql){
echo "<script type='text/javascript'>alert('Delete Succesfull!');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_menu.php?id=".$menu."'</script>";
}else{
echo "<script type='text/javascript'>alert('Fail');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_menu.php?id=".$menu."'</script>";
}

?>