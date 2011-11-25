<?php



include_once('class/config.php');

$conf = new Gconfig();

mysql_connect($conf->dbhost,$conf->dbuser,$conf->dbpass);
mysql_select_db($conf->database);
$conf->start_session();

?>