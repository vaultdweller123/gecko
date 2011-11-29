<?php

//prevent URL direct access - start
session_start();
if(isset($_SESSION['id'])){

session_start();
unset($_SESSION['id']);
session_unset(); 
session_destroy();  
echo "<script>window.location='/admin/'</script>";


//prevent URL direct access - end
}else{
echo "<div style='color:red'>FUCK YOU KA!</div>";
}
?>