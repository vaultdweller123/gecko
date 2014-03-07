<?php


/*
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
*/

//$dr = $_SERVER['DOCUMENT_ROOT'];

//require_once("/home/a1064421/public_html/admin/include/connect.php");

//echo $_SERVER['DOCUMENT_ROOT'];

//echo glob($_SERVER["DOCUMENT_ROOT"]."/admin/*");

//require_once '/admin/class/config.php';

//require_once getenv("DOCUMENT_ROOT") . "/admin/class/config.php";

$dir = explode(DIRECTORY_SEPARATOR, dirname(__FILE__));
$document_root = "";
foreach($dir as $val){
	$document_root .= $val."/";
}
echo $document_root;

?>