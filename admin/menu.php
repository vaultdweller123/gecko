<?php
//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Gecko</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />
		<style type="text/css">
		#navigation a{
		text-decoration:none;
		}
		
		</style>
				<?php 
// load jQuery
include_once("include/loadjQuery.php");
 ?>
 	<?php
	// load content slide effects
	include_once("include/slide_effects.php");
	?>
		<script type="text/javascript">
jQuery(document).ready(function(){

	jQuery("#chkall").click(function(){
	
	
		if(jQuery(this).attr("checked")=="checked"){
			jQuery(".menu").attr("checked","checked");
		}else{
			jQuery(".menu").removeAttr("checked");
		}
		

	});


	// delete
	jQuery("#delete").click(function(){
			
			
				// stores all selected
				var chk = new Array();
				var i = 0;
				jQuery("input.menu:checked").each(function(){

					chk[i] = jQuery(this).val();
					i++;

				});
				
			
			
				// if at least one item is selected
				if(chk!=""){
				
				// instatiate the delete confirmation box
				jQuery("#jalert1").dialog({
							hide: "explode",
							buttons:{
							
								"yes": function() {
								
									// request page
									jQuery.post("/admin/delete_menu.php",{ menu:chk }, function(data){
										//success
										if(data=="success"){
										
											jQuery("input:checked").parent().parent().remove();
													xnum = jQuery("input.menu").length;
											if(xnum==0){
												jQuery("#jtable tbody").prepend("<tr><td colspan=\"2\">No Menu Created!</td></tr>");
											}
											jQuery("#jalert1").dialog( "close" );
										
										//fail
										}else{
										
											jQuery("#jalert2").dialog({
												autoOpen: false,
												show: "blind",
												hide: "explode"
											});
											jQuery("#jalert2").dialog("open");
										
										}
									
											
										});
												
										
								},
								"no": function() {
									jQuery( this ).dialog({
									
												autoOpen: false,
												hide: "explode"
									
									});
									jQuery( this ).dialog("close");
								}
								
							}
								
								
							
						});
						// call the delete confirmation box
						jQuery("#jalert1").dialog("open");			
									
							
			
					
					
				// no selected	
				}else{
		
					jQuery("#jalert3").dialog({
												autoOpen: false,
												show: "blind",
												hide: "explode"
											});
											jQuery("#jalert3").dialog("open");
		
				}
					
			
			});


});
</script>
	</head>
	<body>
	
	
	<div id="jalert1" title="gecko" style="display:none;">Are you sure you want to delete?</div>
	<div id="jalert2" title="gecko" style="display:none;">Fail!</div>
	<div id="jalert3" title="gecko" style="display:none;">Select at least one item to delete</div>

		<h1 id="head"><a style="color:#FFFFFF;text-decoration:none;" href="/admin/dashboard.php">Gecko</a></h1>

		<?php require_once("include/menu.php"); ?>
		
		<div id="content" class="container_16 clearfix">
			<div class="grid_11">
				<h2 style="padding-left:22px;" style="padding-left:22px;">Menu</h2>
				
<table id="jtable">
<thead>
<tr>
<th style="width:22px;"><input type="checkbox" name="chkall" id="chkall" style="width:auto!important;"  /></th><th>Name</th>
</tr>
</thead>
<tbody>
<?php

require_once("include/connect.php");

$sql = mysql_query("SELECT * FROM menu");


if(mysql_num_rows($sql)==0){
?>

<tr><td colspan="2">No Menu Created!</td></tr>

<?php

}else{

while($row=mysql_fetch_array($sql)){

?>
<tr>
<td style="width:22px;"><input type="checkbox" name="menu[]" id="menu" class="menu" value="<?=$row['id']?>" style="width:auto!important;" /></td><td><a href="update_menu.php?id=<?=$row['id']?>"><?=$row['name']?><a/></td>
</tr>
<?php } 

}

?>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="delete" id="delete" value="delete" /></td></tr>
</tbody>
</table>

			</div>
			
				<div class="grid_5">
				<h2 style="padding-left: 35px;">Action</h2>
				<ul>
					<li><a href="/admin/create_menu.php">Create Dynamic Menu</a></li>
					<li><a href="/admin/dashboard.php">Dashboard</a></li>
				</ul>
			</div>
			
			
		</div>
		
		<div id="foot">
					<a href="/admin/logout.php">Logout</a>
		</div>

		
	</body>
</html>
<?php
//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}
?>