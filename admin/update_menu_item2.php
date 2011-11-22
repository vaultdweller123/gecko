<?php

$id = $_POST['id'];
$item_name = mysql_real_escape_string($_POST['menu_item_name']);
$item_url = mysql_real_escape_string($_POST['menu_item_url']);
$item_base = mysql_real_escape_string($_POST['menu_item_base']);

require_once("connect.php");

$sql = mysql_query("UPDATE menu_item SET name='".$item_name."', url='".$item_url."', base='".$item_base."' WHERE id='".$id."'");

if($sql){
echo "<script type='text/javascript'>alert('New Menu Item Saved');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_menu.php'</script>";
}else{
echo "<script type='text/javascript'>alert('Fail');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_menu.php'</script>";
}

?>