<?php

//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

$page = $_GET['page'];

include_once('include/connect.php');




$sql = mysql_query("UPDATE webpage SET homepage='0'");
$sql2 = mysql_query("UPDATE webpage SET homepage='1' WHERE id='".$page."'");

if($sql2){
echo "<script type='text/javascript'>alert('New homepage has been set');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_webpage.php?id=".$page."'</script>";
}else{
echo "<script type='text/javascript'>alert('Fail');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_webpage.php?id=".$page."'</script>";
}

//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}

?>