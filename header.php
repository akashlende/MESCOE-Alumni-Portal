<header class="header-global">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
		<div class="container-fluid px-md-5">
			<a class="navbar-brand" href="index.php"
				><img src="assets/img/brand/college_logo.png" class="mr-3" />
				MESCOE ALUMNI PORTAL
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
					<li class="nav-item">
						<div class="dropdown">
							<button
								class="btn btn-flat dropdown-toggle text-white item"
								type="button"
								id="forms"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								FORMS
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="gallery-upload.php">Gallery Upload</a>
								<a class="dropdown-item" href="event-upload.php">Event Upload</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
						<div class="dropdown">
							<button
								class="btn btn-flat dropdown-toggle text-white item"
								type="button"
								id="media"
								data-toggle="dropdown"
								aria-haspopup="true"
								aria-expanded="false"
							>
								MEDIA
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="gallery.php">Gallery</a>
								<a class="dropdown-item" href="events.php">Events & Updates</a>
							</div>
						</div>
					</li>
					<li class="nav-item">
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
							</div>
						</div>
					</li>
					<li class="nav-item">
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
								/>
								<span class="pl-2">User Name</span>
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="profile.php">Profile</a>
								<a class="dropdown-item" href="#">Logout</a>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
<script src="assets/vendor/jquery/jquery.min.js"></script>
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
