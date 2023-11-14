<?php
	// Include the database configuration and function files
	require_once('config/database.php');
	require_once('config/function.php');
	
	// Check if the user is authenticated
	ensureAuthenticated();
	?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
	<head>
		<?php
			// Include the head section of the page
			include('include/head.php');
			?>
		<!-- Include the custom CSS file for the dashboard -->
		<link href="assets/css/dashboard.css" rel="stylesheet">
	</head>
	<body>
		<?php
			// Include the theme toggle functionality, SVG icons, and header section of the page
			include('include/toggle_theme.php');
			include('include/svg_icon.php');
			include('include/header.php');
			?>
		<!-- Start of the main content -->
		<div class="container-fluid">
			<div class="row">
				<?php
					// Include the sidebar navigation of the page
					include('include/sidebar.php');
					?>
				<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="min-height: 100vh;">
					<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
						<h1 class="h2">Dashboard</h1>
					</div>
					<h2>Section title</h2>
					<div class="table-responsive small">
						<table class="table table-striped table-sm">
							<!-- Table headers -->
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Header</th>
									<th scope="col">Header</th>
									<th scope="col">Header</th>
									<th scope="col">Header</th>
								</tr>
							</thead>
							<!-- Table body -->
							<tbody>
								<tr>
									<td>1,001</td>
									<td>random</td>
									<td>data</td>
									<td>placeholder</td>
									<td>text</td>
								</tr>
							</tbody>
						</table>
					</div>
				</main>
			</div>
		</div>
		<?php
			// Include the footer section of the page
			include('include/footer.php');
			?>
	</body>
</html>