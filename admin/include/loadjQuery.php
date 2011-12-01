<?php 
// load jQuery
include_once('./class/gecko.php');
$gecko = new Gecko();
// load jQueryUI base CSS
echo $gecko->load_jQueryUICSS("/admin/jquery_ui/css/vader/jquery-ui-1.8.16.custom.css");
// load jQuery
echo $gecko->load_jQuery("/admin/js/jquery-1.7.1.min.js");
// load jQueryUI
echo $gecko->load_jQueryUI("/admin/jquery_ui/js/jquery-ui-1.8.16.custom.min.js");

 ?>