<?php
	// Determine the current page
	$current_page = basename($_SERVER['PHP_SELF']);
	
	// Set the page title based on the current page
	if ($current_page == 'signin.php') {
	    $pageTitle = 'Signin';
	} elseif ($current_page == 'dashboard.php') {
	    $pageTitle = 'Dasboard';
	} else {
	    $pageTitle = 'Default Title';
	}
	?>
<!-- Include the JavaScript file for color modes -->
<script defer src="assets/js/color-modes.js"></script>
<!-- Set the character encoding for the document -->
<meta charset="utf-8">
<!-- Set the viewport of the document -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Set the description of the document -->
<meta name="description" content="">
<!-- Set the author of the document -->
<meta name="author" content="">
<!-- Set the title of the document -->
<title><?php echo $pageTitle; ?> · QRCG</title>
<!-- Include the Bootstrap CSS file -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<!-- Set the theme color for the browser toolbar -->
<meta name="theme-color" content="#712cf9">
<!-- Include the custom styles for this template -->
<link rel="stylesheet" href="assets/css/custom-styles.css">