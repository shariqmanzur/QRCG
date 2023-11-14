<?php
	// Include the database configuration and function files
	require_once('config/database.php');
	require_once('config/function.php');
	
	// Initialize the message variable
	$msg = "";
	
	// Check if the form is submitted
	if(isset($_POST['submit']))
	{
	  // Get the safe values of email and password from the form
	  $email = sanitizeInput($_POST['email']);
	  $password = sanitizeInput($_POST['password']);
	
	  // Query the database to check if the email exists
	  $res = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
	  if(mysqli_num_rows($res) > 0)
	  {
	    // Fetch the user data
	    $row = mysqli_fetch_assoc($res);
	    $db_password = $row['password'];
	
	    // Verify the password
	    if(password_verify($password, $db_password))
	    {
	      // Set the session variables
	      $_SESSION['QRCG_USER_LOGIN'] = true;
	      $_SESSION['QRCG_USER_ID'] = $row['id'];
	      $_SESSION['QRCG_USER_NAME'] = $row['name'];
	      $_SESSION['QRCG_USER_ROLE'] = $row['role'];
	
	      // Redirect to the dashboard
	      header('location:dashboard.php');
	      exit();
	    }
	    else
	    {
	      // Set the error message for invalid password
	      $msg = "Please enter a valid password";
	    }
	  }
	  else
	  {
	    // Set the error message for invalid email
	    $msg = "Please enter a valid email";
	  }
	}
	?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
	<head>
		<?php
			// Include the head section of the page
			include('include/head.php');
			?>
		<!-- Include the custom CSS file for the sign-in page -->
		<link href="assets/css/sign-in.css" rel="stylesheet">
	</head>
	<body class="d-flex align-items-center py-4 bg-body-tertiary">
		<?php
			// Include the theme toggle functionality
			include('include/toggle_theme.php');
			?>
		<!-- Main content of the page -->
		<main class="form-signin w-100 m-auto">
			<!-- Start of the form -->
			<form method="POST">
				<!-- Logo of the company -->
				<img class="mb-4" src="assets/img/QR_code.svg" alt="QR_code.svg">
				<!-- Title of the form -->
				<h1 class="h3 mb-3 fw-normal">Please sign in</h1>
				<!-- Email input field -->
				<div class="form-floating">
					<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
					<label for="floatingInput">Email address</label>
				</div>
				<!-- Password input field -->
				<div class="form-floating">
					<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
					<label for="floatingPassword">Password</label>
				</div>
				<!-- Display any error messages -->
				<p class="text-danger text-center"><?php echo htmlspecialchars($msg); ?></p>
				<!-- Submit button for the form -->
				<button class="btn btn-primary w-100 py-2" type="submit" name="submit">Sign in</button>
				<!-- Copyright notice -->
				<p class="mt-5 mb-3 text-body-secondary">© <a href="https://github.com/shariqmanzur" target="_blank">Shariq Manzur</a> <?php echo date('Y'); ?></p>
			</form>
		</main>
		<!-- Include the Bootstrap JavaScript bundle -->
		<script src="assets/js/bootstrap.bundle.min.js"></script>
	</body>
</html>