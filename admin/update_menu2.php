<?php

//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

$menu_id = $_POST['menu_id'];
$item_name = mysql_real_escape_string($_POST['menu_item_name']);
$item_url = mysql_real_escape_string($_POST['menu_item_url']);
$item_base = mysql_real_escape_string($_POST['menu_item_base']);

require_once("connect.php");

$sql = mysql_query("INSERT INTO menu_item VALUES('','".$item_name."','".$item_url."','".$item_base."','".$menu_id."')");

if($sql){
echo "<script type='text/javascript'>alert('New Menu Item Saved');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_menu.php?id=".$menu_id."'</script>";
}else{
echo "<script type='text/javascript'>alert('Fail');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_menu.php?id=".$menu_id."'</script>";
}

//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}

?>