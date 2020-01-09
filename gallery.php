<!DOCTYPE html>
<html lang="en">
	<head>
		<?php require_once 'meta-data.php'; ?>
		<title>Gallery</title>
		<!-- Fonts -->
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
			rel="stylesheet"
		/>
		<!-- Icons -->
		<link href="assets/vendor/nucleo/css/nucleo.css" rel="stylesheet" />
		<link
			href="assets/vendor/font-awesome/css/font-awesome.min.css"
			rel="stylesheet"
		/>
		<!-- Argon CSS -->
		<link
			type="text/css"
			href="assets/css/argon.css?v=1.1.0"
			rel="stylesheet"
		/>
	</head>

	<body>
		<header class="header-global">
			<?php
require "header.php";
?>
		</header>
		<main>
			<div class="position-relative">
				<section class="section section-lg">
					<div class="container">
						<div class="col-md-12">
							<p class="h3 mb-3">Gallery</p>
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-12">
								<div class="row row-grid">
									<!--    -->
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</main>
		<!-- Core -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/popper/popper.min.js"></script>
		<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
		<script src="assets/vendor/headroom/headroom.min.js"></script>
		<!-- Argon JS -->
		<script src="assets/js/argon.js?v=1.1.0"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
		<?php 
			require_once 'firebase_include.php';
		?>

		<script src="assets/js/gallery.js" type="module"></script>
		<script>
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
<?php require_once "footer.php" ?>