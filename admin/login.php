<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

include_once('connect.php');

$sql = mysql_query("SELECT * FROM users WHERE username = '".$user."'");

if(mysql_num_rows($sql)>0){

	//login
	while($row=mysql_fetch_array($sql)){

		if($pass==$row['password']){
			$_SESSION['id'] = $row['id'];
echo "<script>window.location='/admin/dashboard.php'</script>";
		}else{
			echo "<script>alert('Password incorrect!');</script>";
			echo "<script>window.location='/admin/index.php?user=".$user."&pass=".$pass."'</script>";
		}

	}
}else{
	//fail
	echo "<script>alert('Username doesn\'t exist!');</script>";
	echo "<script>window.location='/admin/index.php?user=".$user."&pass=".$pass."'</script>";
}



?>