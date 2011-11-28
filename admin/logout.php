<?php

unset($_SESSION['id']);
session_unset(); 
session_destroy();  
echo "<script>window.location='/admin/'</script>";

?>