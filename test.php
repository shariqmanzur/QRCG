<?php
	$pwd = "admin";
	
	// Hash the password
	$hash = password_hash($pwd, PASSWORD_DEFAULT);
	
	// Check if the password was hashed successfully
	if ($hash === false) {
	    // Password hashing failed
	    echo "Password hashing failed!";
	} else {
	    // Password hashed successfully
	    echo $hash;
	}
	?>