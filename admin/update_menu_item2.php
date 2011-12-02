<?php
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

//load jQuery
include_once("include/loadjQuery.php");

$id = $_POST['id'];
$base_menu = $_POST['base_menu'];
$item_name = mysql_real_escape_string($_POST['menu_item_name']);
$item_url = mysql_real_escape_string($_POST['menu_item_url']);
$item_base = mysql_real_escape_string($_POST['menu_item_base']);

if($item_name){

require_once("include/connect.php");

$sql = mysql_query("UPDATE menu_item SET name='".$item_name."', url='".$item_url."', base='".$item_base."' WHERE id='".$id."'");

if($sql){
?>

<script type="text/javascript">
jQuery(document).ready(function(){

		jQuery("#jalert1").dialog({
				autoOpen: false,
				show: "blind",
				hide: "explode",
				close: function() {
					window.location='/admin/update_menu.php?id=<?=$base_menu?>';
				}
		});
		jQuery("#jalert1").dialog("open");
	
});
</script>
<div id="jalert1" title="gecko" style="display:none;">Menu item has been updated!</div>

<?php

}else{
?>

<script type="text/javascript">
jQuery(document).ready(function(){

		jQuery("#jalert1").dialog({
				autoOpen: false,
				show: "blind",
				hide: "explode",
				close: function() {
					window.location='/admin/update_menu.php?id=<?=$base_menu?>';
				}
		});
		jQuery("#jalert1").dialog("open");
	
});
</script>
<div id="jalert1" title="gecko" style="display:none;">Fail!</div>

<?php

}

}else{
?>

<script type="text/javascript">
jQuery(document).ready(function(){

		jQuery("#jalert1").dialog({
				autoOpen: false,
				show: "blind",
				hide: "explode",
				close: function() {
					window.location='/admin/update_menu.php?id=<?=$base_menu?>';
				}
		});
		jQuery("#jalert1").dialog("open");
	
});
</script>
<div id="jalert1" title="gecko" style="display:none;">Enter Menu Item name!</div>

<?php
}

//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}
?>