<?php



include_once('./class/config.php');

// connect
$conf = new Gconfig();
mysql_connect($conf->dbhost,$conf->dbuser,$conf->dbpass);
mysql_select_db($conf->database);



?>