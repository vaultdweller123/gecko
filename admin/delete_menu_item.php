<?php

//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

//load jQuery
include_once("include/loadjQuery.php");

require_once("include/connect.php");

$menu_item = $_GET['menu_item'];
$menu = $_GET['menu'];

//$id2 = implode(",",$id);

$sql2 = mysql_query("DELETE FROM menu_item WHERE id = ".$menu_item."");

if($sql2){
?>

<script type="text/javascript">
jQuery(document).ready(function(){

		jQuery("#jalert1").dialog({
				autoOpen: false,
				show: "blind",
				hide: "explode",
				close: function() {
					window.location='/admin/update_menu.php?id=<?=$menu?>';
				}
		});
		jQuery("#jalert1").dialog("open");
	
});
</script>
<div id="jalert1" title="gecko" style="display:none;">Delete Succesfull!</div>

<?php
//echo "<script type='text/javascript'>alert('Delete Succesfull!');</script>";
//echo "<script type='text/javascript'>window.location='/admin/update_menu.php?id=".$menu."'</script>";
}else{
?>

<script type="text/javascript">
jQuery(document).ready(function(){

		jQuery("#jalert1").dialog({
				autoOpen: false,
				show: "blind",
				hide: "explode",
				close: function() {
					window.location='/admin/update_menu.php?id=<?=$menu?>';
				}
		});
		jQuery("#jalert1").dialog("open");
	
});
</script>
<div id="jalert1" title="gecko" style="display:none;">Fail!</div>

<?php
//echo "<script type='text/javascript'>alert('Fail');</script>";
//echo "<script type='text/javascript'>window.location='/admin/update_menu.php?id=".$menu."'</script>";
}


//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}

?>