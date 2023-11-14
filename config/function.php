<?php
	// Function to print an array in a readable format
	function printArray($arr)
	{
	    echo "<pre>";
	    print_r($arr);
	}
	
	// Function to print an array in a readable format and then stop the script
	function printArrayAndExit($arr)
	{
	    printArray($arr);
	    exit();
	}
	
	// Function to escape special characters in a string for use in an SQL statement
	function sanitizeInput($str)
	{
	    global $con;
	    return $str != '' ? mysqli_real_escape_string($con, $str) : '';
	}
	
	// Function to check if the user is authenticated
	function ensureAuthenticated()
	{
	    if(!isset($_SESSION['QRCG_USER_LOGIN']))
	    {
	        header('location:signin.php');
	        exit();
	    }
	}
	
	// Function to check if the user has admin privileges
	function ensureAdminRole()
	{
	    if($_SESSION['QRCG_USER_ROLE'] != 0)
	    {
	        header('location:dashboard.php');
	        exit();
	    }
	}
	?>