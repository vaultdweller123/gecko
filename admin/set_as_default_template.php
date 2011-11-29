jc

$template = $_GET['template'];

include_once('connect.php');




$sql = mysql_query("UPDATE template SET gdefault='0'");
$sql2 = mysql_query("UPDATE template SET gdefault='1' WHERE id='".$template."'");

if($sql2){
echo "<script type='text/javascript'>alert('New homepage has been set');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_template.php?id=".$template."'</script>";
}else{
echo "<script type='text/javascript'>alert('Fail');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_template.php?id=".$template."'</script>";
}

?>