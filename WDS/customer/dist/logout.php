<?php 
	if ( session_status() != PHP_SESSION_ACTIVE ) session_start();
	unset($_SESSION['email']);
	session_destroy();
	echo "
          <script> 
            window.location.replace('../../index.php');
          </script>
          ";
 ?>