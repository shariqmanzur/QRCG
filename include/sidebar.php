<!-- Start of the sidebar section -->
<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
	<!-- Offcanvas for smaller screens -->
	<div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
		<!-- Offcanvas header -->
		<div class="offcanvas-header">
			<!-- Title for the offcanvas -->
			<h5 class="offcanvas-title" id="sidebarMenuLabel">QR Code Generator</h5>
			<!-- Close button for the offcanvas -->
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
		</div>
		<!-- Offcanvas body -->
		<div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
			<!-- Main navigation links -->
			<ul class="nav flex-column">
				<!-- Each li is a navigation item -->
				<!-- The 'active' class is added to the current page's link -->
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="dashboard.php">
						<svg class="bi">
							<use xlink:href="#house-fill"/>
						</svg>
						Dashboard
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center gap-2" href="#">
						<svg class="bi">
							<use xlink:href="#file-earmark"/>
						</svg>
						QR Code
					</a>
				</li>
				<?php
					if($_SESSION['QRCG_USER_ROLE']==0)
					{
					?>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center gap-2" href="#">
						<svg class="bi">
							<use xlink:href="#graph-up"/>
						</svg>
						Reports
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center gap-2" href="user.php">
						<svg class="bi">
							<use xlink:href="#people"/>
						</svg>
						Users
					</a>
				</li>
				<?php
					}
					?>
			</ul>
			<!-- Horizontal rule to separate sections -->
			<hr class="my-3">
			<!-- Other links (settings, sign out, etc.) -->
			<ul class="nav flex-column mb-auto">
				<!-- Each li is a link -->
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center gap-2" href="#">
						<svg class="bi">
							<use xlink:href="#gear-wide-connected"/>
						</svg>
						Settings
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link d-flex align-items-center gap-2" href="./signout.php">
						<svg class="bi">
							<use xlink:href="#door-closed"/>
						</svg>
						Sign out
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End of the sidebar section -->