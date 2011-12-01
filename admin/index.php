<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Gecko</title>
		<link rel="stylesheet" href="css/960.css" type="text/css" media="screen" charset="utf-8" />
		<!--<link rel="stylesheet" href="css/fluid.css" type="text/css" media="screen" charset="utf-8" />-->
		<link rel="stylesheet" href="css/template.css" type="text/css" media="screen" charset="utf-8" />
		<link rel="stylesheet" href="css/colour.css" type="text/css" media="screen" charset="utf-8" />

			<?php
	// load jQuery
	include_once("include/loadjQuery.php");
	?>

		

<script type="text/javascript">
jQuery(document).ready(function(){


	

	// login form bounce effect
	jQuery("#frm_login").show("bounce");


	// clicking the login button
	jQuery("#login").click(function(){
	
	var user = jQuery("#user").val();
	var pass = jQuery("#pass").val();
	
	if(user!=""){
	
	
		if(pass!=""){
		
			jQuery.post("login.php",{ user:user, pass:pass },function(data){
		
				if(data=='login'){
					window.location='/admin/dashboard.php';
				}else if(data=='password incorrect'){
					alert('Password incorrect!');
				}else{
					alert('Username doesn\'t exist!');
				}
			
			});
		
		}else{
		
			alert("Enter password!");
		
		}
	
	
	
	}else{
	
		alert("Enter username!")
		
	}	
	
	
	

	
	
	});

	
		// pressing enter directly
		jQuery('#pass').keypress(function(e){
			if(e.which == 13){
    
				var user = jQuery("#user").val();
				var pass = jQuery("#pass").val();
		
				jQuery.post("login.php",{ user:user, pass:pass },function(data){
				
					if(data=='login'){
						window.location='/admin/dashboard.php';
					}else if(data=='password incorrect'){
						alert('Password incorrect!');
					}else{
						alert('Username doesn\'t exist!');
					}
					
				});
	
       }
      });

	

});
</script>
	</head>
	<body>
		
		<div id="frm_login">
	
					<h1 id="head" style="width:282px;text-align:center;margin-top:85px;">Gecko</h1>
		
		
		
			<div id="content" class="container_16 clearfix" style="width:301px;text-align:center;height: 149px">
				<div class="grid_4" style="float:none;">
					<p>
						Username: <input type="text" name="user" id="user" /><br />
						Password: <input type="password" name="pass" id="pass" />
			
					</p>
				</div>
		
				<div class="grid_2" style="float:none;">
					<p>
					
						<input type="submit" name="login" id="login" value="login" />
					</p>
				</div>
				
			</div>
			
			</div>
		
		
	</body>
</html>