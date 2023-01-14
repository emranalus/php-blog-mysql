<?php 
	
    session_start();
	session_unset();    // Remove all session variables.
	session_destroy();
	
    header('location: index.php');  // Redirect to main page.

?>
