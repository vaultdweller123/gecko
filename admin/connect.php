<?php


include_once('class/config.php');
include_once('class/gecko.php');

// connect
$conf = new Gconfig();
mysql_connect($conf->dbhost,$conf->dbuser,$conf->dbpass);
mysql_select_db($conf->database);

// start session
$gecko =  new Gecko();
$gecko->start_session();

?>