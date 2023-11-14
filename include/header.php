<!-- Start of the header section -->
<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
	<!-- Brand name for the navbar -->
	<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#">QR Code Generator</a>
	<!-- Display the welcome message with the user's name -->
	<div class="text-white me-4">Welcome, <?php echo htmlspecialchars($_SESSION['QRCG_USER_NAME']); ?></div>
	<!-- Navbar items for smaller screens -->
	<ul class="navbar-nav flex-row d-md-none">
		<li class="nav-item text-nowrap">
			<!-- Button to toggle the sidebar navigation -->
			<button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
				<!-- SVG icon for the button -->
				<svg class="bi">
					<use xlink:href="#list"/>
				</svg>
			</button>
		</li>
	</ul>
</header>
<!-- End of the header section -->