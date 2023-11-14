<?php
	// Include the database configuration and function files
	require_once('config/database.php');
	require_once('config/function.php');
	
	// Unset all the session variables
	session_unset();
	
	// Destroy the session
	session_destroy();
	
	// Redirect to the signin page
	header('location:signin.php');
	exit();
	?>