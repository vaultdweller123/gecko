<?php




$name = mysql_real_escape_string($_POST['template_name']);
$content = mysql_real_escape_string($_POST['content']);



include_once('connect.php');

$sql = mysql_query("INSERT INTO template VALUES('','".$name."','".$content."','')");

if($sql){
echo "<script type='text/javascript'>alert('New Template Saved');</script>";
echo "<script type='text/javascript'>window.location='/admin/create_template.php'</script>";
}else{
echo "<script type='text/javascript'>alert('Fail');</script>";
echo "<script type='text/javascript'>window.location='/admin/create_template.php'</script>";
}

?>