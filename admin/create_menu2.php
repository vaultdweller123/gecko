jc

require_once("connect.php");

$name = $_POST['menu_name'];
$id = $_POST['menu_id'];

if($name){

	$sql = mysql_query("INSERT INTO menu VALUES ('','".$name."','".$id."')");

	if($sql){
	echo "<script type='text/javascript'>alert('New Menu Saved');</script>";
	echo "<script type='text/javascript'>window.location='/admin/menu.php'</script>";
	}else{
	echo "<script type='text/javascript'>alert('Fail');</script>";
	echo "<script type='text/javascript'>window.location='/admin/create_menu.php'</script>";
	}

}else{

	echo "<script type='text/javascript'>alert('Please enter menu name!');</script>";
	echo "<script type='text/javascript'>window.location='/admin/create_menu.php'</script>";

}



?>