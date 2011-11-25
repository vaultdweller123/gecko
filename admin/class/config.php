<?php

class Gconfig{

	var $dbhost = 'localhost';
	var $dbuser = 'root';
	var $dbpass = '';
	var $database = 'gecko';
	
	public function start_session(){
		session_start();
	}
	
}

?>