<?php
	// Start a new session or resume the existing session
	session_start();
	
	// Database configuration
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'qrcg';
	
	// Connect to the MySQL database
	$con = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
	
	// Check connection
	if (mysqli_connect_errno()) {
	    die("Failed to connect to MySQL: " . mysqli_connect_error());
	}
	?>