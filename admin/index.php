<html>
<head>
jc
include_once("class/gecko.php");
// load jQuery
$gecko = new Gecko();
// parameter is path to jquery
echo $gecko->load_JQuery();
?>
<script type="text/javascript">
jQuery(document).ready(function(){

	// clicking the login button
	jQuery("#login").click(function(){
	
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
<h1>log-in</h1>
<table>
<tr><td>username:</td><td><input type="text" name="user" id="user" /></td></tr>
<tr><td>password:</td><td><input type="password" name="pass" id="pass" /></td></tr>
<tr><td><input type="submit" name="login" id="login" value="login" /></td></tr>
</table>
</body>
</html>