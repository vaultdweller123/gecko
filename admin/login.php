<?php

$user = $_POST['user'];
$pass = $_POST['pass'];

include_once('connect.php');
session_start();

$sql = mysql_query("SELECT * FROM users WHERE username = '".$user."'");

if(mysql_num_rows($sql)>0){

	// login
	while($row=mysql_fetch_array($sql)){

		if($pass==$row['password']){
			// store id as session
			$_SESSION['id'] = $row['id'];
			echo "login";
		}else{
		// password incorrect
			echo 'password incorrect';
		}

	}
}else{
	// fail
	echo "username doesn't exist";
}



?>