jc 

require_once("connect.php");

$id = $_POST['id'];
$template = $_POST['template'];
$name = mysql_real_escape_string($_POST['page_name']);
$content = mysql_real_escape_string($_POST['content']);



	$sql = mysql_query("UPDATE webpage SET name='".$name."', content='".$content."', temp_id='".$template."' WHERE id='".$id."'");

	if($sql){
		//echo "<script type='text/javascript'>alert('Update Successul');</script>";
		//echo "<script type='text/javascript'>window.location='/admin/update_webpage.php?id=".$id."'</script>";
		echo "success";
	}else{
		//echo "<script type='text/javascript'>alert('Fail');</script>";
		//echo "<script type='text/javascript'>window.location='/admin/update_webpage.php?id=".$id."'</script>";
		echo "fail";
	}









?>