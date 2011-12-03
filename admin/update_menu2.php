<?php

//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

//load jQuery
include_once("include/loadjQuery.php");

$menu_id = $_POST['menu_id'];
$item_name = mysql_real_escape_string($_POST['menu_item_name']);
$item_url = mysql_real_escape_string($_POST['menu_item_url']);
$item_base = mysql_real_escape_string($_POST['menu_item_base']);



require_once("include/connect.php");

$sql = mysql_query("INSERT INTO menu_item VALUES('','".$item_name."','".$item_url."','".$item_base."','".$menu_id."')");

if($sql){
?>

<script type="text/javascript">
jQuery(document).ready(function(){

		jQuery("#jalert1").dialog({
				autoOpen: false,
				show: "blind",
				hide: "explode",
				close: function() {
					window.location='/admin/update_menu.php?id=<?=$menu_id?>';
				}
		});
		jQuery("#jalert1").dialog("open");
	
});
</script>
<div id="jalert1" title="gecko" style="display:none;">New Menu Item Saved!</div>

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
					window.location='/admin/update_menu.php?id=<?=$menu_id?>';
				}
		});
		jQuery("#jalert1").dialog("open");
	
});
</script>
<div id="jalert1" title="gecko" style="display:none;">Fail!</div>

<?php

}



//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}

?>