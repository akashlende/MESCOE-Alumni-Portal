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
		<title>About Us</title>
		<!-- Favicon -->
		<link href="assets/img/brand/favicon.png" rel="icon" type="image/png" />
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
		<style>
			@media (max-width: 33.9em) {
				.cont {
					margin-top: 1rem;
				}
			}
		</style>
	</head>

	<body style="overflow-x:hidden; margin-top: 100px;">
		<div class="container">
			<h1 class="mt-3 ml-3 mr-3 text-center">About Us</h1>
			<div class="col-sm-4 p-auto mx-auto my-auto">
				<img
					width="auto"
					class=" d-flex p-2 w-75 mx-auto px-auto my-auto py-auto "
					src="assets/img/brand/college_logo.png"
					alt="mescoe-logo"
					srcset=""
				/>
			</div>
			<?php require "header.php";?>
			<div class="row mt-3">
				<div class="col-md-12 text-justify">
					<p>
						Modern Education Society was established in 1932, with motto "FOR
						THE SPREAD OF LIGHT". The Modern Education Society's College of
						Engineering, Pune was established in 1999 and conducts the following
						courses leading to Bachelor's Degree in Engineering & Master Degree
						in Engineering
					</p>
				</div>
			</div>
		</div>

		<div
			id="Contact"
			class="mt-3 mb-4 bg-default block"
			style="width: 100%; height: 200px;"
		></div>

		<div
			class="row container mx-auto my-5"
			style=" height: auto; width: auto; top: -100px; position: relative; "
		>
			<div class="col-sm-4 box shadow bg-white rounded text-default">
				<h1 class="text-left p-1 mt-5 mx-auto">Contact Info</h1>
				<p class="p-2 my-auto mx-auto">
					19, Late Prin.V.K.Joag Path, Wadia College Campus,Off, Bund Garden Rd,
					Pune, Maharashtra 411001
				</p>
				<p class="p-2 my-auto mx-auto">
					<i class="fa fa-phone"></i>
					020-26163831
				</p>
				<p class="p-2 my-auto mx-auto">
					<i class="fa fa-envelope"></i>
					principal@mescoepune.org
				</p>
				<p class="p-2 mt-auto mx-auto">
					<i class="fa fa-link"></i>
					<a href="http://www.mescoepune.org/" target="_blank">
						mescoepune.org
					</a>
				</p>
			</div>

			<div class="col-sm-8 cont">
				<iframe
					class=""
					style="width: 100%; height: 100%;"
					src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3782.872540235003!2d73.87816886489297!3d18.534661137400775!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c0f855581855%3A0x9bfc35605df36ec5!2sModern%20Education%20Society&#39;s%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1577182656736!5m2!1sen!2sin"
					allowfullscreen
				></iframe>
			</div>
		</div>

		<script>
			document.querySelector(".navbar").classList.add("bg-default");
		</script>
		<!-- Core -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/popper/popper.min.js"></script>
		<script src="assets/vendor/bootstrap/bootstrap.min.js"></script>
		<script src="assets/vendor/headroom/headroom.min.js"></script>
		<!-- Optional JS -->
		<script src="assets/vendor/onscreen/onscreen.min.js"></script>
		<script src="assets/vendor/nouislider/js/nouislider.min.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
		<?php
require_once 'firebase_include.php';
?>
		<!-- Argon JS -->
		<script src="assets/js/argon.js?v=1.1.0"></script>
		<script>
			const firebaseConfig = {
				apiKey: "AIzaSyCBcqL0b8LqsURhdUOmmSBcntqXSI6uu7g",
				authDomain: "mescoe-alumni.firebaseapp.com",
				databaseURL: "https://mescoe-alumni.firebaseio.com",
				projectId: "mescoe-alumni",
				storageBucket: "mescoe-alumni.appspot.com",
				messagingSenderId: "332958193506",
				appId: "1:332958193506:web:b218c9102289cb36f0fe3b"
			};
			firebase.initializeApp(firebaseConfig);
			document.querySelector("nav").classList.add("bg-default");
		</script>
	</body>
</html>
<?php require_once "footer.php"?>
