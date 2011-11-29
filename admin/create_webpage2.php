jc

include_once('connect.php');

$temp = $_POST['template'];
$name = mysql_real_escape_string($_POST['page_name']);
$content = mysql_real_escape_string($_POST['content']);



	$sql = mysql_query("INSERT INTO webpage VALUES('','".$name."','".$content."','".$temp."','0')");

	if($sql){
	echo "success";
	}else{
	echo "fail";
	}	







?>