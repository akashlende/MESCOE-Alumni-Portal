<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<meta
			name="description"
			content="Start your development with a Design System for Bootstrap 4."
		/>
		<meta name="author" content="Creative Tim" />
		<title>Directory</title>
		<!-- Favicon -->
		<link
			href="./assets/img/brand/college_logo.png"
			rel="icon"
			type="image/png"
		/>
		<!-- Fonts -->
		<link
			href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
			rel="stylesheet"
		/>
		<!-- Icons -->
		<link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet" />
		<link
			href="./assets/vendor/font-awesome/css/font-awesome.min.css"
			rel="stylesheet"
		/>
		<!-- Argon CSS -->
		<link
			type="text/css"
			href="./assets/css/argon.css?v=1.1.0"
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
			<!--

=========================================================
* Argon Design System - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
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
		<script src="./assets/vendor/jquery/jquery.min.js"></script>
		<script src="./assets/vendor/popper/popper.min.js"></script>
		<script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
		<script src="./assets/vendor/headroom/headroom.min.js"></script>
		<!-- Argon JS -->
		<script src="./assets/js/argon.js?v=1.1.0"></script>
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
