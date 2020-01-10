<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/js/preloader.js"></script>
<script src="assets/js/preloader-modernizer.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/preloader.css">

<div id="loader-wrapper">
	<div id="loader"></div>
</div>
<header class="header-global">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top pl-2 pr-1">
		<div class="container-fluid px-md-5">
			<a class="navbar-brand" href="index.php"
				><img src="assets/img/brand/college_logo.png" class="mr-3" />
				ALUMNI ASSOCIATION OF MESCOE
			</a>
			<button
				class="navbar-toggler"
				type="button"
				data-toggle="collapse"
				data-target="#navbar-default"
				aria-controls="navbar-default"
				aria-expanded="false"
				aria-label="Toggle navigation"
			>
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbar-default">
				<div class="navbar-collapse-header">
					<div class="row">
						<div class="col-6 collapse-brand">
							<a class="navbar-brand text-default" href="index.php">
								<img src="assets/img/brand/college_logo.png" class="mr-3" />
								MESCOE ALUMNI PORTAL</a
							>
						</div>
						<div class="col-6 collapse-close">
							<button
								type="button"
								class="navbar-toggler"
								data-toggle="collapse"
								data-target="#navbar-default"
								aria-controls="navbar-default"
								aria-expanded="false"
								aria-label="Toggle navigation"
							>
								<span></span>
								<span></span>
							</button>
						</div>
					</div>
				</div>
				<ul class="navbar-nav ml-lg-auto">

		            <a href="gallery.php">
		            	<li class="nav-item">
		                    <button
		                    class="btn btn-flat text-white item"
		                    type="button"
		                    id="gallery"
		                    >
		                    GALLERY
		                  </button>
		                </li>
		            </a>

		            <a href="events.php">
		            	<ul class="navbar-nav ml-lg-auto">
		                  <li class="nav-item">
		                      <button
		                      class="btn btn-flat text-white item "
		                      type="button"
		                      id="events-and-updates"
		                      >
		                      EVENTS & UPDATES
		                    </button>
		                  </li>
		              </ul>
		            </a>
					<li class="nav-item batch-item">
						<div class="dropdown">
							<button
								class="btn btn-flat dropdown-toggle text-white item"
								type="button"
								id="batchmates"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								BATCHMATES
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="search.php">Directory</a>
								<a class="dropdown-item" href="yearbook.php">Yearbook</a>
								<a class="dropdown-item" href="nearby-alumni.php"
									>Nearby Alumni</a
								>
								<a class="dropdown-item" href="nearby-alumni.php"
									>Notable Alumni</a
								>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<button
								class="btn btn-flat dropdown-toggle text-white item"
								type="button"
								id="about"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								About
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="about.php">About Us</a>
								<a class="dropdown-item" href="about.php#Contact">Contact</a>
								<a class="dropdown-item" href="privacy-policy.php">Privacy Policy</a>
							</div>
						</div>
					</li>
					<li class="nav-item login-item">
						<div class="dropdown">
							<button
								class="btn btn-flat dropdown-toggle text-white item user-button"
								type="button"
								id="batchmates"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								<img
									src="assets/img/user-default.png"
									alt=""
									style="width: 2em;"
									id="profile-image"
									class="rounded-circle"
								/>
								<span class="pl-2" id="user-name">User Name</span>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="profile.php">Profile</a>
								<button class="dropdown-item" id="logout">Logout</button>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<?php
require_once 'firebase_include.php';
?>
<script src="assets/js/loginCheck.js"></script>
<script>
	$(".navbar-toggler").on("click", () => {
		let items = document.querySelectorAll(".item");
		for (let i = 0; i < items.length; i++) {
			items[i].classList.remove("text-white");
		}
	});
	$(".collapse-close").on("click", () => {
		let items = document.querySelectorAll(".item");
		for (let i = 0; i < items.length; i++) {
			items[i].classList.add("text-white");
		}
	});
</script>
