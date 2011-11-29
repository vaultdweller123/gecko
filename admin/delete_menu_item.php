jc

require_once("connect.php");

$menu_item = $_GET['menu_item'];
$menu = $_GET['menu'];

//$id2 = implode(",",$id);

$sql2 = mysql_query("DELETE FROM menu_item WHERE id = ".$menu_item."");

if($sql2){
echo "<script type='text/javascript'>alert('Delete Succesfull!');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_menu.php?id=".$menu."'</script>";
}else{
echo "<script type='text/javascript'>alert('Fail');</script>";
echo "<script type='text/javascript'>window.location='/admin/update_menu.php?id=".$menu."'</script>";
}

?>